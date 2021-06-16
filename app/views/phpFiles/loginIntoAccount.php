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
        //echo 'nu e setat';
    }
    
    $servername="localhost";
    $user="root";
    $db_password="";
    $db="user_exemplu";
    

    $conn = new mysqli($servername, $user, $db_password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    //$aVar=mysqli_connect($host,$user,$password);
    //mysqli_select_db($aVar,$db);

    //if($status == true){
    //$query = "SELECT * FROM user_exemplu.users where email = '$email';";
    //$result = mysqli_query($aVar,$query) or die( mysqli_error($aVar));
    //$sql = "SELECT email, password FROM user_exemplu.users WHERE email = ? ;";

    $stmt = $conn->prepare("SELECT email, password FROM user_exemplu.users WHERE email = ? ;");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $numberOfRows = $result->num_rows;

    if($numberOfRows == 0 ){
        $status = false;
        $message[] = 'Invalid user/password.';
        //echo 'nu gasesc in db';        
    }else{

        while($row = $result->fetch_assoc()){ 
                if(findUserInDatabase($row["email"], $row["password"], $email, $password)==1){
                    $_SESSION["email"] = $email;
                    //echo 'succes';
                    //$_SESSION["password"] = $password;
                    $status = true;
                    $message[] = 'You in.';
                }else{
                    $status = false;
                    $message[] = 'Incorrect email/password.';   
                   // echo " ".'parola incorecta';         
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