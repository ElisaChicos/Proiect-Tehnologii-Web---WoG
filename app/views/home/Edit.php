<?php
session_start();
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
    <form  id = "myForm">
    
        
        <div class="user-box">
        <input type="text" name="username" id="username">
        <label for="username">Username</label>
          </div>

          <div class="user-box">
          <input type="number"  name="height" id="height">
        <label for="height">Height</label>
          </div>

          <div class="user-box">
          <input type="number" name="weight" id="weight">
        <label for="weight">Weight</label>
          </div>

          <div class="user-box">
          <input type="password" name="currentPassword" id="currentPassword">
        <label for="currentPassword">Current Password</label>
          </div>
          <div class="user-box">
          <input type="password" name="newPassword" id="newPassword">
        <label for="newPassword">New Password</label>
          </div>

          <div class= "error-message" id="error-message">
          <p> Error message</p>
          </div> 

        <div class="saveBtn">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <button class ="buttonSubmit" id="btn" type="submit" name="saveEdit"> SAVE CHANGES </button>
        </div>


        <div >
        <a href="/app/views/home/Profil.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Return to your profile
       </a>

    </div>
      
    </form>
    <script src= "/app/views/home/JavaScriptFiles/editAjaxCall.js"></script>
    </div>
    </div>

</body>
</html>