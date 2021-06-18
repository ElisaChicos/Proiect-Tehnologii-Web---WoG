<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Reset_password.css">
    <title>Reset_password</title>
</head>
<body>
    <div class="start-page">
        <div class="change-pass-box">
    <h2>Reset password</h2>
    <form action="../phpFiles/sendMail.php" method="POST" id="myForm1">

    <div class="user-input">
    
    <input type="email" id="email" name="email" required>
    <label>Email</label>
    </div>


    <div class="sMail">
    <span></span>
        <span></span>
        <span></span>
        <span></span>
    <button class ="buttonSendMail" id="btn" type="submit" name="btnSendMail"> Send mail </button>  
    </div>
    </form>


    <form action="../phpFiles/resetPassword.php" method="POST" id="myForm2">
    <div class="user-input">
    <input type="text" id="token" name="token">
    <label>Input the token send via gmail</label>
    </div>

    <div class="user-input">
    <input type="password" id="newPassword" name="newPassword"> 
    <label>New password</label>
    </div>

    <div class="user-input">
    <input type="password" id="confirmPassword" name="confirmPassword"> 
    <label>Confirm password</label>
    </div>

    <div class= "error-message" id="error-message">
    <p> Error message</p>
    </div>

    <div class="resetPass">
    <span></span>
        <span></span>
        <span></span>
        <span></span>
    <button class ="buttonSubmit" id="btn2" type="submit" name="resetPass"> Change password </button>  
    </div>

    </form>
    <!-- <script src= "/app/views/home/JavaScriptFiles/resetPassAjaxCall.js"></script> -->
        </div>
    </div>
</body>
</html>