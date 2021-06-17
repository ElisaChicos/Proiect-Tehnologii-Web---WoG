<?php
session_start();

$username_from_login = ($_SESSION['message']);
//require_once("../phpFiles/config_create_account.php");

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
        <input type="text" name="username">
        <label for="username">Username</label>
          </div>

          <div class="user-box">
          <input type="number" name="age">
        <label for="age">Age</label>
          </div>

          <div class="user-box">
          <input type="number"  name="height">
        <label for="height">Height</label>
          </div>

          <div class="user-box">
          <input type="number" name="weight">
        <label for="weight">Weight</label>
          </div>

          <div class="user-box">
          <input type="password" name="currentPassword">
        <label for="currentPassword">Current Password</label>
          </div>
          <div class="user-box">
          <input type="password" name="newPassword">
        <label for="newPassword">New Password</label>
          </div>


          
        <div class="saveBtn">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <button class ="buttonSubmit"  id="submit" type="submit"> SAVE CHANGES </button>
        </div>

    </form>
    </div>
    </div>

</body>
</html>