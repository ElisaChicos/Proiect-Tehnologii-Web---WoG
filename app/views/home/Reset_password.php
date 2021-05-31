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
    <form>

    <div class="user-input">
    
    <input type="email" pattern="([a-zA-z]*@gmail.com|[0][1-9]{9})" placeholder="" required>
    <label>Email</label>
    </div>
        <a>
          Send mail
        </a>

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