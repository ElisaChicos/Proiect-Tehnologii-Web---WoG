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

    $group1val   = $_GET['group1'];
    $group2val   = $_GET['group2'];
    $group3val   = $_GET['group3'];
    $group4val   = $_GET['group4'];
    $timeval     = $_GET['time'];
    $locationval = $_GET['location'];

    $_SESSION['timeval'] = $timeval;


   if($timeval == 45){ // 45min
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax6exercise.js\"></script>";

        //////// GYM
      if(strcmp($locationval, "Gym")==0){
       
        if (strcmp($group1val, "Abs")==0){
            $random_group1_ex1 = rand(1,9);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
        }
       if (strcmp($group1val, "Arms")==0){
            $random_group1_ex1 = rand(10,15);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
          
        }
        if (strcmp($group1val, "Back")==0){
            $random_group1_ex1 = rand(16,20);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
          
        }
        if (strcmp($group1val, "Chest")==0){
            $random_group1_ex1 = rand(21,24);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
           
        }
        if (strcmp($group1val, "Glutes")==0){
            $random_group1_ex1 = rand(25,30);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
        }

        if (strcmp($group1val, "Shoulders")==0){
            $random_group1_ex1 = rand(31,35);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
          
        }
        if (strcmp($group1val, "Legs")==0){
            $random_group1_ex1 = rand(36,44);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
        
        }
        if (strcmp($group2val, "Abs")==0){
           $random_group2_ex1 = rand(1,9);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
        }
      if (strcmp($group2val, "Arms")==0){
           $random_group2_ex1 = rand(10,15);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
         
       }
       if (strcmp($group2val, "Back")==0){
           $random_group2_ex1 = rand(16,20);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
     
       }
       if (strcmp($group2val, "Chest")==0){
           $random_group2_ex1 = rand(21,24);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
    
       }
       if (strcmp($group2val, "Glutes")==0){
           $random_group2_ex1 = rand(25,30);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
       }

       if (strcmp($group2val, "Shoulders")==0){
           $random_group2_ex1 = rand(31,35);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
   
       }
       if (strcmp($group2val, "Legs")==0){
           $random_group2_ex1 = rand(36,44);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
    
       }
      if (strcmp($group3val, "Arms")==0){
           $random_group3_ex1 = rand(10,15);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
  
       }
       if (strcmp($group3val, "Back")==0){
           $random_group3_ex1 = rand(16,20);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
    
       }
       if (strcmp($group3val, "Chest")==0){
           $random_group3_ex1 = rand(21,24);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
    
       }
       if (strcmp($group3val, "Glutes")==0){
           $random_group3_ex1 = rand(25,30);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
       }

       if (strcmp($group3val, "Shoulders")==0){
           $random_group3_ex1 = rand(31,35);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
    
       }
       if (strcmp($group3val, "Legs")==0){
           $random_group3_ex1 = rand(36,44);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
     
       }
       if (strcmp($group4val, "Abs")==0){
         $random_group4_ex1 = rand(1,9);
         $_SESSION['random_group4_ex1'] = $random_group4_ex1;
        }
      if (strcmp($group4val, "Arms")==0){
           $random_group4_ex1 = rand(10,15);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
       
       }
       if (strcmp($group4val, "Back")==0){
           $random_group4_ex1 = rand(16,20);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
    
       }
       if (strcmp($group4val, "Chest")==0){
           $random_group4_ex1 = rand(21,24);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
      
       }
       if (strcmp($group4val, "Glutes")==0){
           $random_group4_ex1 = rand(25,30);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
       }

       if (strcmp($group4val, "Shoulders")==0){
           $random_group4_ex1 = rand(31,35);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;

       }
       if (strcmp($group4val, "Legs")==0){
           $random_group4_ex1 = rand(36,44);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
       }

        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Abs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Abs")==0 ){
            $random_2exercises1 = rand(1,9);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
           }


 if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Arms")==0 ){
            $random_2exercises1 =rand(10,15);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }

if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Back")==0 ){
            
            $random_2exercises1 = rand(16,20);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


 if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Chest")==0 ){
           
            $random_2exercises1 = rand(21,25);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


 if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Glutes")==0 ){
            $random_2exercises1 = rand(25,30);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Shoulders")==0 ){
            $random_2exercises1 = rand(31,35);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }

if (strcmp($group1val, "Legs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Legs")==0 && strcmp($group1val, "Legs")==0 ){
            $random_2exercises1 = rand(36,44);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
       if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Arms")==0 ){
         $array = array(2,5);
         $random_2exercises1 = $array[array_rand($array)];
         $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Back")==0 ){
            $array = array(3,9,19,20);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Chest")==0){
            $array = array(2,4,21);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Glutes")==0  || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Glutes")==0){
            $array = array(2,5,25,26,30);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Shoulders")==0 ){
            $array = array(2,4,5,31);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Legs")==0 ){
            $array = array(2,5,25,26,30);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Back")==0 ){
            $random_2exercises1 = 19;
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Chest")==0 ){
            $array = array(11,12,14,16,21,23);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Glutes")==0 ){
            $random_2exercises1 = 29;
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Shoulders")==0 ){
            $array = array(11,13,14,15,32,33);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Legs")==0 ){
           
            $random_2exercises1 = 15;
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Chest")==0 ){
            $array = array(22,24);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Glutes")==0 ){
            $array = array(17,18,26,30);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Shoulders")==0 ){
            $array = array(17,18,19,32,35);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Legs")==0 ){
            $random_2exercises1 = 38;
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Glutes")==0 ){
            $array = array(23,25,29);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Shoulders")==0 ){
            $array = array(21,22,23,32);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Legs")==0 ){
            $random_2exercises1 = 44;
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Shoulders")==0 ){
            $random_2exercises1 = 33;
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Legs")==0 ){
            $array = array(36,37,38,39,40,41,42,43);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Legs")==0 ){
            $random_2exercises1 = 36;
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
        if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Arms")==0 ){
            $array = array(2,5);
            $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Back")==0 ){
               $array = array(3,9,19,20);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           
if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Abs")==0 || strcmp($group3val, "Abs")==0 && strcmp($group4val, "Abs")==0 ){
    $random_2exercises2 = rand(1,9);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
   }


if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Arms")==0 ){
    $random_2exercises2 =rand(10,15);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}

if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Back")==0 ){
    
    $random_2exercises2 = rand(16,20);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}


if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Chest")==0 ){
   
    $random_2exercises2 = rand(21,25);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}


if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Glutes")==0 ){
    $random_2exercises2 = rand(25,30);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}


if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Shoulders")==0 ){
    $random_2exercises2 = rand(31,35);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}

