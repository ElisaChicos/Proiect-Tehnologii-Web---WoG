<?php
session_start();
    function checkToken($token, $sendedToken){
        if(password_verify($token, $sendedToken)==1){
            return 1;
        }
        return 0;
    }

    $email = isset($_SESSION["email"]) ? $_SESSION["email"] : '';
    $token = isset($_POST["token"]) ? $_POST["token"] : '';
    $new_password = isset($_POST["newPassword"]) ? $_POST["newPassword"] : '';
    $confirm_password = isset($_POST["confirmPassword"]) ? $_POST["confirmPassword"] : '';
    $sendedToken = $_SESSION["hashToken"];

    $status = true;
    $message = array();

if(empty($email) && empty($token) && empty($new_password) && empty($confirm_password)){
    $status = false;
    $message[] = 'You need to modify an input to save the changes.';
}else  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $status = false;
    $message[] = 'Please give a valid email adress.';
}else if((empty($email) || empty($token)) && (!empty($new_password) || !empty($confirm_password))){
    $status = false;
    $message[] = 'We need your email and your token, buddy. :) ';
} else if ((!empty($new_password) && empty($confirm_password)) || (empty($new_password) && !empty($confirm_password))){
    $status = false;
    $message[] = 'Complete both password inputs.';   
}else {
    
    $servername="localhost";
    $user="root";
    $db_password="";
    $db="user_exemplu";
        
    $conn = new mysqli($servername, $user, $db_password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("SELECT email FROM user_exemplu.users WHERE email = ? ;");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $numberOfRows = $result->num_rows;
    $stmt->close();
    if($numberOfRows == 0 ){
        $status = false;
        $message[] = 'This account does not exist.';       
    }else{
        if(!empty($token)){
        if(checkToken($token, $sendedToken)==1){
            if($new_password == $confirm_password){
                $hashPass = password_hash($new_password, PASSWORD_DEFAULT);
                $newHashPassword = $hashPass;
                $stmt = $conn->prepare("UPDATE user_exemplu.users SET password=? WHERE email=?");
                $stmt->bind_param('ss', $newHashPassword,$email);
                $stmt->execute();
                if($stmt->execute()){
                    $stmt->close();
                    $status = true;
                    $message[] = 'Updated succesfully.';
                }else{
                    $status = false;
                    $message[] =  'There was a problem at updating your password.';
                }
            }else{
                $status = false;
                $message[] = "Your password's don't match."; 
            }
        }else{
            $status = false;
            $message[] = 'Your token is not correct. Please check again.'; 
        }
    }else{
        $status = false;
        $message[] = 'Your token input can not be empty.';   
    }
    }
}
echo json_encode(
    array(
        'status' => $status,
        'message' => $message
    )
);

?>