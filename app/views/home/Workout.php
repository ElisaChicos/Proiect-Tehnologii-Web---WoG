<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Workout.css">
    <script src="/../app/views/JavaScriptFiles/startworkout.js"></script>
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
    <li><a href="/app/views/home/Start.php">Logout</a></li>
        </ul>
  
        <div class="login-box2">
        <h2> Set 1 </h2> 
        <div id="app"></div>
        <button class="button2" onclick="startTimer()">START EXERCISE</button>
        <button class="button" id="Clickme_to_load">NEXT EXERCISE</button>
<img class="exercise" src="
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="images";
$aVar=mysqli_connect($host,$user,$password);
mysqli_select_db($aVar,'user_exemplu');
$sql = "SELECT * FROM user_exemplu.images WHERE id='1';";
$result = mysqli_query($aVar,$sql) or die( mysqli_error($aVar));
while($row = mysqli_fetch_array($result))
  {
    echo $row["path"];
  }

?>
  "> 

<div class="exercise_info">
  <?php
$sql = "SELECT * FROM user_exemplu.images WHERE id='1';";
$result = mysqli_query($aVar,$sql) or die( mysqli_error($aVar));
while($row = mysqli_fetch_array($result))
  {
    echo "<div class=\"title\"> Proper breathing</div> <br>";
    echo "<div class=\"enum\">".$row["breathing_info"] ."</div> <br>";
    echo "<br><br><br><br><br>";
    echo "<div class=\"title\"> Steps</div> <br>";
    echo "<div class=\"enum\">".$row["step1"] ." <br>";
    echo $row["step2"] ."<br>";
    echo $row["step3"] ."<br>";
    echo $row["step4"] ."</div><br>";
    echo "<br><br><br><br><br>";
    echo "<div class=\"title\"> Sets & Reps</div> <br>";
    echo "<div class=\"enum\">".$row["reps"] ."</div><br>";
  }
?>

    </div> 
   <p id="ajax_div">vai de mn</p>
   
        </div>
    </div>
    
</body>
</html>
