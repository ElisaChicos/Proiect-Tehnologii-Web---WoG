
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Workout.css">
    <script type="text/javascript" href="app/wiews/home/JavaScriptFiles/startworkout.js" defer></script>
    
    <title>Workout</title>
</head>
<body>
    
    <div class="start-workout">
        <ul class="menu">
        <li><img class="logo" src="/../public/images/LOGO.png" alt="LOGO"> </li>
        <li class="start"></li>
        <li><a href="/app/views/home/Profil.php">Your profile</a></li>
    <li><a href="/app/views/home/Informations.php">Informations</a></li>
    <li><a href="/app/views/home/Statistics.php">Statistics</a></li>
    <li><a href="/app/views/home/Calendar.php">Calendar</a></li>
    <li class="signoutBtn">
    <form method= "POST" action = "../phpFiles/logOut.php">
       <button type="submit" id="btnSignOut" name="logout">LogOut</button>
    </form>
    </li>
    </ul>
       
        <div class="login-box2">
        <div id="content">
        <img src="/documentatie/startimg.gif" class="img-start" />
        <br>
        <button class="button" id="getTxt">START WORKOUT</button>

        </div> </div>
        <div id="app"></div><!-- cronometru -->
         <!--  <button class="button2" onclick="startTimer()">START EXERCISE</button> -->
          
      
            </div>
  
      
        
    </body>
    </html>
    <?php

    session_start();
    $group1val   = $_GET['group1'];
    $group2val   = $_GET['group2'];
    $group3val   = $_GET['group3'];
    $group4val   = $_GET['group4'];
    $timeval     = $_GET['time'];
    $locationval = $_GET['location'];


    if($timeval == 45){
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax6exercise.js\"></script>";
    }
    if($timeval == 15)
    {
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax2exercise.js\"></script>";
    }
    if($timeval == 30){
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajaxexercise.js\"></script>";
    }
    if($timeval == 1)
    {
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax8exercise.js\"></script>";
    }
    if($timeval == 130)
    {
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax12exercise.js\"></script>";

    }


    ?>