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
    <li><a href="/app/views/home/Calendar.php">Calendar</a></li>
    <li><a href="/app/views/home/Login.php">
    <?php require_once("../phpFiles/logOut.php"); ?>
    Logout</a></li>
    </ul>

      <div class="login-box2">
  
      <form>
        <h2>Generate workout</h2>

      <p>What groups of muscles you want to work on?</p>
      <div class="select">
        <select name="group 1" id="1">
          <option selected disabled>Choose an option</option>
          <option value="Group 1">Legs</option>
            <option value="Group 2">Glutes</option>
            <option value="Group 3">Abs</option>
            <option value="Group 4">Shoulders</option>
            <option value="Group 5">Arms</option>
            <option value="Group 6">Back</option>
            <option value="Group 7">Chest</option>
        </select>
      </div>


      <div class="select">
        <select name="group 2" id="2">
          <option selected disabled>Choose an option</option>
          <option value="Group 1">Legs</option>
            <option value="Group 2">Glutes</option>
            <option value="Group 3">Abs</option>
            <option value="Group 4">Shoulders</option>
            <option value="Group 5">Arms</option>
            <option value="Group 6">Back</option>
            <option value="Group 7">Chest</option>
        </select>
      </div>
      <div class="select">
        <select name="group 3" id="3">
          <option selected disabled>Choose an option</option>
          <option value="Group 1">Legs</option>
            <option value="Group 2">Glutes</option>
            <option value="Group 3">Abs</option>
            <option value="Group 4">Shoulders</option>
            <option value="Group 5">Arms</option>
            <option value="Group 6">Back</option>
            <option value="Group 7">Chest</option>
        </select>
      </div>
      <div class="select">
        <select name="group 4" id="4">
          <option selected disabled>Choose an option</option>
          <option value="Group 1">Legs</option>
            <option value="Group 2">Glutes</option>
            <option value="Group 3">Abs</option>
            <option value="Group 4">Shoulders</option>
            <option value="Group 5">Arms</option>
            <option value="Group 6">Back</option>
            <option value="Group 7">Chest</option>
        </select>
      </div>
    
          <p>How long you want your workout? </p>
          <div class="select">
            <select name="group 5" id="5">
              <option selected disabled>Choose an option</option>
              <option value="time 1">15 minutes</option>
                <option value="time 2">30 minutes</option>
                <option value="time 3">45 minutes</option>
                <option value="time 4">1 hour</option>
                <option value="time 5">1 hour 30 minutes</option>
            </select>
          </div>

          <p>Where do you want to do your workout?</p>
          <div class="select">
            <select name="location" >
            <option selected disabled>Choose an option</option>
                <option value="location 1">Inside</option>
                <option value="location 2">Outside</option>
                <option value="location 3">Gym</option>
            </select>
          </div>
            <a href="Workout.php">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Generate workout
            </a>
    </form>
    </div>
    </div>

</body>
</html>