if (strcmp($group3val, "Legs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Legs")==0 && strcmp($group3val, "Legs")==0 ){
    $random_2exercises2 = rand(36,44);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}
           if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Chest")==0){
               $array = array(2,4,21);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Glutes")==0  || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Glutes")==0){
               $array = array(2,5,25,26,30);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Shoulders")==0 ){
               $array = array(2,4,5,31);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Legs")==0 ){
               $array = array(2,5,25,26,30);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Back")==0 ){
               $random_2exercises2 = 19;
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Chest")==0 ){
               $array = array(11,12,14,16,21,23);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Glutes")==0 ){
               $random_2exercises2 = 29;
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Shoulders")==0 ){
               $array = array(11,13,14,15,32,33);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Legs")==0 ){
              
               $random_2exercises2 = 15;
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Chest")==0 ){
               $array = array(22,24);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Glutes")==0 ){
               $array = array(17,18,26,30);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Shoulders")==0 ){
               $array = array(17,18,19,32,35);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Legs")==0 ){
               $random_2exercises2 = 38;
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Glutes")==0 ){
               $array = array(23,25,29);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Shoulders")==0 ){
               $array = array(21,22,23,32);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Legs")==0 ){
               $random_2exercises2 = 44;
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Shoulders")==0 ){
               $random_2exercises2 = 33;
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Legs")==0 ){
               $array = array(36,37,38,39,40,41,42,43);
               $random_2exercises2 = $array[array_rand($array)];
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
           if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Legs")==0 ){
               $random_2exercises2 = 36;
               $_SESSION['random_2exercises2'] = $random_2exercises2;
           }
        }


        ///////////INSIDE
        if(strcmp($locationval, "Inside")==0){
       
            if (strcmp($group1val, "Abs")==0){
                $random_group1_ex1 = rand(1,9);
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            
           }
           if (strcmp($group1val, "Arms")==0){
                $array = array(12,13,15,53);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Back")==0){
                $array = array(16,17,20,45,52);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Chest")==0){
                $array = array(12,46,51);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
               
            }
            if (strcmp($group1val, "Glutes")==0){
                $array = array(25,26,27,28,30,47,50);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            }
    
            if (strcmp($group1val, "Shoulders")==0){
                $array = array(31,32,34,35,48,49);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            
            }
            if (strcmp($group2val, "Abs")==0){
               $random_group2_ex1 = rand(1,9);
               $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            }
            if (strcmp($group2val, "Arms")==0){
                $array = array(12,13,15,53);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
           if (strcmp($group2val, "Back")==0){
                $array = array(16,17,20,45,52);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
         
           }
           if (strcmp($group2val, "Chest")==0){
             
            $array = array(12,46,51);
            $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
        
           }
           if (strcmp($group2val, "Glutes")==0){
                $array = array(25,26,27,28,30,47,50);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
    
           if (strcmp($group2val, "Shoulders")==0){
                $array = array(31,32,34,35,48,49);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
       
           }
           if (strcmp($group2val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
           if (strcmp($group3val, "Abs")==0){
            $random_group3_ex1 = rand(1,9);
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            }
          if (strcmp($group3val, "Arms")==0){
            $array = array(12,13,15,53);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
           if (strcmp($group3val, "Back")==0){
            $array = array(16,17,20,45,52);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
          
           }
           if (strcmp($group3val, "Chest")==0){
          
            $array = array(12,46,51);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
        
           }
           if (strcmp($group3val, "Glutes")==0){
            $array = array(25,26,27,28,30,47,50);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
    
           if (strcmp($group3val, "Shoulders")==0){
            $array = array(31,32,34,35,48,49);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
           if (strcmp($group3val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
           if (strcmp($group4val, "Abs")==0){
            $random_group4_ex1 = rand(1,9);
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
        
       }
          if (strcmp($group4val, "Arms")==0){
            $array = array(12,13,15,53);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
      
           }
           if (strcmp($group4val, "Back")==0){
            $array = array(16,17,20,45,52);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
          
           }
           if (strcmp($group4val, "Chest")==0){
          
            $array = array(12,46,51);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
        
           }
           if (strcmp($group4val, "Glutes")==0){
            $array = array(25,26,27,28,30,47,50);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           }
    
           if (strcmp($group4val, "Shoulders")==0){
            $array = array(31,32,34,35,48,49);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
        
           }
           if (strcmp($group4val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           }
          
if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Abs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Abs")==0 ){
    
    $random_2exercises1 = rand(1,9);
    $_SESSION['random_2exercises1'] = $random_2exercises1;
 }


 if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Arms")==0 ){
    $array = array(12,13,15,53);        
    $random_2exercises1 =$array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }

if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Back")==0 ){
    $array = array(16,17,20,45,52);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


 if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Chest")==0 ){
    $array = array(12,46,51);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


 if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Glutes")==0 ){
    $array = array(25,26,27,28,30,47,50);
    $random_2exercises1 =  $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Shoulders")==0 ){
    $array = array(31,32,34,35,48,49);        
    $random_2exercises1 = $array[array_rand($array)]; rand(31,35);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }

if (strcmp($group1val, "Legs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Legs")==0 && strcmp($group1val, "Legs")==0 ){
    $array = array(37,38,39,40,41,42,43,44);       
    $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
           if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Arms")==0 ){
             $array = array(2,5);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Back")==0 ){
                $array = array(3,9,19,20);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Chest")==0){
                $array = array(2,4);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Glutes")==0  || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Glutes")==0){
                $array = array(2,5,25,26,30);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Shoulders")==0 ){
                $array = array(2,4,5,31);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Legs")==0 ){
                $array = array(2,5,25,26,30);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Back")==0 ){
                  $random_2exercises1 = 17; 
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Chest")==0 ){
                $array = array(12,16);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Glutes")==0 ){
                $random_2exercises1 = 27;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Shoulders")==0 ){
                $array = array(13,15,32);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Legs")==0 ){
               
                $random_2exercises1 = 15;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Chest")==0 ){
                $random_2exercises1 = 25;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Glutes")==0 ){
                $array = array(17,26,30);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Shoulders")==0 ){
                $array = array(17,32,35);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Legs")==0 ){
                $random_2exercises1 = 38;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Glutes")==0 ){
                $random_2exercises1 = 25;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Shoulders")==0 ){
                
                $random_2exercises1 = 32;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Legs")==0 ){
                $random_2exercises1 = 44;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Shoulders")==0 ){
                $random_2exercises1 = 34;  
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Legs")==0 ){
                $array = array(37,38,39,40,41,42,43);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Legs")==0 ){
                $random_2exercises1 = 35; 
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
        
              
if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Abs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Abs")==0 ){
    
    $random_2exercises2 = rand(1,9);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
 }


 if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Arms")==0 ){
    $array = array(12,13,15,53);        
    $random_2exercises2 =$array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }

if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Back")==0 ){
    $array = array(16,17,20,45,52);
            $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


 if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Chest")==0 ){
    $array = array(12,46,51);
            $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


 if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Glutes")==0 ){
    $array = array(25,26,27,28,30,47,50);
    $random_2exercises2 =  $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Shoulders")==0 ){
    $array = array(31,32,34,35,48,49);        
    $random_2exercises2 = $array[array_rand($array)]; rand(31,35);
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }

if (strcmp($group3val, "Legs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Legs")==0 && strcmp($group3val, "Legs")==0 ){
    $array = array(37,38,39,40,41,42,43,44);       
    $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }
            if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Arms")==0 ){
                $array = array(2,5);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Back")==0 ){
                   $array = array(3,9,20);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Chest")==0){
                   $array = array(2,4);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Glutes")==0  || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Glutes")==0){
                   $array = array(2,5,25,26,30);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $array = array(2,4,5,31);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Legs")==0 ){
                   $array = array(2,5,25,26,30);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Back")==0 ){
                   $random_2exercises2 = 17;  
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Chest")==0 ){
                   $array = array(12,16);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Glutes")==0 ){
                   $random_2exercises2 = 27; 
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $array = array(13,15,32);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Legs")==0 ){
                  
                   $random_2exercises2 = 15;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Chest")==0 ){
                   
                   $random_2exercises2 = 25;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Glutes")==0 ){
                   $array = array(17,26,30);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $array = array(17,32,35);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Legs")==0 ){
                   $random_2exercises2 = 38;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Glutes")==0 ){
                 
                   $random_2exercises2 = 25;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Shoulders")==0 ){
                 
                   $random_2exercises2 = 32;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Legs")==0 ){
                   $random_2exercises2 = 44;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $random_2exercises2 = 34; 
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Legs")==0 ){
                   $array = array(37,38,39,40,41,42,43);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Legs")==0 ){
                   $random_2exercises2 = 35;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
            }


            ///////OUTSIDE
            if(strcmp($locationval, "Outside")==0){
       
            if (strcmp($group1val, "Abs")==0){
                $array = array(2,4,5);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
           }
           if (strcmp($group1val, "Arms")==0){
                $array = array(12,13,53);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Back")==0){
                
                $array = array(17,45,52);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Chest")==0){
                $array = array(12,46,51);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
               
            }
            if (strcmp($group1val, "Glutes")==0){
        
                $array = array(26,47,50);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            }
    
            if (strcmp($group1val, "Shoulders")==0){
               
                $array = array(32,48,49);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            
            }
            if (strcmp($group2val, "Abs")==0){
                $array = array(2,4,5);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            }
            if (strcmp($group2val, "Arms")==0){
                $array = array(12,13,53);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
           if (strcmp($group2val, "Back")==0){
              
            $array = array(17,45,52);
            $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
         
           }
           if (strcmp($group2val, "Chest")==0){
            $array = array(12,46,51);
            $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
        
           }
           if (strcmp($group2val, "Glutes")==0){
               
            $array = array(26,47,50);
            $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
    
           if (strcmp($group2val, "Shoulders")==0){
               
            $array = array(32,48,49);
            $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
           if (strcmp($group2val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
           if (strcmp($group3val, "Abs")==0){
                $array = array(2,4,5);
                $random_group3_ex1 = $array[array_rand($array)];
                $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            }
          if (strcmp($group3val, "Arms")==0){
            $array = array(12,13,53);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
           if (strcmp($group3val, "Back")==0){
            
            $array = array(17,45,52);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
          
           }
           if (strcmp($group3val, "Chest")==0){
           
            $array = array(12,46,51);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           
        
           }
           if (strcmp($group3val, "Glutes")==0){
            $array = array(26,47,50);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
    
           if (strcmp($group3val, "Shoulders")==0){
           
            $array = array(32,48,49);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
        
           }
           if (strcmp($group3val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
           if (strcmp($group4val, "Abs")==0){
            $array = array(2,4,5);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;

            }
          if (strcmp($group4val, "Arms")==0){
            $array = array(12,13,53);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
          
      
           }
           if (strcmp($group4val, "Back")==0){
            $array = array(17,45,52);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
          
           }
           if (strcmp($group4val, "Chest")==0){
            $array = array(12,46,51);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           
        
           }
           if (strcmp($group4val, "Glutes")==0){
       
            $array = array(26,47,50);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           }
    
           if (strcmp($group4val, "Shoulders")==0){
           
            $array = array(32,48,49);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
        
           }
           if (strcmp($group4val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           }
                   
if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Abs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Abs")==0 ){
    $array = array(2,4,5);
    $random_2exercises1 =$array[array_rand($array)];
    $_SESSION['random_2exercises1'] = $random_2exercises1;
 }


 if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Arms")==0 ){
    $array = array(12,13,53);      
    $random_2exercises1 =$array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }

if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Back")==0 ){
    $array = array(17,45,52);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


 if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Chest")==0 ){
    $array = array(12,46,51);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


 if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Glutes")==0 ){
    $array = array(26,47,50);
    $random_2exercises1 =  $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Shoulders")==0 ){
    $array = array(32,48,49);
     
    $random_2exercises1 = $array[array_rand($array)]; rand(31,35);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }

if (strcmp($group1val, "Legs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Legs")==0 && strcmp($group1val, "Legs")==0 ){
    $array = array(37,38,39,40,41,42,43,44);     
    $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
           if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Arms")==0 ){
             $array = array(2,5);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Back")==0 ){
                $array = array(2,17); 
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Chest")==0){
                $array = array(2,4);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Glutes")==0  || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Glutes")==0){
                $array = array(2,5,26);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Shoulders")==0 ){
                $array = array(2,4,5);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Legs")==0 ){
                $array = array(2,5,26);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Back")==0 ){
                $random_2exercises1 = 17; 
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Chest")==0 ){
                
                $random_2exercises1 = 12;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Glutes")==0 ){
                $random_2exercises1 = 17;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Shoulders")==0 ){
               
                $random_2exercises1 = 32;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Legs")==0 ){
               
                $random_2exercises1 = 13; 
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Chest")==0 ){
    
                $random_2exercises1 = 12;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Glutes")==0 ){
                $array = array(17,26);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Shoulders")==0 ){
                $array = array(17,32);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Legs")==0 ){
                $random_2exercises1 = 38;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Glutes")==0 ){
                $random_2exercises1 = 26; 
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Shoulders")==0 ){
                
                $random_2exercises1 = 32;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Legs")==0 ){
                $random_2exercises1 = 44;
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Shoulders")==0 ){
                $random_2exercises1 = 32;  
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Legs")==0 ){
                $array = array(37,38,39,40,41,42,43);
                $random_2exercises1 = $array[array_rand($array)];
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }
            if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Legs")==0 ){
                $random_2exercises1 = 40; 
                $_SESSION['random_2exercises1'] = $random_2exercises1;
            }

                               
if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Abs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Abs")==0 ){
    $array = array(2,4,5);
    $random_2exercises2 =$array[array_rand($array)];
    $_SESSION['random_2exercises2'] = $random_2exercises2;
 }


 if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Arms")==0 ){
    $array = array(12,13,53);      
    $random_2exercises2 =$array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }

if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Back")==0 ){
    $array = array(17,45,52);
            $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


 if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Chest")==0 ){
    $array = array(12,46,51);
            $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


 if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Glutes")==0 ){
    $array = array(26,47,50);
    $random_2exercises2 =  $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Shoulders")==0 ){
    $array = array(32,48,49);
     
    $random_2exercises2 = $array[array_rand($array)]; rand(31,35);
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }

if (strcmp($group3val, "Legs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Legs")==0 && strcmp($group3val, "Legs")==0 ){
    $array = array(37,38,39,40,41,42,43,44);     
    $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }
            if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Arms")==0 ){
                $array = array(2,5);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Back")==0 ){
                   $array = array(2,17); 
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Chest")==0){
                   $array = array(2,4);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Glutes")==0  || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Glutes")==0){
                   $array = array(2,5,26);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $array = array(2,4,5,31);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Legs")==0 ){
                   $array = array(2,5,26);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Back")==0 ){
                   $random_2exercises2 = 17;  
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Chest")==0 ){
          
                   $random_2exercises2 = 12;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Glutes")==0 ){
                   $random_2exercises2 = 17; 
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Shoulders")==0 ){
                   
                   $random_2exercises2 = 32;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Legs")==0 ){
                  
                   $random_2exercises2 = 13;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Chest")==0 ){
                   
                   $random_2exercises2 = 12;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Glutes")==0 ){
                   $array = array(17,26);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $array = array(17,32);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Legs")==0 ){
                   $random_2exercises2 = 38;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Glutes")==0 ){
                 
                   $random_2exercises2 = 26;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Shoulders")==0 ){
                 
                   $random_2exercises2 = 32;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Legs")==0 ){
                   $random_2exercises2 = 44;
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $random_2exercises2 = 32; 
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Legs")==0 ){
                   $array = array(37,38,39,40,41,42,43);
                   $random_2exercises2 = $array[array_rand($array)];
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
               if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Legs")==0 ){
                   $random_2exercises2 = 40; 
                   $_SESSION['random_2exercises2'] = $random_2exercises2;
               }
            }

    }
   
    if($timeval == 15) // 15 min
    {
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax2exercise.js\"></script>";
        

        //////// GYM
      if(strcmp($locationval, "Gym")==0){

        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Abs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Abs")==0 ){
            $random_2exercises1 = rand(1,9);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
           }
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Arms")==0 ){
          $array = array(2,5);
          $random_2exercises1 = $array[array_rand($array)];
          $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Back")==0 ){
             $array = array(3,9,19,20);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Chest")==0){
             $array = array(2,4,21);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Glutes")==0  || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Glutes")==0){
             $array = array(2,5,25,26,30);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Shoulders")==0 ){
             $array = array(2,4,5,31);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Legs")==0 ){
             $array = array(2,5,25,26,30);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Arms")==0 ){
            $random_2exercises1 =rand(10,15);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
         if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Back")==0 ){
             $random_2exercises1 = 19;
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Chest")==0 ){
             $array = array(11,12,14,16,21,23);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Glutes")==0 ){
             $random_2exercises1 = 29;
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Shoulders")==0 ){
             $array = array(11,13,14,15,32,33);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Legs")==0 ){
            
             $random_2exercises1 = 15;
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Back")==0 ){
            
            $random_2exercises1 = rand(16,20);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
         if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Chest")==0 ){
             $array = array(22,24);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Glutes")==0 ){
             $array = array(17,18,26,30);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Shoulders")==0 ){
             $array = array(17,18,19,32,35);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Legs")==0 ){
             $random_2exercises1 = 38;
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Chest")==0 ){
           
            $random_2exercises1 = rand(21,25);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
         if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Glutes")==0 ){
             $array = array(23,25,29);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Shoulders")==0 ){
             $array = array(21,22,23,32);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Legs")==0 ){
             $random_2exercises1 = 44;
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Glutes")==0 ){
            $random_2exercises1 = rand(25,30);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
         if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Shoulders")==0 ){
             $random_2exercises1 = 33;
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Legs")==0 ){
             $array = array(36,37,38,39,40,41,42,43);
             $random_2exercises1 = $array[array_rand($array)];
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Shoulders")==0 ){
            $random_2exercises1 = rand(31,35);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
         if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Legs")==0 ){
             $random_2exercises1 = 36;
             $_SESSION['random_2exercises1'] = $random_2exercises1;
         }
         if (strcmp($group1val, "Legs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Legs")==0 && strcmp($group1val, "Legs")==0 ){
            $random_2exercises1 = rand(36,44);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }

if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Abs")==0 || strcmp($group3val, "Abs")==0 && strcmp($group4val, "Abs")==0 ){
    $random_2exercises2 = rand(1,9);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
   }


