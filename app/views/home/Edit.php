<?php
session_start();

$username_from_login = ($_SESSION['message']);
require_once("../phpFiles/config_create_account.php");

if(isset($_POST['create'])){
  $email       = $_POST['email'];
  $age         = $_POST['age'];
  $height      = $_POST['height'];
  $weight      = $_POST['weight'];
  $password    = $_POST['password'];

  $sql = "UPDATE user_exemplu.users SET email='$email',age='$age',height='$height',weight='$weight',password='$password' WHERE username='$username_from_login'";
 $stmtinsert = $db-> prepare($sql);
 $result = $stmtinsert->execute([$email,$age,$height,$weight]);

 if($result){
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
        <input type="text" name="username"  required>
        <label for="username">Username</label>
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

          
          <a href="/app/views/home/Profil.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" name="create" id="create" value="SAVE CHANGES">
          </a>

    </form>
    </div>
    </div>

</body>
</html>