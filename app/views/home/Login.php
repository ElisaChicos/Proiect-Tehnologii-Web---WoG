<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Login.css">
    <title>Login</title>
</head>
<body>
  <div class="start_login">
    <div class="login-box2">

<h2>Login</h2>
<?php
  require_once("../phpFiles/loginUtils.php");
  if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
    $user = getUser($_SESSION["email"], $_SESSION["password"]);
          if($user != null) {
            echo "";
          }
  }
?>

<form method="POST" action="../phpFiles/loginIntoAccount.php">

<div class="user-box">
    <input type="text" name="email" placeholder="" required>
    <label>Email</label>
  </div>

  <div class="user-box">
    <input type="password" name="password" placeholder="" required>
    <label>Password</label>
</div>

  
      <div class="forgot_pass">
      <a href="/app/views/home/Reset_password.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Forgot your password?
      </a>
    </div>
      <a>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" name="submit" value="LOGIN">
      </a>

    <p>First time here? </p>

        <a href="/app/views/home/Create_account.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Create account
          </a>

</form>
</div>
</div>

</body>
</html>
