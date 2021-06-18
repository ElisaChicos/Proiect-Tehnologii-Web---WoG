<?php 

session_start();
$host="localhost";
$user="root";
$password="";
$db="images";
$aVar=mysqli_connect($host,$user,$password);
mysqli_select_db($aVar,'user_exemplu');

$group1val   = isset($_POST["group1"]) ? $_POST["group1"] : 'Abs';
$group2val   = isset($_POST["group2"]) ? $_POST["group2"] : 'Legs';
$group3val   = isset($_POST["group3"]) ? $_POST["group3"] : 'Glutes';
$group4val   = isset($_POST["group4"]) ? $_POST["group4"] : 'Back';
$timeval     = isset($_POST["time"]) ? $_POST["time"] : '30';
$locationval = isset($_POST["location"]) ? $_POST["location"] : 'Inside';



if(isset($_POST['submit'])){
  
    $_SESSION['group1'] = $group1val;
    $_SESSION['group2'] = $group2val;
    $_SESSION['group3'] = $group3val;
    $_SESSION['group4'] = $group4val;
    $_SESSION['time']   = $timeval;
    $_SESSION['location'] = $locationval;
    
  
}

if($group1val == $group2val || $group1val == $group3val || $group1val == $group4val)
{
    echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax6exercise.js\"></script>";
}

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
  
      <form method="GET" action="/app/views/home/Workout.php">
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
    <div id="content"></div>
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
           
            <a href="Workout.php">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <input type="submit" name="submit" id="submit" value="Generate workout">
              
            </a>
    </form>
    </div>
    </div>

</body>
</html>