if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Arms")==0 ){
    $random_2exercises2 =rand(10,15);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}

if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Back")==0 ){
    
    $random_2exercises2 = rand(16,20);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}


if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Chest")==0 ){
   
    $random_2exercises2 = rand(21,25);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}


if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Glutes")==0 ){
    $random_2exercises2 = rand(25,30);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}


if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Shoulders")==0 ){
    $random_2exercises2 = rand(31,35);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}

if (strcmp($group3val, "Legs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Legs")==0 && strcmp($group3val, "Legs")==0 ){
    $random_2exercises2 = rand(36,44);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
}

         if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Arms")==0 ){
             $array = array(2,5);
             $random_2exercises2 = $array[array_rand($array)];
             $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Back")==0 ){
                $array = array(3,9,19,20);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Chest")==0){
                $array = array(2,4,21);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Glutes")==0  || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Glutes")==0){
                $array = array(2,5,25,26,30);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Shoulders")==0 ){
                $array = array(2,4,5,31);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Legs")==0 ){
                $array = array(2,5,25,26,30);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Back")==0 ){
                $random_2exercises2 = 19;
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Chest")==0 ){
                $array = array(11,12,14,16,21,23);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Glutes")==0 ){
                $random_2exercises2 = 29;
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Shoulders")==0 ){
                $array = array(11,13,14,15,32,33);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Legs")==0 ){
               
                $random_2exercises2 = 15;
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Chest")==0 ){
                $array = array(22,24);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Glutes")==0 ){
                $array = array(17,18,26,30);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Shoulders")==0 ){
                $array = array(17,18,19,32,35);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Legs")==0 ){
                $random_2exercises2 = 38;
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Glutes")==0 ){
                $array = array(23,25,29);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Shoulders")==0 ){
                $array = array(21,22,23,32);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Legs")==0 ){
                $random_2exercises2 = 44;
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Shoulders")==0 ){
                $random_2exercises2 = 33;
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Legs")==0 ){
                $array = array(36,37,38,39,40,41,42,43);
                $random_2exercises2 = $array[array_rand($array)];
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
            if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Legs")==0 ){
                $random_2exercises2 = 36;
                $_SESSION['random_2exercises2'] = $random_2exercises2;
            }
         }
 
 
         ///////////INSIDE
         if(strcmp($locationval, "Inside")==0){
           
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Arms")==0 ){
              $array = array(2,5);
              $random_2exercises1 = $array[array_rand($array)];
              $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Back")==0 ){
                 $array = array(3,9,19,20);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Chest")==0){
                 $array = array(2,4);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Glutes")==0  || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Glutes")==0){
                 $array = array(2,5,25,26,30);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Shoulders")==0 ){
                 $array = array(2,4,5,31);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Legs")==0 ){
                 $array = array(2,5,25,26,30);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Back")==0 ){
                   $random_2exercises1 = 17; 
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Chest")==0 ){
                 $array = array(12,16);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Glutes")==0 ){
                 $random_2exercises1 = 27;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Shoulders")==0 ){
                 $array = array(13,15,32);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Legs")==0 ){
                
                 $random_2exercises1 = 15;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Chest")==0 ){
                 $random_2exercises1 = 25;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Glutes")==0 ){
                 $array = array(17,26,30);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Shoulders")==0 ){
                 $array = array(17,32,35);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Legs")==0 ){
                 $random_2exercises1 = 38;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Glutes")==0 ){
                 $random_2exercises1 = 25;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Shoulders")==0 ){
                 
                 $random_2exercises1 = 32;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Legs")==0 ){
                 $random_2exercises1 = 44;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Shoulders")==0 ){
                 $random_2exercises1 = 34;  
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Legs")==0 ){
                 $array = array(37,38,39,40,41,42,43);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Legs")==0 ){
                 $random_2exercises1 = 35; 
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
                       
if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Abs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Abs")==0 ){
    
    $random_2exercises1 = rand(1,9);
    $_SESSION['random_2exercises1'] = $random_2exercises1;
 }


 if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Arms")==0 ){
    $array = array(12,13,15,53);        
    $random_2exercises1 =$array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }

if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Back")==0 ){
    $array = array(16,17,20,45,52);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


 if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Chest")==0 ){
    $array = array(12,46,51);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


 if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Glutes")==0 ){
    $array = array(25,26,27,28,30,47,50);
    $random_2exercises1 =  $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Shoulders")==0 ){
    $array = array(31,32,34,35,48,49);        
    $random_2exercises1 = $array[array_rand($array)]; rand(31,35);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }

if (strcmp($group1val, "Legs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Legs")==0 && strcmp($group1val, "Legs")==0 ){
    $array = array(37,38,39,40,41,42,43,44);       
    $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
               
if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Abs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Abs")==0 ){
    
    $random_2exercises2 = rand(1,9);
    $_SESSION['random_2exercises2'] = $random_2exercises2;
 }


 if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Arms")==0 ){
    $array = array(12,13,15,53);        
    $random_2exercises2 =$array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }

if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Back")==0 ){
    $array = array(16,17,20,45,52);
            $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


 if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Chest")==0 ){
    $array = array(12,46,51);
            $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


 if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Glutes")==0 ){
    $array = array(25,26,27,28,30,47,50);
    $random_2exercises2 =  $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Shoulders")==0 ){
    $array = array(31,32,34,35,48,49);        
    $random_2exercises2 = $array[array_rand($array)]; rand(31,35);
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }

