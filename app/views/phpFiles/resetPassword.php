<?php
session_start();
    function checkToken($token, $sendedToken){
        if(password_verify($token, $sendedToken)==1){
            return 1;
        }
        return 0;
    }

    $email = isset($_SESSION["emailForReset"]) ? $_SESSION["emailForReset"] : '';
    $token = isset($_POST["token"]) ? $_POST["token"] : '';
    $new_password = isset($_POST["newPassword"]) ? $_POST["newPassword"] : '';

    $status = true;
    $message = array();


if(empty($email) && empty($token) && empty($new_password)){
        $status = false;
        $message[] = 'You need to enter your email.';
}else if(!empty($email) && empty($token) && empty($new_password)){
    $status = false;
    $message[] = 'You need enter the token.';
}else  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $status = false;
    $message[] = 'Please give a valid email adress.';
}else if((empty($email) || empty($token)) && !empty($new_password)){
    $status = false;
    $message[] = 'We need your email and your token, buddy. :) ';
}else if (empty($new_password)){
    $status = false;
    $message[] = 'Choose a password.';   
}else{
    
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
        $sendedToken = $_SESSION["hashToken"];
        if(!empty($token)){
            if(checkToken($token, $sendedToken)==1){
                    $hashPass = password_hash($new_password, PASSWORD_DEFAULT);
                    $newHashPassword = $hashPass;
                    $stmt = $conn->prepare("UPDATE user_exemplu.users SET password=? WHERE email=?");
                    $stmt->bind_param('ss', $newHashPassword,$email);
                    $stmt->execute();

                    if($stmt->execute()){
                        $stmt->close();
                        $_SESSION = array();
                        if (ini_get("session.use_cookies")) {
                            $params = session_get_cookie_params();
                            setcookie(session_name(), '', time() - 42000,
                                $params["path"], $params["domain"],
                                $params["secure"], $params["httponly"]
                            );
                        }
                        session_destroy();
        
                        $status = true;
                        $message[] = 'Updated succesfully.';
                            
                    }else{
                        $status = false;
                        $message[] = 'There was a problem at updating your password.';
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