<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Login.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>

   
    <title>Login</title>
</head>
<body>
  <div class="start_login">
    <div class="login-box2">

<h2>Login</h2>
<?php
  /*require_once("../phpFiles/loginUtils.php");
  if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
    $user = getUser($_SESSION["email"], $_SESSION["password"]);
          if($user != null) {
            echo "";
          }
  }*/
?>

<form method = "POST" action = "../phpFiles/loginIntoAccount.php">

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
        <input type="submit" name="Submit" id="submit" onclick="loadXMLDoc()"  value="LOGIN">
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
<script type="text/javascript">
function loadXMLDoc() {
    var xmlhttp = new XMLHttpRequest();
    

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE) {   
           if (xmlhttp.status == 200) {
               document.getElementById("submit").innerHTML = xmlhttp.responseText;
           }
           else if (xmlhttp.status == 400) {
              alert('There was an error 400');
           }
           else {
               alert('something else other than 200 was returned');
                //function_alert("We can not find your account! Please enter a valid email and password, or create a new account!");
           }
        }
    };

    xmlhttp.open("GET", "../phpFiles/loginIntoAccount.php");
    xmlhttp.send();

}
</script>

</body>
</html>
