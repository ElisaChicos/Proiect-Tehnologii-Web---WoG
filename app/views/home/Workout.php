<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Workout.css">
   
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
  
        <div class="login-box2"  id="content">
      
        <h2> Set 1 </h2> 
        <div id="app"></div>
        <button class="button2" onclick="startTimer()">START EXERCISE</button>
        <button class="button" id="getTxt">NEXT EXERCISE</button>

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

    <div class="exercise_info" >
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
        </div> 
      
            </div>
  
      
        
    </body>
    </html>
    <script>
      
      const FULL_DASH_ARRAY = 283;
      const WARNING_THRESHOLD = 10;
      const ALERT_THRESHOLD = 5;

      const COLOR_CODES = {
        info: {
          color: "green"
        },
        warning: {
          color: "orange",
          threshold: WARNING_THRESHOLD
        },
        alert: {
          color: "red",
          threshold: ALERT_THRESHOLD
        }
      };

      const TIME_LIMIT =40;
      let timePassed = 0;
      let timeLeft = TIME_LIMIT;
      let timerInterval = null;
      let remainingPathColor = COLOR_CODES.info.color;

      document.getElementById("app").innerHTML =`
      <div class="base-timer">
        <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
          <g class="base-timer__circle">
            <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
            <path
              id="base-timer-path-remaining"
              stroke-dasharray="283"
              class="base-timer__path-remaining ${remainingPathColor}"
              d="
                M 50, 50
                m -45, 0
                a 45,45 0 1,0 90,0
                a 45,45 0 1,0 -90,0
              "
            ></path>
          </g>
        </svg>
        <span id="base-timer-label" class="base-timer__label">${formatTime(timeLeft)}</span>
      </div>
      `;

      function onTimesUp() {
        clearInterval(timerInterval);
      }

      function startTimer() {
        timerInterval = setInterval(() => {
          timePassed = timePassed += 1;
          timeLeft = TIME_LIMIT - timePassed;
          document.getElementById("base-timer-label").innerHTML = formatTime(
            timeLeft
          );
          setCircleDasharray();
          setRemainingPathColor(timeLeft);

          if (timeLeft === 0) {
            onTimesUp();
          }
        }, 1000);
      }

      function formatTime(time) {
        const minutes = Math.floor(time / 60);
        let seconds = time % 60;

        if (seconds < 10) {
          seconds = `0${seconds}`;
        }

        return `${minutes}:${seconds}`;
      }

      function setRemainingPathColor(timeLeft) {
        const { alert, warning, info } = COLOR_CODES;
        if (timeLeft <= alert.threshold) {
          document
            .getElementById("base-timer-path-remaining")
            .classList.remove(warning.color);
          document
            .getElementById("base-timer-path-remaining")
            .classList.add(alert.color);
        } else if (timeLeft <= warning.threshold) {
          document
            .getElementById("base-timer-path-remaining")
            .classList.remove(info.color);
          document
            .getElementById("base-timer-path-remaining")
            .classList.add(warning.color);
        }
      }

      function calculateTimeFraction() {
        const rawTimeFraction = timeLeft / TIME_LIMIT;
        return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
      }

      function setCircleDasharray() {
        const circleDasharray = `${(
          calculateTimeFraction() * FULL_DASH_ARRAY
        ).toFixed(0)} 283`;
        document
          .getElementById("base-timer-path-remaining")
          .setAttribute("stroke-dasharray", circleDasharray);
      }

      
      window.onload=function(){
        var getTxt = document.getElementById("getTxt");
        var content = document.getElementById("content");
        var xhr =  new XMLHttpRequest();

        getTxt.addEventListener("click",function(){

            xhr.addEventListener('readystatechange',function(){
                content.innerHTML = this.responseText;
                
            });
            
            xhr.open("GET","http://localhost:3000/app/views/home/JavaScriptFiles/hello.php",true);
            xhr.send();
        });

        
    };
    </script>