if (strcmp($group3val, "Legs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Legs")==0 && strcmp($group3val, "Legs")==0 ){
    $array = array(37,38,39,40,41,42,43,44);       
    $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }
             if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Arms")==0 ){
                 $array = array(2,5);
                 $random_2exercises2 = $array[array_rand($array)];
                 $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Back")==0 ){
                    $array = array(3,9,20);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Chest")==0){
                    $array = array(2,4);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Glutes")==0  || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Glutes")==0){
                    $array = array(2,5,25,26,30);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Shoulders")==0 ){
                    $array = array(2,4,5,31);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Legs")==0 ){
                    $array = array(2,5,25,26,30);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Back")==0 ){
                    $random_2exercises2 = 17;  
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Chest")==0 ){
                    $array = array(12,16);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Glutes")==0 ){
                    $random_2exercises2 = 27; 
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Shoulders")==0 ){
                    $array = array(13,15,32);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Legs")==0 ){
                   
                    $random_2exercises2 = 15;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Chest")==0 ){
                    
                    $random_2exercises2 = 25;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Glutes")==0 ){
                    $array = array(17,26,30);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Shoulders")==0 ){
                    $array = array(17,32,35);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Legs")==0 ){
                    $random_2exercises2 = 38;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Glutes")==0 ){
                  
                    $random_2exercises2 = 25;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Shoulders")==0 ){
                  
                    $random_2exercises2 = 32;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Legs")==0 ){
                    $random_2exercises2 = 44;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Shoulders")==0 ){
                    $random_2exercises2 = 34; 
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Legs")==0 ){
                    $array = array(37,38,39,40,41,42,43);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Legs")==0 ){
                    $random_2exercises2 = 35;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
             }
 
 
             ///////OUTSIDE
             if(strcmp($locationval, "Outside")==0){
                              
if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Abs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Abs")==0 ){
    $array = array(2,4,5);
    $random_2exercises1 =$array[array_rand($array)];
    $_SESSION['random_2exercises1'] = $random_2exercises1;
 }


 if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Arms")==0 ){
    $array = array(12,13,53);      
    $random_2exercises1 =$array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }

if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Back")==0 ){
    $array = array(17,45,52);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


 if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Chest")==0 ){
    $array = array(12,46,51);
            $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


 if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Glutes")==0 ){
    $array = array(26,47,50);
    $random_2exercises1 =  $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }


if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Shoulders")==0 ){
    $array = array(32,48,49);
     
    $random_2exercises1 = $array[array_rand($array)]; rand(31,35);
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }

if (strcmp($group1val, "Legs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Legs")==0 && strcmp($group1val, "Legs")==0 ){
    $array = array(37,38,39,40,41,42,43,44);     
    $random_2exercises1 = $array[array_rand($array)];
            $_SESSION['random_2exercises1'] = $random_2exercises1;
        }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Arms")==0 ){
              $array = array(2,5);
              $random_2exercises1 = $array[array_rand($array)];
              $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Back")==0 ){
                 $array = array(2,17); 
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Chest")==0){
                 $array = array(2,4);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Glutes")==0  || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Glutes")==0){
                 $array = array(2,5,26);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Shoulders")==0 ){
                 $array = array(2,4,5);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Legs")==0 ){
                 $array = array(2,5,26);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Back")==0 ){
                 $random_2exercises1 = 17; 
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Chest")==0 ){
                 
                 $random_2exercises1 = 12;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Glutes")==0 ){
                 $random_2exercises1 = 17;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Shoulders")==0 ){
                
                 $random_2exercises1 = 32;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Legs")==0 ){
                
                 $random_2exercises1 = 13; 
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Chest")==0 ){
     
                 $random_2exercises1 = 12;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Glutes")==0 ){
                 $array = array(17,26);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Shoulders")==0 ){
                 $array = array(17,32);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Legs")==0 ){
                 $random_2exercises1 = 38;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Glutes")==0 ){
                 $random_2exercises1 = 26; 
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Shoulders")==0 ){
                 
                 $random_2exercises1 = 32;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Legs")==0 ){
                 $random_2exercises1 = 44;
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Shoulders")==0 ){
                 $random_2exercises1 = 32;  
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Legs")==0 ){
                 $array = array(37,38,39,40,41,42,43);
                 $random_2exercises1 = $array[array_rand($array)];
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }
             if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Legs")==0 ){
                 $random_2exercises1 = 40; 
                 $_SESSION['random_2exercises1'] = $random_2exercises1;
             }


                                
if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Abs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Abs")==0 ){
    $array = array(2,4,5);
    $random_2exercises2 =$array[array_rand($array)];
    $_SESSION['random_2exercises2'] = $random_2exercises2;
 }


 if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Arms")==0 ){
    $array = array(12,13,53);      
    $random_2exercises2 =$array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }

if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Back")==0 ){
    $array = array(17,45,52);
            $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


 if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Chest")==0 ){
    $array = array(12,46,51);
            $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


 if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Glutes")==0 ){
    $array = array(26,47,50);
    $random_2exercises2 =  $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }


if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Shoulders")==0 ){
    $array = array(32,48,49);
     
    $random_2exercises2 = $array[array_rand($array)]; rand(31,35);
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }

