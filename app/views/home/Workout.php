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
    <li><a href="/app/views/home/Login.php">
    <?php require_once("../phpFiles/logOut.php"); ?>
    Logout</a></li>
        </ul>
       
        <div class="login-box2">
        <div id="content">
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
<!--
        var array = new Array[ "/app/views/home/JavaScriptFiles/hello.php", "/app/views/home/JavaScriptFiles/hello2.php"] ;
        
      (function() {
    const btn = document.getElementById('getTxt'),
        posts = {
            curId: 1,
            next: function() {
                return this.curId += 1;
            },
            prev: function() {
                return this.curId -= 1;
            }
        };
    
    btn.onclick = function() {
        Promise.all([
            fetchContent(posts.curId),
            fetchContent(posts.next()),
            fetchContent(posts.next())
        ]).then((contents) => {
            // throw 'Something went wrong!';
            contents.forEach((content) => {
                xhr.open("GET",list[curId],true);
                xhr.send();
            });
        }).then(() => {
            // throw 'Something went wrong!';
            console.log('Done fetching content via JavaScript');
        }).catch((err) => {
            console.error(err);
        });
    };

    function fetchContent(postId) {
        console.log('Fetching content via JavaScript...');
        return new Promise((resolve, reject) => {
            window.fetch(`list[${postId}]`,
                {
                    method: 'GET'
                }
            ).then((response) => {
                resolve(response.text());
            }, (err) => {
                reject(err);
            });
        });
    };
}());
*/
/*
    loadDoc("http://localhost:3000/app/views/home/JavaScriptFiles/hello.php", myFunction1);
    
    loadDoc("http://localhost:3000/app/views/home/JavaScriptFiles/hello2.php", myFunction2);


    function loadDoc(url, cFunction) {
    const xhttp = new XMLHttpRequest();
    const getTxt = document.getElementById('getTxt');
    var content = document.getElementById("content");

    xhttp.onload = function() {cFunction(this);}
    xhttp.open("GET", url);
    xhttp.send();
    getTxt.removeEventListener("click",cFunction);
    }

   function myFunction1(xhttp) {
        getTxt.addEventListener("click",function(){
            xhttp.addEventListener('readystatechange',function(){
                content.innerHTML = this.responseText;
                
            });
            console.log("hello1")          
        });  
    }
    
    
    
    function myFunction2(xhttp) {
    getTxt.addEventListener("click",function(){
        xhttp.addEventListener('readystatechange',function(){
                content.innerHTML = this.responseText;
                
            });
            console.log("hello2")          
        });  
    }
    */

    -->