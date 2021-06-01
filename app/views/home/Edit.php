<?php
//require_once('config_create_account.php');

session_start();

$username_from_login = ($_SESSION['message']);
 

/*
$host="localhost";
$user="root";
$password="";
$db="user_exemplu";

$aVar=mysqli_connect($host,$user,$password);

mysqli_select_db($aVar,'user_exemplu');

*/
require_once("../home/config_create_account.php");

if(isset($_POST['create'])){
  $full_name   = $_POST['full_name'];
  //$username    = $_POST['username'];
  $email       = $_POST['email'];
  $age         = $_POST['age'];
  $height      = $_POST['height'];
  $weight      = $_POST['weight'];
  $password    = $_POST['password'];

  $sql = "UPDATE user_exemplu.users SET full_name='$full_name',email='$email',age='$age',height='$height',weight='$weight',password='$password' WHERE username='$username_from_login'";
 $stmtinsert = $db-> prepare($sql);
 $result = $stmtinsert->execute([$full_name,$email,$age,$height,$weight]);
 //$result = mysqli_query($aVar,$sql);

 if($result){
 // $_SESSION['message'] = $username;
  echo "<script> location.href='/app/views/home/Login.php'; </script>";
  exit;
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Edit.css">
    <title>Edit profile</title>
</head>
<body>
    <div class="start_create">

        <div class="login-box2">
    
    <h2>Edit your profile</h2>
    <form method="post" action="/app/views/home/Edit.php" >
    
    <div class="user-box">
        <input type="text"  name="full_name"  placeholder="" required >
        <label for="full_name">Full name</label>
          </div>
    
        
        <div class="user-box">
        <input type="text" name="email"  required>
        <label for="email">Email</label>
          </div>

          <div class="user-box">
          <input type="number" name="age"  required>
        <label for="age">Age</label>
          </div>

          <div class="user-box">
          <input type="number"  name="height"  required>
        <label for="height">Height</label>
          </div>

          <div class="user-box">
          <input type="number" name="weight"  required>
        <label for="weight">Weight</label>
          </div>
          <div class="user-box">
          <input type="password" name="password"  required>
        <label for="password">Password</label>
          </div>

          <input type="submit" name="create" id="create" value="Save changes">
          <a href="/app/views/home/Profil.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Save changes
          </a>

    </form>
    </div>
    </div>

</body>
</html>