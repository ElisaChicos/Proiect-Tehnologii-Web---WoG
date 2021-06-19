<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Generator.css">
    <title>Generator</title>
</head>
<body>
  <div class="start_generator">
  <ul class="menu">
    <li><img class="logo" src="/../public/images/LOGO.png" alt="LOGO"> </li>
    <li class="start"></li>
    <li><a href="/app/views/home/Profil.php">Your profile</a></li>
    <li><a href="/app/views/home/Workout.php">Start workout</a></li>
    <li><a href="/app/views/home/Informations.php">Informations</a></li>
    <li><a href="/app/views/home/Statistics.php">Statistics</a></li>
    <li class="signoutBtn" >
    <form method= "POST" action = "../phpFiles/logOut.php">
       <button type="submit" id="btnSignOut" name="logout">LogOut</button>
    </form>
    </li>
    </ul>
    
  
      <div class="login-box2">
  
      <form method="GET" action="/app/views/home/Workout.php" id="myform">
        <h2>Generate workout</h2>

      <p>What groups of muscles you want to work on?</p>
      <div class="select">
        <select name="group1" id="group1" value="">
          <option selected disabled>Choose an option</option>
            <option value="Legs">Legs</option>
            <option value="Glutes">Glutes</option>
            <option value="Abs">Abs</option>
            <option value="Shoulders">Shoulders</option>
            <option value="Arms">Arms</option>
            <option value="Back">Back</option>
            <option value="Chest">Chest</option>
        </select>
      </div>


      <div class="select">
      <select name="group2" id="group2" value="">
        <option selected disabled>Choose an option</option>
            <option value="Legs">Legs</option>
            <option value="Glutes">Glutes</option>
            <option value="Abs">Abs</option>
            <option value="Shoulders">Shoulders</option>
            <option value="Arms">Arms</option>
            <option value="Back">Back</option>
            <option value="Chest">Chest</option>
        </select>
      </div>
      <div class="select">
      <select name="group3" id="group3" value="">
        <option selected disabled>Choose an option</option>
            <option value="Legs">Legs</option>
            <option value="Glutes">Glutes</option>
            <option value="Abs">Abs</option>
            <option value="Shoulders">Shoulders</option>
            <option value="Arms">Arms</option>
            <option value="Back">Back</option>
            <option value="Chest">Chest</option>
        </select>
      </div>
      <div class="select">
      <select name="group4" id="group4" value="">
        <option selected disabled>Choose an option</option>
            <option value="Legs">Legs</option>
            <option value="Glutes">Glutes</option>
            <option value="Abs">Abs</option>
            <option value="Shoulders">Shoulders</option>
            <option value="Arms">Arms</option>
            <option value="Back">Back</option>
            <option value="Chest">Chest</option>
        </select>
      </div>
      <div class= "error-message" id="error-message">
    <p> Error message</p>
    </div>

          <p>How long you want your workout? </p>
          <div class="select">
          <select name="time" id="time" value="">
              <option selected disabled>Choose an option</option>
              <option value="15">15 minutes</option>
                <option value="30">30 minutes</option>
                <option value="45">45 minutes</option>
                <option value="1">1 hour</option>
                <option value="130">1 hour 30 minutes</option>
            </select>
          </div>

          <p>Where do you want to do your workout?</p>
          <div class="select">
          <select name="location" id="location" value="">
            <option selected disabled>Choose an option</option>
                <option value="Inside">Inside</option>
                <option value="Outside">Outside</option>
                <option value="Gym">Gym</option>
            </select>
          </div>
           

          <div class="forgot_pass">
    <span></span>
        <span></span>
        <span></span>
        <span></span>
    <button class ="buttonSubmit" id="submit" type="submit" > GENERATE WORKOUT </button>  
    </div>
            <!-- <a href="Workout.php">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <input type="submit" name="submit" id="submit" value="Generate workout">
            </a> -->
    </form>
    <script src= "/app/views/home/JavaScriptFiles/AjaxVerifGenerator.js"></script>
    </div>
    </div>

</body>
</html>