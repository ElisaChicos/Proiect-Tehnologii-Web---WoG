<?php
    session_start();
?>
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
    <script>

        var getTxt = document.getElementById("getTxt");
        var content = document.getElementById("content");
      
        var xhr =  new XMLHttpRequest();
        var xhr2 =  new XMLHttpRequest();
        
        getTxt.addEventListener("click",function(){

            xhr.addEventListener('readystatechange',function(){
                content.innerHTML = this.responseText;
                var getTxt2 = document.getElementById("getTxt2");
                 getTxt2.addEventListener("click",function(){

                     xhr2.addEventListener('readystatechange',function(){
                        content.innerHTML = this.responseText;
                
            });
            
            xhr2.open("GET","JavaScriptFiles/hello2.php",true);
            xhr2.send();
              
        });  
                
            });
            
            xhr.open("GET","JavaScriptFiles/hello.php",true);
            xhr.send();
              
        });  
        
      
      </script>
