<?php
session_start();
?>

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

<form method = "POST" action= "../phpFiles/loginIntoAccount.php" id = "myForm">

<div class="user-box">
    <input type="text" name="email" id = "email" placeholder="" value="" required>
    <label id="emailId">Email</label>
  </div>

  <div class="user-box">
  <svg class="close" viewBox="0 0 100 100">
		<path id="top-eye-part" d="M10,50 Q50,-10 90,50" fill="none" stroke-width="5"></path>
		<path id="bottom-eye-part" d="M10,50 Q50,110 90,50" fill="none" stroke-width="5"></path>
		<circle cx="50" cy="50" r="10" fill="black"></circle>
	  </svg>
  <input type="password" name="password" id = "password" value="" placeholder="" required>
    <label>Password</label>
    
</div>

<div id ="result">error message</div>

      <a>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" name="submit" id="submit" value="LOGIN">
      </a>


    <div class="forgot_pass">
      <a href="/app/views/home/Reset_password.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Forgot your password?
      </a>
    </div>


    <p>First time here? </p>

        <a href="/app/views/home/Create_account.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Create account
          </a>

        
</form>
<script src= "/app/views/home/JavaScriptFiles/showPass.js"></script> 
<!--<script src="/public/javaScript/login-form.js"></script>-->
</div>
</div>
<!-- <script type="text/javascript">
function submitForm(){
 
  var selectForm = document.getElementById("myForm");

  if (window.XMLHttpRequest)
    {
        xmlhttp = new XMLHttpRequest();
    }
    else
    {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
    if (xmlhttp.readyState == 4)
    {
        msg=xmlhttp.responseText;
        if(msg=="1")
        {
            alert("gasit");
        }
        else if(msg=="0")
        {
          alert("negasit");
        }
    }
    }
    xmlhttp.open("GET",  "../phpFiles/loginIntoAccount.php", true);
    xmlhttp.send();

    //selectForm.onsubmit = function(){ 
    //    return false;
    //}
} -->
</script>
</body>
</html>
