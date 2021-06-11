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
    <form action="" method="post">

    <div class="user-input">
    
    <input type="email" placeholder="" required>
    <label>Email</label>
    </div>
    <input type="submit" value="Send details to embassy" />
    <input type="hidden" name="button_pressed" value="1" />
<?php

if(isset($_POST['button_pressed']))
{
    $to = "elisachicos68@gmail.com"; 
    $subject = "Reset password";;
    $txt = "No need to worry, you can reset your WoG password by clicking the link below: 	
        If you didn't request a password reset, feel free to delete this email and carry on enjoying your workouts!

        All the best,
        The WoG Team"; 
    $headers = "From: elisachicos68@gmail.com"; 

    if( mail($to, $subject, $txt, $headers)){
        echo 'Email Sent.';}
    else{
        echo 'eroare boy';}
}
?>
   
        

    <div class="user-input">
    <input type="password" placeholder="" required> 
    <label>New password</label>
    </div>

    <div class="user-input">
    <input type="password" placeholder="" required> 
    <label>Confirm password</label>
    </div>

        <a href="/app/views/home/Login.php">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Change password
        </a>

    </form>
        </div>
    </div>
</body>
</html>