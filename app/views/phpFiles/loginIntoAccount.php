<?php
session_start();

    function findUserInDatabase($db_email, $db_password, $input_email, $input_password){
        if($input_email === $db_email){
            if(password_verify($input_password, $db_password)==1){
               return 1;
            }
        }
        return 0;
    }

    $status = true;
    $message = array();
    
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    
    if(!isset($_POST["email"]) || !isset($_POST["password"]) || empty($email) || empty($password)){
        $status = false;
        $message[] = 'Please fill in all the inputs.';
    }else{
    
    $servername="localhost";
    $user="root";
    $db_password="";
    $db="user_exemplu";
    

    $conn = new mysqli($servername, $user, $db_password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT email, password FROM user_exemplu.users WHERE email = ? ;");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $numberOfRows = $result->num_rows;

    if($numberOfRows == 0 ){
        $status = false;
        $message[] = 'Invalid user/password.';        
    }else{

        while($row = $result->fetch_assoc()){ 
                if(findUserInDatabase($row["email"], $row["password"], $email, $password)==1){
                    $_SESSION["email"] = $email;
                    $status = true;
                    $message[] = 'You in.';
                }else{
                    $status = false;
                    $message[] = 'Incorrect email/password.';           
                }
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