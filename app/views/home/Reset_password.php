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
    <form action="../phpFiles/sendMail.php" method="POST">

    <div class="user-input">
    
    <input type="email" id="password">
    <label>Email</label>
    </div>
    <div class="sMail">
    <span></span>
        <span></span>
        <span></span>
        <span></span>
    <button class ="buttonSubmit" id="btn" type="submit" name="btnSendMail"> Send mail </button>  
    </div>

    <div class="user-input">
    <input type="password" id="password"> 
    <label>New password</label>
    </div>

    <div class="user-input">
    <input type="password" id="password"> 
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