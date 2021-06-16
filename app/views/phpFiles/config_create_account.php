<?php

$db_user = "root";
$db_password = "";
$db_name = "user_exemplu";

$db = new PDO('mysql:host=localhost;db_name=". $db_name .";charset=utf8', $db_user, $db_password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(isset($_POST['create'])){
    $username    = $_POST['username'];
    $email       = $_POST['email'];
    $age         = $_POST['age'];
    $height      = $_POST['height'];
    $weight      = $_POST['weight'];
    $old_weight  = $weight;
    $gender      = $_POST['gender'];
    $pass    = $_POST['password'];
    $want        = $_POST['want'];
    $focus_part  = $_POST['focus_part'];
    
    $hashPass = password_hash($pass, PASSWORD_DEFAULT);
    $password = $hashPass;
  
  
    $sql = "INSERT INTO user_exemplu.users (username,email,age,height,weight,old_weight,gender,password,want,focus_part) VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$username,$email,$age,$height,$weight,$old_weight,$gender,$password,$want,$focus_part]);
    if($result){
      echo "<script> location.href='/app/views/home/Login.php'; </script>";
          exit;
    }
  
  }
  ?>