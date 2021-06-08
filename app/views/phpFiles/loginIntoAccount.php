<?php

require_once("../../models/User.php");
session_start();

$host="localhost";
$user="root";
$password="";
$db="user_exemplu";

$aVar=mysqli_connect($host,$user,$password);

mysqli_select_db($aVar,'user_exemplu');

if(!isset($_POST['email'])){
    exit;
}
if(!isset($_POST['password'])){
    exit;
}
$email=$_POST['email'];
$password=$_POST['password'];

function getUser($get_email, $get_password, $email, $password){
    if($email == $get_email && $password == $get_password){
        return new User($email);
    }
    return null;
}

$query = "SELECT * FROM user_exemplu.users where email = '$email' AND password = '$password';";
$result = mysqli_query($aVar,$query) or die( mysqli_error($aVar));

while($row = mysqli_fetch_array($result)){
      if(getUser($row["email"], $row["password"], $email, $password)!=null){
            $user = getUser($row["email"], $row["password"], $email, $password);
        }else{
            echo 'Nu te am gasit';
        }
}

$_SESSION["email"] = $user->email;
$_SESSION["password"] = hash("md5", $password);

?>