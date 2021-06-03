<?php

$host="localhost";
$user="root";
$password="";
$db="user_exemplu";

$aVar=mysqli_connect($host,$user,$password);

mysqli_select_db($aVar,'user_exemplu');

if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql = "SELECT * FROM user_exemplu.users WHERE email ='".$email."'AND password='".$password."'";
  $result = mysqli_query($aVar,$sql);
  if(mysqli_num_rows($result)==1){
            echo 'Successfuly saved.';
        }
        else{
            echo 'Erorssss';
        }
}
?>