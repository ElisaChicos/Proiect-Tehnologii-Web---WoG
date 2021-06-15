<?php

    function findUserInDatabase($get_email, $get_password, $email, $password){
        if($email == $get_email && $password == $get_password){
            return 1;
        }
        return null;
    }

    if(isset($_POST['submit'])){
        
    if(!isset($_POST['email'])){ 
        exit;
    }
    if(!isset($_POST['password'])){
        exit;
    }
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    require_once "../phpFiles/functions.php";

    if(emptyInputLogin($email, $password) != false){
        
        exit();
    }
    if(invalidEmailFormat($email) != false){
        $_SESSION['error']="invalidformat";
        //header('Location: /app/views/home/Login.php?error=invalidformat');
        exit();
    }

    $host="localhost";
    $user="root";
    $password="";
    $db="user_exemplu";

    $aVar=mysqli_connect($host,$user,$password);
    mysqli_select_db($aVar,'user_exemplu');

    $query = "SELECT * FROM user_exemplu.users where email = '$email';";
    $result = mysqli_query($aVar,$query) or die( mysqli_error($aVar));
    $numberOfRows = mysqli_num_rows($result);
    if($numberOfRows == 0 ){
        //header('Location: /app/views/home/Login.php?error=invalidaccount');
        $_SESSION['error']="invalidaccount";
        exit();
    }else{
    while($row = mysqli_fetch_array($result)){

        if(findUserInDatabase($row["email"], $row["password"], $email, $password)==1){
            session_start();
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            header('Location: /app/views/home/Profil.php');
            exit();
            }
            else{
                //header('Location: /app/views/home/Login.php?error=wronguserorpass');
                $_SESSION['error']="wronguserorpass";
                exit();
          }
    }
    }
}
else{
    header('Location: /app/views/home/Login.php');
    exit();
}
?>