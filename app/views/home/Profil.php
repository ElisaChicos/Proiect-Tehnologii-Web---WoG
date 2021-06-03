<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Profil.css">
    <title>Profile</title>
  
</head>
<body>
<div class="start-profile">
    <ul class="menu">
        <li><img class="logo" src="/../public/images/LOGO.png" alt="LOGO"> </li>
        <li class="start"></li>
        <li><a href="/app/views/home/Profil.php">Your profile</a></li>
    <li><a href="/app/views/home/Generator.php">Start workout</a></li>
    <li><a href="/app/views/home/Informations.php">Informations</a></li>
    <li><a href="/app/views/home/Statistics.php">Statistics</a></li>
    <li><a href="/app/views/home/Calendar.php">Calendar</a></li>
    <li><a href="/app/views/home/Start.php">Logout</a></li>
        </ul>

          <div class="login-box2">
            <h1>PROFILE</h1>
<h2>Public information</h2>
<p class="enum">Email:  <?php echo $_POST['email']; ?>
</p>
<p class="enum">Number # in top most active users</p>
<p class="enum">Age: 
<?php     
session_start();

$aVar=mysqli_connect("localhost","root","", "user_exemplu");
mysqli_select_db($aVar,'user_exemplu');
$email = $_POST['email'];
$_SESSION['message'] = $email;

$sql = "SELECT * FROM user_exemplu.users WHERE email = '$email';";
$result = mysqli_query($aVar,$sql) or die(mysqli_error($aVar));;

while($row = mysqli_fetch_array($result)){
    echo $row["age"];
}
?>
</p>
<p class="enum">Gender: 
<?php

$aVar=mysqli_connect("localhost","root","", "user_exemplu");

mysqli_select_db($aVar,'user_exemplu');
$email = $_POST['email'];
$sql = "SELECT * FROM user_exemplu.users WHERE email = '$email';";
$result = mysqli_query($aVar,$sql) or die(mysqli_error($aVar));;

while($row = mysqli_fetch_array($result)){
    echo $row["gender"];
}
?>
</p>

<h2>Private information</h2>
<p class="enum">
    Update information about you: <br>
    Don't worry, only you cand see the updates and information. :)
</p>
<p class="enum">Height: 
<?php

$aVar=mysqli_connect("localhost","root","", "user_exemplu");

mysqli_select_db($aVar,'user_exemplu');
$email = $_POST['email'];
$sql = "SELECT * FROM user_exemplu.users WHERE email = '$email';";
$result = mysqli_query($aVar,$sql) or die(mysqli_error($aVar));;

while($row = mysqli_fetch_array($result)){
    echo $row["height"];
}
?>
</p>
<p class="enum">Weight: 
<?php

$aVar=mysqli_connect("localhost","root","", "user_exemplu");

mysqli_select_db($aVar,'user_exemplu');
$email = $_POST['email'];
$sql = "SELECT * FROM user_exemplu.users WHERE email = '$email';";
$result = mysqli_query($aVar,$sql) or die(mysqli_error($aVar));;

while($row = mysqli_fetch_array($result)){
    echo $row["weight"];
}
?>
</p>

<a href="/app/views/home/Edit.php" class="button">Edit your profile</a> 
</div>
</body>
</html>