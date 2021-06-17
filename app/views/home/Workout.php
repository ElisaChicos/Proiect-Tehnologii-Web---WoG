<?php

session_start();
$group1val = $_GET['group1'];
$group2val = $_GET['group2'];
$group3val = $_GET['group3'];
$group4val = $_GET['group4'];
$timeval = $_GET['time'];
$locationval = $_GET['location'];

echo $group1val;
echo $group2val;
echo $group3val;
echo $group4val;
echo $timeval;
echo $locationval;

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
      
        var xhr1  = new XMLHttpRequest();
        var xhr2  = new XMLHttpRequest();
        var xhr3  = new XMLHttpRequest();
        var xhr4  = new XMLHttpRequest();
        var xhr5  = new XMLHttpRequest();
        var xhr6  = new XMLHttpRequest();
        var xhr7  = new XMLHttpRequest();
        var xhr8  = new XMLHttpRequest();
        var xhr9  = new XMLHttpRequest();
        var xhr10 = new XMLHttpRequest();
        var xhr11 = new XMLHttpRequest();
        var xhr12 = new XMLHttpRequest();
        
       
        
        getTxt.addEventListener("click",function(){

            xhr1.addEventListener('readystatechange',function(){
                    content.innerHTML = this.responseText;
                    var getTxt1 = document.getElementById("getTxt1");
                 getTxt1.addEventListener("click",function(){
                    xhr2.addEventListener('readystatechange',function(){
                        content.innerHTML = this.responseText;
                        var getTxt2 = document.getElementById("getTxt2");
                        getTxt2.addEventListener("click",function(){
                            xhr3.addEventListener('readystatechange',function(){
                                content.innerHTML = this.responseText;
                                 var getTxt3 = document.getElementById("getTxt3");
                                getTxt3.addEventListener("click",function(){
                                    xhr4.addEventListener('readystatechange',function(){
                                        content.innerHTML = this.responseText;
                                        var getTxt4 = document.getElementById("getTxt4");
                                        getTxt4.addEventListener("click",function(){
                                            xhr5.addEventListener('readystatechange',function(){
                                                content.innerHTML=this.responseText;
                                                    var getTxt5 = document.getElementById("getTxt5");
                                                    getTxt5.addEventListener("click",function(){
                                                xhr6.addEventListener('readystatechange',function(){
                                                    content.innerHTML=this.responseText;
                                                    var getTxt6 = document.getElementById("getTxt6");
                                                    getTxt6.addEventListener("click",function(){
                                                        xhr7.addEventListener('readystatechange',function(){
                                                            content.innerHTML=this.responseText;
                                                            var getTxt7 = document.getElementById("getTxt7");
                                                            getTxt7.addEventListener("click",function(){
                                                                xhr8.addEventListener('readystatechange',function(){
                                                                    content.innerHTML=this.responseText;
                                                                    var getTxt8 = document.getElementById("getTxt8");
                                                                    getTxt8.addEventListener("click",function(){
                                                                        xhr9.addEventListener('readystatechange',function(){
                                                                            content.innerHTML=this.responseText;
                                                                            var getTxt9 = document.getElementById("getTxt9");
                                                                            getTxt9.addEventListener("click",function(){
                                                                                xhr10.addEventListener('readystatechange',function(){
                                                                                    content.innerHTML=this.responseText;
                                                                                    var getTxt10 = document.getElementById("getTxt10");
                                                                                    getTxt10.addEventListener("click",function(){
                                                                                        xhr11.addEventListener('readystatechange',function(){
                                                                                            content.innerHTML=this.responseText;
                                                                                            var getTxt11 = document.getElementById("getTxt11");
                                                                                            getTxt11.addEventListener("click",function(){
                                                                                                xhr12.addEventListener('readystatechange',function(){
                                                                                                    content.innerHTML=this.responseText;
                                                                                                
                                                                                                });
                                                                                                xhr12.open("GET","../phpFiles/Exercises/exercise12.php",true);
                                                                                                xhr12.send();  
                                                                                            });
                                                                                        
                                                                                        });
                                                                                        xhr11.open("GET","../phpFiles/Exercises/exercise11.php",true);
                                                                                        xhr11.send();  
                                                                                    });
                                                                                });
                                                                                xhr10.open("GET","../phpFiles/Exercises/exercise10.php",true);
                                                                                xhr10.send();  
                                                                            });
                                                                        });
                                                                        xhr9.open("GET","../phpFiles/Exercises/exercise9.php",true);
                                                                        xhr9.send();  
                                                                    });
                                                                });
                                                                xhr8.open("GET","../phpFiles/Exercises/exercise8.php",true);
                                                                xhr8.send();  
                                                            });
                                                        });
                                                        xhr7.open("GET","../phpFiles/Exercises/exercise7.php",true);
                                                        xhr7.send();  
                                                    });
                                                });
                                                xhr6.open("GET","../phpFiles/Exercises/exercise6.php",true);
                                                xhr6.send();  
                                            }); 
                                            });
                                            xhr5.open("GET","../phpFiles/Exercises/exercise5.php",true);
                                            xhr5.send();  
                                        });
                                    });
                                    xhr4.open("GET","../phpFiles/Exercises/exercise4.php",true);
                                    xhr4.send();  
                                });

                            });
                        xhr3.open("GET","../phpFiles/Exercises/exercise3.php",true);
                        xhr3.send();  
                        });            
            });
            xhr2.open("GET","../phpFiles/Exercises/exercise2.php",true);
            xhr2.send(); 
        });  
            });
            xhr1.open("GET","../phpFiles/Exercises/exercise1.php",true);
            xhr1.send();

        });  
        
      
      </script>