if (strcmp($group3val, "Legs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Legs")==0 && strcmp($group3val, "Legs")==0 ){
    $array = array(37,38,39,40,41,42,43,44);     
    $random_2exercises2 = $array[array_rand($array)];
            $_SESSION['random_2exercises2'] = $random_2exercises2;
        }
             if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Arms")==0 ){
                 $array = array(2,5);
                 $random_2exercises2 = $array[array_rand($array)];
                 $_SESSION['random_2exercises2'] = $random_2exercises2;
                }

                if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Back")==0 ){
                    $array = array(2,17); 
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Chest")==0){
                    $array = array(2,4);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Glutes")==0  || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Glutes")==0){
                    $array = array(2,5,26);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Shoulders")==0 ){
                    $array = array(2,4,5,31);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Legs")==0 ){
                    $array = array(2,5,26);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Back")==0 ){
                    $random_2exercises2 = 17;  
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Chest")==0 ){
           
                    $random_2exercises2 = 12;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Glutes")==0 ){
                    $random_2exercises2 = 17; 
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Shoulders")==0 ){
                    
                    $random_2exercises2 = 32;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Legs")==0 ){
                   
                    $random_2exercises2 = 13;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Chest")==0 ){
                    
                    $random_2exercises2 = 12;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Glutes")==0 ){
                    $array = array(17,26);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Shoulders")==0 ){
                    $array = array(17,32);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Legs")==0 ){
                    $random_2exercises2 = 38;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Glutes")==0 ){
                  
                    $random_2exercises2 = 26;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Shoulders")==0 ){
                  
                    $random_2exercises2 = 32;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Legs")==0 ){
                    $random_2exercises2 = 44;
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Shoulders")==0 ){
                    $random_2exercises2 = 32; 
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Legs")==0 ){
                    $array = array(37,38,39,40,41,42,43);
                    $random_2exercises2 = $array[array_rand($array)];
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
                if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Legs")==0 ){
                    $random_2exercises2 = 40; 
                    $_SESSION['random_2exercises2'] = $random_2exercises2;
                }
             }
 
    }  
        

  
         

    if($timeval == 30){ // 30min
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax4exercise.js\"></script>";
        
        //////// GYM
      if(strcmp($locationval, "Gym")==0){
       
        if (strcmp($group1val, "Abs")==0){
            $random_group1_ex1 = rand(1,9);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
        }
       if (strcmp($group1val, "Arms")==0){
            $random_group1_ex1 = rand(10,15);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
          
        }
        if (strcmp($group1val, "Back")==0){
            $random_group1_ex1 = rand(16,20);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
          
        }
        if (strcmp($group1val, "Chest")==0){
            $random_group1_ex1 = rand(21,24);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
           
        }
        if (strcmp($group1val, "Glutes")==0){
            $random_group1_ex1 = rand(25,30);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
        }

        if (strcmp($group1val, "Shoulders")==0){
            $random_group1_ex1 = rand(31,35);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
          
        }
        if (strcmp($group1val, "Legs")==0){
            $random_group1_ex1 = rand(36,44);
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
        
        }
        if (strcmp($group2val, "Abs")==0){
           $random_group2_ex1 = rand(1,9);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
        }
      if (strcmp($group2val, "Arms")==0){
           $random_group2_ex1 = rand(10,15);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
         
       }
       if (strcmp($group2val, "Back")==0){
           $random_group2_ex1 = rand(16,20);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
     
       }
       if (strcmp($group2val, "Chest")==0){
           $random_group2_ex1 = rand(21,24);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
    
       }
       if (strcmp($group2val, "Glutes")==0){
           $random_group2_ex1 = rand(25,30);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
       }

       if (strcmp($group2val, "Shoulders")==0){
           $random_group2_ex1 = rand(31,35);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
   
       }
       if (strcmp($group2val, "Legs")==0){
           $random_group2_ex1 = rand(36,44);
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
    
       }
      if (strcmp($group3val, "Arms")==0){
           $random_group3_ex1 = rand(10,15);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
  
       }
       if (strcmp($group3val, "Back")==0){
           $random_group3_ex1 = rand(16,20);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
    
       }
       if (strcmp($group3val, "Chest")==0){
           $random_group3_ex1 = rand(21,24);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
    
       }
       if (strcmp($group3val, "Glutes")==0){
           $random_group3_ex1 = rand(25,30);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
       }

       if (strcmp($group3val, "Shoulders")==0){
           $random_group3_ex1 = rand(31,35);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
    
       }
       if (strcmp($group3val, "Legs")==0){
           $random_group3_ex1 = rand(36,44);
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
     
       }
       if (strcmp($group4val, "Abs")==0){
         $random_group4_ex1 = rand(1,9);
         $_SESSION['random_group4_ex1'] = $random_group4_ex1;
        }
      if (strcmp($group4val, "Arms")==0){
           $random_group4_ex1 = rand(10,15);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
       
       }
       if (strcmp($group4val, "Back")==0){
           $random_group4_ex1 = rand(16,20);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
    
       }
       if (strcmp($group4val, "Chest")==0){
           $random_group4_ex1 = rand(21,24);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
      
       }
       if (strcmp($group4val, "Glutes")==0){
           $random_group4_ex1 = rand(25,30);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
       }

       if (strcmp($group4val, "Shoulders")==0){
           $random_group4_ex1 = rand(31,35);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;

       }
       if (strcmp($group4val, "Legs")==0){
           $random_group4_ex1 = rand(36,44);
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
       }
        }


        ///////////INSIDE
        if(strcmp($locationval, "Inside")==0){
       
            if (strcmp($group1val, "Abs")==0){
                $random_group1_ex1 = rand(1,9);
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            
           }
           if (strcmp($group1val, "Arms")==0){
                $array = array(12,13,15,53);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Back")==0){
                $array = array(16,17,20,45,52);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Chest")==0){
                $array = array(12,46,51);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
               
            }
            if (strcmp($group1val, "Glutes")==0){
                $array = array(25,26,27,28,30,47,50);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            }
    
            if (strcmp($group1val, "Shoulders")==0){
                $array = array(31,32,34,35,48,49);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            
            }
            if (strcmp($group2val, "Abs")==0){
               $random_group2_ex1 = rand(1,9);
               $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            }
            if (strcmp($group2val, "Arms")==0){
                $array = array(12,13,15,53);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
           if (strcmp($group2val, "Back")==0){
                $array = array(16,17,20,45,52);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
         
           }
           if (strcmp($group2val, "Chest")==0){
              
            $array = array(12,46,51);
            $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
        
           }
           if (strcmp($group2val, "Glutes")==0){
                $array = array(25,26,27,28,30,47,50);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
    
           if (strcmp($group2val, "Shoulders")==0){
                $array = array(31,32,34,35,49,48);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
       
           }
           if (strcmp($group2val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
           if (strcmp($group3val, "Abs")==0){
            $random_group3_ex1 = rand(1,9);
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            }
          if (strcmp($group3val, "Arms")==0){
            $array = array(12,13,15,53);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
           if (strcmp($group3val, "Back")==0){
            $array = array(16,17,20,45,52);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
          
           }
           if (strcmp($group3val, "Chest")==0){
            $array = array(12,46,51);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
        
           }
           if (strcmp($group3val, "Glutes")==0){
            $array = array(25,26,27,28,30,47,50);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
    
           if (strcmp($group3val, "Shoulders")==0){
            $array = array(31,32,34,35,48,49);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
           if (strcmp($group3val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
           if (strcmp($group4val, "Abs")==0){
            $random_group4_ex1 = rand(1,9);
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
        
       }
          if (strcmp($group4val, "Arms")==0){
            $array = array(12,13,15,53);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
      
           }
           if (strcmp($group4val, "Back")==0){
            $array = array(16,17,20,45,52);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
          
           }
           if (strcmp($group4val, "Chest")==0){

            $array = array(12,46,51);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
        
           }
           if (strcmp($group4val, "Glutes")==0){
            $array = array(25,26,27,28,30,47,50);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           }
    
           if (strcmp($group4val, "Shoulders")==0){
            $array = array(31,32,34,35,48,49);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
        
           }
           if (strcmp($group4val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           }
            }


            ///////OUTSIDE
            if(strcmp($locationval, "Outside")==0){
       
            if (strcmp($group1val, "Abs")==0){
                $array = array(2,4,5);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
           }
           if (strcmp($group1val, "Arms")==0){
                $array = array(12,13,53);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Back")==0){
                
                $array = array(17,45,52);
            $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Chest")==0){
                $array = array(12,46,51);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
               
            }
            if (strcmp($group1val, "Glutes")==0){
        
                $array = array(26,47,50);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            }
    
            if (strcmp($group1val, "Shoulders")==0){
               
                $array = array(32,48,49);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
              
            }
            if (strcmp($group1val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group1_ex1 = $array[array_rand($array)];
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            
            }
            if (strcmp($group2val, "Abs")==0){
                $array = array(2,4,5);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            }
            if (strcmp($group2val, "Arms")==0){
                $array = array(12,13,53);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
           if (strcmp($group2val, "Back")==0){
              
            $array = array(17,45,52);
            $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
         
           }
           if (strcmp($group2val, "Chest")==0){
            $array = array(12,46,51);
            $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
        
           }
           if (strcmp($group2val, "Glutes")==0){
               
            $array = array(26,47,50);
            $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
    
           if (strcmp($group2val, "Shoulders")==0){
               
            $array = array(32,48,49);
            $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
           if (strcmp($group2val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group2_ex1 = $array[array_rand($array)];
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           }
           if (strcmp($group3val, "Abs")==0){
                $array = array(2,4,5);
                $random_group3_ex1 = $array[array_rand($array)];
                $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            }
          if (strcmp($group3val, "Arms")==0){
            $array = array(12,13,53);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
           if (strcmp($group3val, "Back")==0){
            
            $array = array(17,45,52);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
          
           }
           if (strcmp($group3val, "Chest")==0){
           
            $array = array(12,46,51);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           
        
           }
           if (strcmp($group3val, "Glutes")==0){
            $array = array(26,47,50);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
    
           if (strcmp($group3val, "Shoulders")==0){
           
            $array = array(32,48,49);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
        
           }
           if (strcmp($group3val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group3_ex1 = $array[array_rand($array)];
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           }
           if (strcmp($group4val, "Abs")==0){
            $array = array(2,4,5);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;

            }
          if (strcmp($group4val, "Arms")==0){
            $array = array(12,13,53);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
          
      
           }
           if (strcmp($group4val, "Back")==0){
            $array = array(17,45,52);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
          
           }
           if (strcmp($group4val, "Chest")==0){
            $array = array(12,46,51);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           
        
           }
           if (strcmp($group4val, "Glutes")==0){
       
            $array = array(26,47,50);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           }
    
           if (strcmp($group4val, "Shoulders")==0){
            $array = array(32,48,49);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
        
           }
           if (strcmp($group4val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group4_ex1 = $array[array_rand($array)];
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           }

    }
    }





    if($timeval == 1) // 1h
    {
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax8exercise.js\"></script>";

          //////// GYM
      if(strcmp($locationval, "Gym")==0){
       
        if (strcmp($group1val, "Abs")==0){
            $random_group1_ex1 = rand(1,9);
            $random_group1_ex2 = rand(1,9);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(1,9);
            }
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
        }
       if (strcmp($group1val, "Arms")==0){
            $random_group1_ex1 = rand(10,15);
            $random_group1_ex2 = rand(10,15);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(10,15);
            }
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
          
        }
        if (strcmp($group1val, "Back")==0){
            $random_group1_ex1 = rand(16,20);
            $random_group1_ex2 = rand(16,20);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(16,20);
            }
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
          
        }
        if (strcmp($group1val, "Chest")==0){
            $random_group1_ex1 = rand(21,24);
            $random_group1_ex2 = rand(21,24);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(21,24);
            }
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
           
        }
        if (strcmp($group1val, "Glutes")==0){
            $random_group1_ex1 = rand(25,30);
            $random_group1_ex2 = rand(25,30);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(25,30);
            }
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
        }

        if (strcmp($group1val, "Shoulders")==0){
            $random_group1_ex1 = rand(31,35);
            $random_group1_ex2 = rand(31,35);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(31,35);
            }
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
          
        }
        if (strcmp($group1val, "Legs")==0){
            $random_group1_ex1 = rand(36,44);
            $random_group1_ex2 = rand(36,44);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(36,44);
            }
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
           
        
        }
        if (strcmp($group2val, "Abs")==0){
           $random_group2_ex1 = rand(1,9);
           $random_group2_ex2 = rand(1,9);
           while($random_group2_ex1 == $random_group2_ex2){
                $random_group2_ex2 = rand(1,9);
            }
            $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            $_SESSION['random_group2_ex2'] = $random_group2_ex2;
       
        }
      if (strcmp($group2val, "Arms")==0){
           $random_group2_ex1 = rand(10,15);
           $random_group2_ex2 = rand(10,15);
           while($random_group2_ex1 == $random_group2_ex2){
                $random_group2_ex2 = rand(10,15);
            }
            $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            $_SESSION['random_group2_ex2'] = $random_group2_ex2;
         
       }
       if (strcmp($group2val, "Back")==0){
           $random_group2_ex1 = rand(16,20);
           $random_group2_ex2 = rand(16,20);
           while($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 = rand(16,20);
           }
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           $_SESSION['random_group2_ex2'] = $random_group2_ex2;
      
     
       }
       if (strcmp($group2val, "Chest")==0){
           $random_group2_ex1 = rand(21,24);
           $random_group2_ex2 = rand(1,9);
           while($random_group2_ex1 == $random_group2_ex2){
                $random_group2_ex2 = rand(1,9);
            }
            $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            $_SESSION['random_group2_ex2'] = $random_group2_ex2;
    
       }
       if (strcmp($group2val, "Glutes")==0){
           $random_group2_ex1 = rand(25,30);
           $random_group2_ex2 = rand(25,30);
            while($random_group2_ex1 == $random_group2_ex2){
                $random_group2_ex2 = rand(25,30);
            }
            $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            $_SESSION['random_group2_ex2'] = $random_group2_ex2;
       
       }

       if (strcmp($group2val, "Shoulders")==0){
           $random_group2_ex1 = rand(31,35);
           $random_group2_ex2 = rand(31,35);
           while($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 = rand(31,35);
           }
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           $_SESSION['random_group2_ex2'] = $random_group2_ex2;
      
       }
       if (strcmp($group2val, "Legs")==0){
           $random_group2_ex1 = rand(36,44);
           $random_group2_ex2 = rand(36,44);
           while($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 = rand(36,44);
           }
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           $_SESSION['random_group2_ex2'] = $random_group2_ex2;
      
    
       }
       if (strcmp($group3val, "Abs")==0){
        $random_group3_ex1 = rand(1,9);
        $random_group3_ex2 = rand(1,9);
        while($random_group3_ex1 == $random_group3_ex2){
             $random_group3_ex2 = rand(1,9);
         }
         $_SESSION['random_group3_ex1'] = $random_group3_ex1;
         $_SESSION['random_group3_ex2'] = $random_group3_ex2;
    }

      if (strcmp($group3val, "Arms")==0){
           $random_group3_ex1 = rand(10,15);
           $random_group3_ex2 = rand(10,15);
           while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 = rand(1,9);
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
       
  
       }
       if (strcmp($group3val, "Back")==0){
           $random_group3_ex1 = rand(16,20);
           $random_group3_ex2 = rand(16,20);
           while($random_group3_ex1 == $random_group3_ex2){
               $random_group3_ex2 = rand(16,20);
           }
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           $_SESSION['random_group3_ex2'] = $random_group3_ex2;
    
       }
       if (strcmp($group3val, "Chest")==0){
           $random_group3_ex1 = rand(21,24);
           $random_group3_ex2 = rand(21,24);
           while($random_group3_ex1 == $random_group3_ex2){
               $random_group3_ex2 = rand(21,24);
           }
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           $_SESSION['random_group3_ex2'] = $random_group3_ex2;
    
       }
       if (strcmp($group3val, "Glutes")==0){
           $random_group3_ex1 = rand(25,30);
           $random_group3_ex2 = rand(25,30);
           while($random_group3_ex1 == $random_group3_ex2){
               $random_group3_ex2 = rand(25,30);
           }
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           $_SESSION['random_group3_ex2'] = $random_group3_ex2;
       }

       if (strcmp($group3val, "Shoulders")==0){
           $random_group3_ex1 = rand(31,35);
           $random_group3_ex2 = rand(31,35);
           while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 = rand(31,35);
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
    
       }
       if (strcmp($group3val, "Legs")==0){
           $random_group3_ex1 = rand(36,44);
           $random_group3_ex2 = rand(36,44);
           while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 = rand(36,44);
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
     
       }
       if (strcmp($group4val, "Abs")==0){
         $random_group4_ex1 = rand(1,9);
         $random_group4_ex2 = rand(1,9);
         while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 = rand(1,9);
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
        }
      if (strcmp($group4val, "Arms")==0){
           $random_group4_ex1 = rand(10,15);
           $random_group4_ex2 = rand(10,15);
           while($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(10,15);
           }
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           $_SESSION['random_group4_ex2'] = $random_group4_ex2;
       
       }
       if (strcmp($group4val, "Back")==0){
           $random_group4_ex1 = rand(16,20);
           $random_group4_ex2 = rand(16,20);
           while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 = rand(16,20);
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
    
       }
       if (strcmp($group4val, "Chest")==0){
           $random_group4_ex1 = rand(21,24);
           $random_group4_ex2 = rand(21,24);
           while($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(21,24);
           }
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           $_SESSION['random_group4_ex2'] = $random_group4_ex2;
      
       }
       if (strcmp($group4val, "Glutes")==0){
           $random_group4_ex1 = rand(25,30);
           $random_group4_ex2 = rand(25,30);
           while($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(25,30);
           }
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           $_SESSION['random_group4_ex2'] = $random_group4_ex2;
       }

       if (strcmp($group4val, "Shoulders")==0){
           $random_group4_ex1 = rand(31,35);
           $random_group4_ex2 = rand(31,35);
           while($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(31,35);
           }
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           $_SESSION['random_group4_ex2'] = $random_group4_ex2;

       }
       if (strcmp($group4val, "Legs")==0){
           $random_group4_ex1 = rand(36,44);
           $random_group4_ex2 = rand(36,44);
           while($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(36,44);
           }
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           $_SESSION['random_group4_ex2'] = $random_group4_ex2;
       }
        }


        ///////////INSIDE
        if(strcmp($locationval, "Inside")==0){
       
            if (strcmp($group1val, "Abs")==0){
                $random_group1_ex1 = rand(1,9);
                $random_group1_ex2 = rand(1,9);
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 = rand(1,9);
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
            
           }
           if (strcmp($group1val, "Arms")==0){
                $array = array(12,13,15,53);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
              
            }
            if (strcmp($group1val, "Back")==0){
                $array = array(16,17,20,45,52);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
              
            }
            if (strcmp($group1val, "Chest")==0){ 
               
                $array = array(12,46,51);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
               
               
            }
    
            if (strcmp($group1val, "Glutes")==0){
                $array = array(25,26,27,28,30,47,50);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
            }
    
            if (strcmp($group1val, "Shoulders")==0){
                $array = array(31,32,34,35,49);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
              
            }
            if (strcmp($group1val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
            
            }
            if (strcmp($group2val, "Abs")==0){
               $random_group2_ex1 = rand(1,9);
               $random_group2_ex2 = $array[array_rand($array)];
               while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
            }
            if (strcmp($group2val, "Arms")==0){
                $array = array(12,13,15,53);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
           }
           if (strcmp($group2val, "Back")==0){
                $array = array(16,17,20,45,52);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
         
           }
           if (strcmp($group2val, "Chest")==0){ 
               
            $array = array(12,46,51);
            $random_group2_ex1 = $array[array_rand($array)];
            $random_group2_ex2 = $array[array_rand($array)];
            while($random_group2_ex1 == $random_group2_ex2){
                $random_group2_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            $_SESSION['random_group2_ex2'] = $random_group2_ex2;
        
        }

           if (strcmp($group2val, "Glutes")==0){
                $array = array(25,26,27,28,30,47,50);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
           }
    
           if (strcmp($group2val, "Shoulders")==0){
                $array = array(31,32,34,35,49);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
       
           }
           if (strcmp($group2val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
           }
           if (strcmp($group3val, "Abs")==0){
            $random_group3_ex1 = rand(1,9);
            $random_group3_ex2 = rand(1,9);
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
            }
          if (strcmp($group3val, "Arms")==0){
            $array = array(12,13,15,53);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
           if (strcmp($group3val, "Back")==0){
            $array = array(16,17,20,45,52);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
          
           }
           if (strcmp($group3val, "Chest")==0){ 
               
            $array = array(12,46,51);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
            }
           if (strcmp($group3val, "Glutes")==0){
            $array = array(25,26,27,28,30,47,50);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
    
           if (strcmp($group3val, "Shoulders")==0){
            $array = array(31,32,34,35,49);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
           if (strcmp($group3val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
           if (strcmp($group4val, "Abs")==0){
            $random_group4_ex1 = rand(1,9);
            $random_group4_ex2 =rand(1,9);
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
        
       }
          if (strcmp($group4val, "Arms")==0){
            $array = array(12,13,15,53);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
      
           }
           if (strcmp($group4val, "Back")==0){
            $array = array(16,17,20,45,52);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
          
           }
           if (strcmp($group4val, "Chest")==0){ 
               
            $array = array(12,46,51);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
        
        }
           if (strcmp($group4val, "Glutes")==0){
            $array = array(25,26,27,28,30,47,50);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
           }
    
           if (strcmp($group4val, "Shoulders")==0){
            $array = array(31,32,34,35,49);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
        
           }
           if (strcmp($group4val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
           }
            }


            ///////OUTSIDE
            if(strcmp($locationval, "Outside")==0){
       
            if (strcmp($group1val, "Abs")==0){
                $array = array(2,4,5);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
           }
           if (strcmp($group1val, "Arms")==0){
                $array = array(12,13,53);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
              
            }
            if (strcmp($group1val, "Back")==0){
                $array = array(17,45,52);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
                
              
            }
            if (strcmp($group1val, "Chest")==0){ 
               
                $array = array(12,46,51);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
               
               
            }
            if (strcmp($group1val, "Glutes")==0){ 
                $array = array(26,47,50);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;

            }
    
            if (strcmp($group1val, "Shoulders")==0){ 

                $array = array(32,48,49);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
              
            }
            if (strcmp($group1val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
            
            }
            if (strcmp($group2val, "Abs")==0){
                $array = array(2,4,5);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
            }
            if (strcmp($group2val, "Arms")==0){
                $array = array(12,13,53);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
           }
            if (strcmp($group2val, "Back")==0){
                $array = array(17,45,52);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
                
              
            }
            if (strcmp($group2val, "Chest")==0){ 
               
                $array = array(12,46,51);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
               
               
            }
            if (strcmp($group2val, "Glutes")==0){ 
                $array = array(26,47,50);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;

            }
    
            if (strcmp($group2val, "Shoulders")==0){ 

                $array = array(32,48,49);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
              
            }
          
           if (strcmp($group2val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
           }
           if (strcmp($group3val, "Abs")==0){
                $array = array(2,4,5);
                $random_group3_ex1 = $array[array_rand($array)];
                $random_group3_ex2 = $array[array_rand($array)];
                while($random_group3_ex1 == $random_group3_ex2){
                    $random_group3_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group3_ex1'] = $random_group3_ex1;
                $_SESSION['random_group3_ex2'] = $random_group3_ex2;
            }
          if (strcmp($group3val, "Arms")==0){
            $array = array(12,13,53);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
           if (strcmp($group3val, "Back")==0){
            $array = array(17,45,52);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
            
          
        }
        if (strcmp($group3val, "Chest")==0){ 
           
            $array = array(12,46,51);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           
           
        }
        if (strcmp($group3val, "Glutes")==0){ 
            $array = array(26,47,50);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;

        }

        if (strcmp($group3val, "Shoulders")==0){ 

            $array = array(32,48,49);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
          
        }
           if (strcmp($group3val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
           if (strcmp($group4val, "Abs")==0){
            $array = array(2,4,5);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;

            }
          if (strcmp($group4val, "Arms")==0){
            $array = array(12,13,53);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
           }
           if (strcmp($group4val, "Back")==0){
            $array = array(17,45,52);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
            
          
        }
        if (strcmp($group4val, "Chest")==0){ 
           
            $array = array(12,46,51);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
           
           
        }
        if (strcmp($group4val, "Glutes")==0){ 
            $array = array(26,47,50);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;

        }

        if (strcmp($group4val, "Shoulders")==0){ 

            $array = array(32,48,49);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
          
        }

           if (strcmp($group4val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
           }

    }
}

    if($timeval == 130) // 1h30min
    {
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax12exercise.js\"></script>";
        
               //////// GYM
      if(strcmp($locationval, "Gym")==0){
       
        if (strcmp($group1val, "Abs")==0){
            $random_group1_ex1 = rand(1,9);
            $random_group1_ex2 = rand(1,9);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(1,9);
            }
            $random_group1_ex3 = rand(1,9);
            while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                $random_group1_ex3 = rand(1,9);
            }
            $_SESSION['random_group1_ex3'] = $random_group1_ex3;
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
        }
       if (strcmp($group1val, "Arms")==0){
            $random_group1_ex1 = rand(10,15);
            $random_group1_ex2 = rand(10,15);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(10,15);
            }
            $random_group1_ex3 = rand(10,15);
            while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                $random_group1_ex3 = rand(10,15);
            }
            $_SESSION['random_group1_ex3'] = $random_group1_ex3;
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
          
        }
        if (strcmp($group1val, "Back")==0){
            $random_group1_ex1 = rand(16,20);
            $random_group1_ex2 = rand(16,20);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(16,20);
            }
            $random_group1_ex3 = rand(16,20);
            while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                $random_group1_ex3 = rand(16,20);
            }
            $_SESSION['random_group1_ex3'] = $random_group1_ex3;
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
          
        }
        if (strcmp($group1val, "Chest")==0){
            $random_group1_ex1 = rand(21,24);
            $random_group1_ex2 = rand(21,24);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(21,24);
            }
            $random_group1_ex3 = rand(21,24);
            while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                $random_group1_ex3 = rand(21,24);
            }
            $_SESSION['random_group1_ex3'] = $random_group1_ex3;
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
           
        }
        if (strcmp($group1val, "Glutes")==0){
            $random_group1_ex1 = rand(25,30);
            $random_group1_ex2 = rand(25,30);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(25,30);
            }
            $random_group1_ex3 = rand(25,30);
            while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                $random_group1_ex3 = rand(25,30);
            }
            $_SESSION['random_group1_ex3'] = $random_group1_ex3;
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
        }

        if (strcmp($group1val, "Shoulders")==0){
            $random_group1_ex1 = rand(31,35);
            $random_group1_ex2 = rand(31,35);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(31,35);
            }
            $random_group1_ex3 = rand(31,35);
            while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                $random_group1_ex3 = rand(31,35);
            }
            $_SESSION['random_group1_ex3'] = $random_group1_ex3;
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
          
        }
        if (strcmp($group1val, "Legs")==0){
            $random_group1_ex1 = rand(36,44);
            $random_group1_ex2 = rand(36,44);
            while($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(36,44);
            }
            $random_group1_ex3 = rand(36,44);
            while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                $random_group1_ex3 = rand(1,9);
            }
            $_SESSION['random_group1_ex3'] = $random_group1_ex3;
            $_SESSION['random_group1_ex1'] = $random_group1_ex1;
            $_SESSION['random_group1_ex2'] = $random_group1_ex2;
           
        
        }
        if (strcmp($group2val, "Abs")==0){
           $random_group2_ex1 = rand(1,9);
           $random_group2_ex2 = rand(1,9);
           while($random_group2_ex1 == $random_group2_ex2){
                $random_group2_ex2 = rand(1,9);
            }
            $random_group2_ex3 = rand(1,9);
            while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                $random_group2_ex3 = rand(1,9);
            }
            $_SESSION['random_group2_ex3'] = $random_group2_ex3;
            $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            $_SESSION['random_group2_ex2'] = $random_group2_ex2;
       
        }
      if (strcmp($group2val, "Arms")==0){
           $random_group2_ex1 = rand(10,15);
           $random_group2_ex2 = rand(10,15);
           while($random_group2_ex1 == $random_group2_ex2){
                $random_group2_ex2 = rand(10,15);
            }
            $random_group2_ex3 = rand(10,15);
            while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                $random_group2_ex3 = rand(10,15);
            }
            $_SESSION['random_group2_ex3'] = $random_group2_ex3;
            $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            $_SESSION['random_group2_ex2'] = $random_group2_ex2;
         
       }
       if (strcmp($group2val, "Back")==0){
           $random_group2_ex1 = rand(16,20);
           $random_group2_ex2 = rand(16,20);
           while($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 = rand(16,20);
           }
           $random_group2_ex3 = rand(16,20);
           while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
               $random_group2_ex3 = rand(16,20);
           }
           $_SESSION['random_group2_ex3'] = $random_group2_ex3;
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           $_SESSION['random_group2_ex2'] = $random_group2_ex2;
      
     
       }
       if (strcmp($group2val, "Chest")==0){
           $random_group2_ex1 = rand(21,24);
           $random_group2_ex2 = rand(21,24);
           while($random_group2_ex1 == $random_group2_ex2){
                $random_group2_ex2 = rand(21,24);
            }
            $random_group2_ex3 = rand(21,24);
            while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                $random_group2_ex3 = rand(21,24);
            }
            $_SESSION['random_group2_ex3'] = $random_group2_ex3;
            $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            $_SESSION['random_group2_ex2'] = $random_group2_ex2;
    
       }
       if (strcmp($group2val, "Glutes")==0){
           $random_group2_ex1 = rand(25,30);
           $random_group2_ex2 = rand(25,30);
            while($random_group2_ex1 == $random_group2_ex2){
                $random_group2_ex2 = rand(25,30);
            }
            $random_group2_ex3 = rand(25,30);
            while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                $random_group2_ex3 = rand(25,30);
            }
            $_SESSION['random_group2_ex3'] = $random_group2_ex3;
            $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            $_SESSION['random_group2_ex2'] = $random_group2_ex2;
       
       }

       if (strcmp($group2val, "Shoulders")==0){
           $random_group2_ex1 = rand(31,35);
           $random_group2_ex2 = rand(31,35);
           while($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 = rand(31,35);
           }
           $random_group2_ex3 = rand(31,35);
           while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
               $random_group2_ex3 = rand(31,35);
           }
           $_SESSION['random_group2_ex3'] = $random_group2_ex3;
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           $_SESSION['random_group2_ex2'] = $random_group2_ex2;
      
       }
       if (strcmp($group2val, "Legs")==0){
           $random_group2_ex1 = rand(36,44);
           $random_group2_ex2 = rand(36,44);
           while($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 = rand(36,44);
           }
           $random_group2_ex3 = rand(36,44);
           while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
               $random_group2_ex3 = rand(36,44);
           }
           $_SESSION['random_group2_ex3'] = $random_group2_ex3;
           $_SESSION['random_group2_ex1'] = $random_group2_ex1;
           $_SESSION['random_group2_ex2'] = $random_group2_ex2;
      
    
       }
       if (strcmp($group3val, "Abs")==0){
        $random_group3_ex1 = rand(1,9);
        $random_group3_ex2 = rand(1,9);
        while($random_group3_ex1 == $random_group3_ex2){
             $random_group3_ex2 = rand(1,9);
         }
         $random_group3_ex3 = rand(1,9);
         while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
             $random_group3_ex3 = rand(1,9);
         }
         $_SESSION['random_group3_ex3'] = $random_group3_ex3;
         $_SESSION['random_group3_ex1'] = $random_group3_ex1;
         $_SESSION['random_group3_ex2'] = $random_group3_ex2;
        }

      if (strcmp($group3val, "Arms")==0){
           $random_group3_ex1 = rand(10,15);
           $random_group3_ex2 = rand(10,15);
           while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 = rand(1,9);
            }
            $random_group3_ex3 = rand(10,15);
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = rand(10,15);
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
       
  
       }
       if (strcmp($group3val, "Back")==0){
           $random_group3_ex1 = rand(16,20);
           $random_group3_ex2 = rand(16,20);
           while($random_group3_ex1 == $random_group3_ex2){
               $random_group3_ex2 = rand(16,20);
           }
           $random_group3_ex3 = rand(16,20);
           while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
               $random_group3_ex3 = rand(16,20);
           }
           $_SESSION['random_group3_ex3'] = $random_group3_ex3;
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           $_SESSION['random_group3_ex2'] = $random_group3_ex2;
    
       }
       if (strcmp($group3val, "Chest")==0){
           $random_group3_ex1 = rand(21,24);
           $random_group3_ex2 = rand(21,24);
           while($random_group3_ex1 == $random_group3_ex2){
               $random_group3_ex2 = rand(21,24);
           }
           $random_group3_ex3 = rand(21,24);
           while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
               $random_group3_ex3 = rand(21,24);
           }
           $_SESSION['random_group3_ex3'] = $random_group3_ex3;
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           $_SESSION['random_group3_ex2'] = $random_group3_ex2;
    
       }
       if (strcmp($group3val, "Glutes")==0){
           $random_group3_ex1 = rand(25,30);
           $random_group3_ex2 = rand(25,30);
           while($random_group3_ex1 == $random_group3_ex2){
               $random_group3_ex2 = rand(25,30);
           }
           $random_group3_ex3 = rand(25,30);
           while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
               $random_group3_ex3 = rand(25,30);
           }
           $_SESSION['random_group3_ex3'] = $random_group3_ex3;
           $_SESSION['random_group3_ex1'] = $random_group3_ex1;
           $_SESSION['random_group3_ex2'] = $random_group3_ex2;
       }

       if (strcmp($group3val, "Shoulders")==0){
           $random_group3_ex1 = rand(31,35);
           $random_group3_ex2 = rand(31,35);
           while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 = rand(31,35);
            }
            $random_group3_ex3 = rand(31,35);
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = rand(31,35);
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
    
       }
       if (strcmp($group3val, "Legs")==0){
           $random_group3_ex1 = rand(36,44);
           $random_group3_ex2 = rand(36,44);
           while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 = rand(36,44);
            }
            $random_group3_ex3 = rand(36,44);
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = rand(36,44);
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
     
       }
       if (strcmp($group4val, "Abs")==0){
         $random_group4_ex1 = rand(1,9);
         $random_group4_ex2 = rand(1,9);
         while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 = rand(1,9);
            }
            $random_group4_ex3 = rand(1,9);
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = rand(1,9);
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
        }
          if (strcmp($group4val, "Arms")==0){
           $random_group4_ex1 = rand(10,15);
           $random_group4_ex2 = rand(10,15);
           while($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(10,15);
           }
           $random_group4_ex3 = rand(10,15);
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = rand(10,15);
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           $_SESSION['random_group4_ex2'] = $random_group4_ex2;
       
       }
       if (strcmp($group4val, "Back")==0){
           $random_group4_ex1 = rand(16,20);
           $random_group4_ex2 = rand(16,20);
           while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 = rand(16,20);
            }
            $random_group4_ex3 = rand(16,20);
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = rand(16,20);
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
    
       }
       if (strcmp($group4val, "Chest")==0){
           $random_group4_ex1 = rand(21,24);
           $random_group4_ex2 = rand(21,24);
           while($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(21,24);
           }
           $random_group4_ex3 = rand(21,24);
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = rand(21,24);
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           $_SESSION['random_group4_ex2'] = $random_group4_ex2;
      
       }
       if (strcmp($group4val, "Glutes")==0){
           $random_group4_ex1 = rand(25,30);
           $random_group4_ex2 = rand(25,30);
           while($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(25,30);
           }
           $random_group4_ex3 = rand(25,30);
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = rand(25,30);
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           $_SESSION['random_group4_ex2'] = $random_group4_ex2;
       }

       if (strcmp($group4val, "Shoulders")==0){
           $random_group4_ex1 = rand(31,35);
           $random_group4_ex2 = rand(31,35);
           while($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(31,35);
           }
           $random_group4_ex3 = rand(31,35);
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = rand(31,35);
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           $_SESSION['random_group4_ex2'] = $random_group4_ex2;

       }
       if (strcmp($group4val, "Legs")==0){
           $random_group4_ex1 = rand(36,44);
           $random_group4_ex2 = rand(36,44);
           while($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(36,44);
           }
           $random_group4_ex3 = rand(36,44);
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = rand(36,44);
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
           $_SESSION['random_group4_ex1'] = $random_group4_ex1;
           $_SESSION['random_group4_ex2'] = $random_group4_ex2;
       }
        }


        ///////////INSIDE
        if(strcmp($locationval, "Inside")==0){
       
            if (strcmp($group1val, "Abs")==0){
                $random_group1_ex1 = rand(1,9);
                $random_group1_ex2 = rand(1,9);
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 = rand(1,9);
                }
                $random_group1_ex3 = rand(1,9);
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = rand(1,9);
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
            
           }
           if (strcmp($group1val, "Arms")==0){
                $array = array(12,13,15,53);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
              
            }
            if (strcmp($group1val, "Back")==0){
                $array = array(16,17,20,45,52);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
              
            }
            if (strcmp($group1val, "Chest")==0){  //de revenit
               
                $array = array(12,46,51);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
               
               
            }
    
            if (strcmp($group1val, "Glutes")==0){
                $array = array(25,26,27,28,30,50,47);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
            }
    
            if (strcmp($group1val, "Shoulders")==0){
                $array = array(31,32,34,35,49);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
              
            }
            if (strcmp($group1val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
            
            }
            if (strcmp($group2val, "Abs")==0){
               $random_group2_ex1 = rand(1,9);
               $random_group2_ex2 = rand(1,9);
               while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =rand(1,9);
                }
                $random_group2_ex3 = rand(1,9);
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = rand(1,9);
                }
                $_SESSION['random_group2_ex3'] = $random_group2_ex3;
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
            }
            if (strcmp($group2val, "Arms")==0){
                $array = array(12,13,15,53);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $random_group2_ex3 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group2_ex3'] = $random_group2_ex3;
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
           }
           if (strcmp($group2val, "Back")==0){
                $array = array(16,17,20,45,52);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $random_group2_ex3 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group2_ex3'] = $random_group2_ex3;
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
         
           }
           if (strcmp($group2val, "Chest")==0){ // de revenit
               
            $array = array(12,46,51);
            $random_group2_ex1 = $array[array_rand($array)];
            $random_group2_ex2 = $array[array_rand($array)];
            while($random_group2_ex1 == $random_group2_ex2){
                $random_group2_ex2 =$array[array_rand($array)];
            }
            $random_group2_ex3 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = $array[array_rand($array)];
                }
            $_SESSION['random_group2_ex3'] = $random_group2_ex3;
            $_SESSION['random_group2_ex1'] = $random_group2_ex1;
            $_SESSION['random_group2_ex2'] = $random_group2_ex2;
        
        }

           if (strcmp($group2val, "Glutes")==0){
                $array = array(25,26,27,28,30,47,50);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $random_group2_ex3 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group2_ex3'] = $random_group2_ex3;
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
           }
    
           if (strcmp($group2val, "Shoulders")==0){
                $array = array(31,32,34,35,49);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $random_group2_ex3 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group2_ex3'] = $random_group2_ex3;
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
       
           }
           if (strcmp($group2val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $random_group2_ex3 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group2_ex3'] = $random_group2_ex3;
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
           }
           if (strcmp($group3val, "Abs")==0){
            $random_group3_ex1 = rand(1,9);
            $random_group3_ex2 = rand(1,9);
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =rand(1,9);
            }
            $random_group3_ex3 = rand(1,9);
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = rand(1,9);
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
            }
          if (strcmp($group3val, "Arms")==0){
            $array = array(12,13,15,53);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
           if (strcmp($group3val, "Back")==0){
            $array = array(16,17,20,45,52);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
          
           }
           if (strcmp($group3val, "Chest")==0){ //de revenit
               
            $array = array(12,46,51);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
            }
           if (strcmp($group3val, "Glutes")==0){
            $array = array(25,26,27,28,30,47,50);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
    
           if (strcmp($group3val, "Shoulders")==0){
            $array = array(31,32,34,35,49);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
           if (strcmp($group3val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
           if (strcmp($group4val, "Abs")==0){
            $random_group4_ex1 = rand(1,9);
            $random_group4_ex2 =rand(1,9);
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =rand(1,9);
            }
            $random_group4_ex3 = rand(1,9);
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = rand(1,9);
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
        
       }
          if (strcmp($group4val, "Arms")==0){
            $array = array(12,13,15,53);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            } 
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
      
           }
           if (strcmp($group4val, "Back")==0){
            $array = array(16,17,20,52,45);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
          
           }
           if (strcmp($group4val, "Chest")==0){ //de rev
               
            $array = array(12,46,51);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
        
        }
           if (strcmp($group4val, "Glutes")==0){
            $array = array(25,26,27,28,30,50,47);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
           }
    
           if (strcmp($group4val, "Shoulders")==0){
            $array = array(31,32,34,35,49);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
        
           }
           if (strcmp($group4val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
           }
            }


            ///////OUTSIDE
            if(strcmp($locationval, "Outside")==0){
       
            if (strcmp($group1val, "Abs")==0){
                $array = array(2,4,5);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
           }
           if (strcmp($group1val, "Arms")==0){ //revenit
                $array = array(12,13,53);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
              
            }
            if (strcmp($group1val, "Back")==0){ //rev
                $array = array(17,45,52);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
                
              
            }
            if (strcmp($group1val, "Chest")==0){  //rev
               
                $array = array(12,46,51);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
                 
            }
            if (strcmp($group1val, "Glutes")==0){  //rev
                $array = array(26,47,50);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;

            }
    
            if (strcmp($group1val, "Shoulders")==0){  //rev

                $array = array(32,48,49);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
              
            }
            if (strcmp($group1val, "Legs")==0){ 
                $array = array(37,38,39,40,41,42,43,44);
                $random_group1_ex1 = $array[array_rand($array)];
                $random_group1_ex2 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex2){
                    $random_group1_ex2 =$array[array_rand($array)];
                }
                $random_group1_ex3 = $array[array_rand($array)];
                while($random_group1_ex1 == $random_group1_ex3 || $random_group1_ex2 == $random_group1_ex3 ){
                    $random_group1_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group1_ex3'] = $random_group1_ex3;
                $_SESSION['random_group1_ex1'] = $random_group1_ex1;
                $_SESSION['random_group1_ex2'] = $random_group1_ex2;
            
            }
            if (strcmp($group2val, "Abs")==0){
                $array = array(2,4,5);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $random_group2_ex3 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group2_ex3'] = $random_group2_ex3;
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
            }
            if (strcmp($group2val, "Arms")==0){ //no
                $array = array(12,13,53);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
           }
            if (strcmp($group2val, "Back")==0){//no
                $array = array(17,45,52);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $random_group2_ex3 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group2_ex3'] = $random_group2_ex3;
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
                
              
            }
            if (strcmp($group2val, "Chest")==0){  //no
               
                $array = array(12,46,51);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
               
               
            }
            if (strcmp($group2val, "Glutes")==0){ //no
                $array = array(26,47,50);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $random_group2_ex3 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group2_ex3'] = $random_group2_ex3;
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;

            }
    
            if (strcmp($group2val, "Shoulders")==0){  //no

                $array = array(32,48,49);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $random_group2_ex3 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group2_ex3'] = $random_group2_ex3;
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
              
            }
          
           if (strcmp($group2val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group2_ex1 = $array[array_rand($array)];
                $random_group2_ex2 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex2){
                    $random_group2_ex2 =$array[array_rand($array)];
                }
                $random_group2_ex3 = $array[array_rand($array)];
                while($random_group2_ex1 == $random_group2_ex3 || $random_group2_ex2 == $random_group2_ex3 ){
                    $random_group2_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group2_ex3'] = $random_group2_ex3;
                $_SESSION['random_group2_ex1'] = $random_group2_ex1;
                $_SESSION['random_group2_ex2'] = $random_group2_ex2;
           }
           if (strcmp($group3val, "Abs")==0){
                $array = array(2,4,5);
                $random_group3_ex1 = $array[array_rand($array)];
                $random_group3_ex2 = $array[array_rand($array)];
                while($random_group3_ex1 == $random_group3_ex2){
                    $random_group3_ex2 =$array[array_rand($array)];
                }
                $random_group3_ex3 = $array[array_rand($array)];
                while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                    $random_group3_ex3 = $array[array_rand($array)];
                }
                $_SESSION['random_group3_ex3'] = $random_group3_ex3;
                $_SESSION['random_group3_ex1'] = $random_group3_ex1;
                $_SESSION['random_group3_ex2'] = $random_group3_ex2;
            }
          if (strcmp($group3val, "Arms")==0){ //no
            $array = array(12,13,53);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
           if (strcmp($group3val, "Back")==0){//no
            $array = array(17,45,52);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
            
          
        }
        if (strcmp($group3val, "Chest")==0){ //no
           
            $array = array(12,46,51);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           
           
        }
        if (strcmp($group3val, "Glutes")==0){ //no
            $array = array(26,47,50);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;

        }

        if (strcmp($group3val, "Shoulders")==0){ //no

            $array = array(32,48,49);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
          
        }
           if (strcmp($group3val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group3_ex1 = $array[array_rand($array)];
            $random_group3_ex2 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex2){
                $random_group3_ex2 =$array[array_rand($array)];
            }
            $random_group3_ex3 = $array[array_rand($array)];
            while($random_group3_ex1 == $random_group3_ex3 || $random_group3_ex2 == $random_group3_ex3 ){
                $random_group3_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group3_ex3'] = $random_group3_ex3;
            $_SESSION['random_group3_ex1'] = $random_group3_ex1;
            $_SESSION['random_group3_ex2'] = $random_group3_ex2;
           }
           if (strcmp($group4val, "Abs")==0){
            $array = array(2,4,5);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;

            }
          if (strcmp($group4val, "Arms")==0){ //no
            $array = array(12,13,53);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
           }
           if (strcmp($group4val, "Back")==0){ //no
            $array = array(17,45,52);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
            
          
        }
        if (strcmp($group4val, "Chest")==0){ //no
           
            $array = array(12,46,51);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
           
           
        }
        if (strcmp($group4val, "Glutes")==0){ //no
            $array = array(26,47,50);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;

        }

        if (strcmp($group4val, "Shoulders")==0){ 

            $array = array(32,48,49);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
          
        }

           if (strcmp($group4val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group4_ex1 = $array[array_rand($array)];
            $random_group4_ex2 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex2){
                $random_group4_ex2 =$array[array_rand($array)];
            }
            $random_group4_ex3 = $array[array_rand($array)];
            while($random_group4_ex1 == $random_group4_ex3 || $random_group4_ex2 == $random_group4_ex3 ){
                $random_group4_ex3 = $array[array_rand($array)];
            }
            $_SESSION['random_group4_ex3'] = $random_group4_ex3;
            $_SESSION['random_group4_ex1'] = $random_group4_ex1;
            $_SESSION['random_group4_ex2'] = $random_group4_ex2;
           }

}

    ?>