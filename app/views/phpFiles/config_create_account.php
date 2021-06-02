<?php

$db_user = "root";
$db_password = "";
$db_name = "user_exemplu";

$db = new PDO('mysql:host=localhost;db_name=". $db_name .";charset=utf8', $db_user, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST['create'])){
    $full_name    = $_POST['full_name'];
    $username    = $_POST['username'];
    $email       = $_POST['email'];
    $age         = $_POST['age'];
    $height      = $_POST['height'];
    $weight      = $_POST['weight'];
    $gender      = $_POST['gender'];
    $password    = $_POST['password'];
    $want        = $_POST['want'];
    $focus_part  = $_POST['focus_part'];
    
  
  
  
    $sql = "INSERT INTO user_exemplu.users (full_name,username,email,age,height,weight,gender,password,want,focus_part) VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$full_name,$username,$email,$age,$height,$weight,$gender,$password,$want,$focus_part]);
    if($result){
      echo "<script> location.href='/app/views/home/Login.php'; </script>";
          exit;
    }
  
  }
  ?>