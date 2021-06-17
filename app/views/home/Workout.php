
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

    

   if($timeval == 45){ // 45min
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax6exercise.js\"></script>";
      if(strcmp($locationval, "Gym")==0){
       
        if (strcmp($group1val, "Abs")==0){
            $random_group1_ex1 = rand(1,9);
        
       }
       if (strcmp($group1val, "Arms")==0){
            $random_group1_ex1 = rand(10,15);
          
        }
        if (strcmp($group1val, "Back")==0){
            $random_group1_ex1 = rand(16,20);
          
        }
        if (strcmp($group1val, "Chest")==0){
            $random_group1_ex1 = rand(21,24);
           
        }
        if (strcmp($group1val, "Glutes")==0){
            $random_group1_ex1 = rand(25,30);
        }

        if (strcmp($group1val, "Shoulders")==0){
            $random_group1_ex1 = rand(31,35);
          
        }
        if (strcmp($group1val, "Legs")==0){
            $random_group1_ex1 = rand(36,44);
        
        }
        if (strcmp($group2val, "Abs")==0){
           $random_group2_ex1 = rand(1,9);
        }
      if (strcmp($group2val, "Arms")==0){
           $random_group2_ex1 = rand(10,15);
         
       }
       if (strcmp($group2val, "Back")==0){
           $random_group2_ex1 = rand(16,20);
     
       }
       if (strcmp($group2val, "Chest")==0){
           $random_group2_ex1 = rand(21,24);
    
       }
       if (strcmp($group2val, "Glutes")==0){
           $random_group2_ex1 = rand(25,30);
       }

       if (strcmp($group2val, "Shoulders")==0){
           $random_group2_ex1 = rand(31,35);
   
       }
       if (strcmp($group2val, "Legs")==0){
           $random_group2_ex1 = rand(36,44);
    
       }
      if (strcmp($group3val, "Arms")==0){
           $random_group3_ex1 = rand(10,15);
  
       }
       if (strcmp($group3val, "Back")==0){
           $random_group3_ex1 = rand(16,20);
    
       }
       if (strcmp($group3val, "Chest")==0){
           $random_group3_ex1 = rand(21,24);
    
       }
       if (strcmp($group3val, "Glutes")==0){
           $random_group3_ex1 = rand(25,30);
       }

       if (strcmp($group3val, "Shoulders")==0){
           $random_group3_ex1 = rand(31,35);
    
       }
       if (strcmp($group3val, "Legs")==0){
           $random_group3_ex1 = rand(36,44);
     
       }
      if (strcmp($group4val, "Arms")==0){
           $random_group4_ex1 = rand(10,15);
       
       }
       if (strcmp($group4val, "Back")==0){
           $random_group4_ex1 = rand(16,20);
    
       }
       if (strcmp($group4val, "Chest")==0){
           $random_group4_ex1 = rand(21,24);
      
       }
       if (strcmp($group4val, "Glutes")==0){
           $random_group4_ex1 = rand(25,30);
       }

       if (strcmp($group4val, "Shoulders")==0){
           $random_group4_ex1 = rand(31,35);

       }
       if (strcmp($group4val, "Legs")==0){
           $random_group4_ex1 = rand(36,44);
       }

      
       if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Arms")==0 ){
         $array = array(2,5);
         $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Back")==0 ){
            $array = array(3,9,19,20);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Chest")==0){
            $array = array(2,4,21);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Glutes")==0  || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Glutes")==0){
            $array = array(2,5,25,26,30);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Shoulders")==0 ){
            $array = array(2,4,5,31);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Legs")==0 ){
            $array = array(2,5,25,26,30);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Back")==0 ){
            $random_2exercises1 = 19;
        }
        if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Chest")==0 ){
            $array = array(11,12,14,16,21,23);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Glutes")==0 ){
            $random_2exercises1 = 29;
        }
        if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Shoulders")==0 ){
            $array = array(11,13,14,15,32,33);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Legs")==0 ){
           
            $random_2exercises1 = 15;
        }
        if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Chest")==0 ){
            $array = array(22,24);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Glutes")==0 ){
            $array = array(17,18,26,30);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Shoulders")==0 ){
            $array = array(17,18,19,32,35);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Legs")==0 ){
            $random_2exercises1 = 38;
        }
        if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Glutes")==0 ){
            $array = array(23,25,29);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Shoulders")==0 ){
            $array = array(21,22,23,32);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Legs")==0 ){
            $random_2exercises1 = 44;
        }
        if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Shoulders")==0 ){
            $random_2exercises1 = 33;
        }
        if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Legs")==0 ){
            $array = array(36,37,38,39,40,41,42,43);
            $random_2exercises1 = $array[array_rand($array)];
        }
        if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Legs")==0 ){
            $random_2exercises1 = 36;
        }
    

        if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Arms")==0 ){
            $array = array(2,5);
            $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Back")==0 ){
               $array = array(3,9,19,20);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Chest")==0){
               $array = array(2,4,21);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Glutes")==0  || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Glutes")==0){
               $array = array(2,5,25,26,30);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Shoulders")==0 ){
               $array = array(2,4,5,31);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Legs")==0 ){
               $array = array(2,5,25,26,30);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Back")==0 ){
               $random_2exercises2 = 19;
           }
           if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Chest")==0 ){
               $array = array(11,12,14,16,21,23);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Glutes")==0 ){
               $random_2exercises2 = 29;
           }
           if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Shoulders")==0 ){
               $array = array(11,13,14,15,32,33);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Legs")==0 ){
              
               $random_2exercises2 = 15;
           }
           if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Chest")==0 ){
               $array = array(22,24);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Glutes")==0 ){
               $array = array(17,18,26,30);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Shoulders")==0 ){
               $array = array(17,18,19,32,35);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Legs")==0 ){
               $random_2exercises2 = 38;
           }
           if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Glutes")==0 ){
               $array = array(23,25,29);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Shoulders")==0 ){
               $array = array(21,22,23,32);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Legs")==0 ){
               $random_2exercises2 = 44;
           }
           if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Shoulders")==0 ){
               $random_2exercises2 = 33;
           }
           if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Legs")==0 ){
               $array = array(36,37,38,39,40,41,42,43);
               $random_2exercises2 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Legs")==0 ){
               $random_2exercises2 = 36;
           }
        }

        if(strcmp($locationval, "Inside")==0){
       
            if (strcmp($group1val, "Abs")==0){
                $random_group1_ex1 = rand(1,9);
            
           }
           if (strcmp($group1val, "Arms")==0){
                $array = array(12,13,15);
                $random_group1_ex1 = $array[array_rand($array)];
              
            }
            if (strcmp($group1val, "Back")==0){
                $array = array(16,17,20);
                $random_group1_ex1 = $array[array_rand($array)];
              
            }
            if (strcmp($group1val, "Chest")==0){//de revenit
                $array = array(0);
                $random_group1_ex1 = $array[array_rand($array)];
               
            }
            if (strcmp($group1val, "Glutes")==0){
                $array = array(25,26,27,28,30);
                $random_group1_ex1 = $array[array_rand($array)];
            }
    
            if (strcmp($group1val, "Shoulders")==0){
                $array = array(31,32,34,35);
                $random_group1_ex1 = $array[array_rand($array)];
              
            }
            if (strcmp($group1val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group1_ex1 = $array[array_rand($array)];
            
            }
            if (strcmp($group2val, "Abs")==0){
               $random_group2_ex1 = rand(1,9);
            }
            if (strcmp($group2val, "Arms")==0){
                $array = array(12,13,15);
                $random_group2_ex1 = $array[array_rand($array)];
           }
           if (strcmp($group2val, "Back")==0){
                $array = array(16,17,20);
                $random_group2_ex1 = $array[array_rand($array)];
         
           }
           if (strcmp($group2val, "Chest")==0){
                $array = array(0);
                $random_group2_ex1 = $array[array_rand($array)];
        
           }
           if (strcmp($group2val, "Glutes")==0){
                $array = array(25,26,27,28,30);
                $random_group2_ex1 = $array[array_rand($array)];
           }
    
           if (strcmp($group2val, "Shoulders")==0){
                $array = array(31,32,34,35);
                $random_group2_ex1 = $array[array_rand($array)];
       
           }
           if (strcmp($group2val, "Legs")==0){
                $array = array(37,38,39,40,41,42,43,44);
                $random_group2_ex1 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Abs")==0){
            $random_group3_ex1 = rand(1,9);
            }
          if (strcmp($group3val, "Arms")==0){
            $array = array(12,13,15);
            $random_group3_ex1 = $array[array_rand($array)];
           }
           if (strcmp($group3val, "Back")==0){
            $array = array(16,17,20);
            $random_group3_ex1 = $array[array_rand($array)];
          
           }
           if (strcmp($group3val, "Chest")==0){
            $array = array(0);
            $random_group3_ex1 = $array[array_rand($array)];
           
        
           }
           if (strcmp($group3val, "Glutes")==0){
            $array = array(25,26,27,28,30);
            $random_group3_ex1 = $array[array_rand($array)];
           }
    
           if (strcmp($group3val, "Shoulders")==0){
            $array = array(31,32,34,35);
            $random_group3_ex1 = $array[array_rand($array)];
        
           }
           if (strcmp($group3val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group3_ex1 = $array[array_rand($array)];
           }
           if (strcmp($group4val, "Abs")==0){
            $random_group4_ex1 = rand(1,9);
        
       }
          if (strcmp($group4val, "Arms")==0){
            $array = array(12,13,15);
            $random_group4_ex1 = $array[array_rand($array)];
          
      
           }
           if (strcmp($grou4val, "Back")==0){
            $array = array(16,17,20);
            $random_group4_ex1 = $array[array_rand($array)];
          
           }
           if (strcmp($group3val, "Chest")==0){
            $array = array(0);
            $random_group3_ex1 = $array[array_rand($array)];
           
        
           }
           if (strcmp($group4val, "Glutes")==0){
            $array = array(25,26,27,28,30);
            $random_group4_ex1 = $array[array_rand($array)];
           }
    
           if (strcmp($group4val, "Shoulders")==0){
            $array = array(31,32,34,35);
            $random_group4_ex1 = $array[array_rand($array)];
        
           }
           if (strcmp($group4val, "Legs")==0){
            $array = array(37,38,39,40,41,42,43,44);
            $random_group4_ex1 = $array[array_rand($array)];
           }
           
    ///////SEMN DE CARTE BLANAO
          
           if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Arms")==0 ){
             $array = array(2,5);
             $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Back")==0 ){
                $array = array(3,9,19,20);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Chest")==0){
                $array = array(2,4,21);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Glutes")==0  || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Glutes")==0){
                $array = array(2,5,25,26,30);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Shoulders")==0 ){
                $array = array(2,4,5,31);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Legs")==0 ){
                $array = array(2,5,25,26,30);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Back")==0 ){
                $random_2exercises1 = 19;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Chest")==0 ){
                $array = array(11,12,14,16,21,23);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Glutes")==0 ){
                $random_2exercises1 = 29;
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Shoulders")==0 ){
                $array = array(11,13,14,15,32,33);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Legs")==0 ){
               
                $random_2exercises1 = 15;
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Chest")==0 ){
                $array = array(22,24);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Glutes")==0 ){
                $array = array(17,18,26,30);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Shoulders")==0 ){
                $array = array(17,18,19,32,35);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Legs")==0 ){
                $random_2exercises1 = 38;
            }
            if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Glutes")==0 ){
                $array = array(23,25,29);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Shoulders")==0 ){
                $array = array(21,22,23,32);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Legs")==0 ){
                $random_2exercises1 = 44;
            }
            if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Shoulders")==0 ){
                $random_2exercises1 = 33;
            }
            if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Legs")==0 ){
                $array = array(36,37,38,39,40,41,42,43);
                $random_2exercises1 = $array[array_rand($array)];
            }
            if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Legs")==0 ){
                $random_2exercises1 = 36;
            }
        
    
            if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Arms")==0 ){
                $array = array(2,5);
                $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Back")==0 ){
                   $array = array(3,9,19,20);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Chest")==0){
                   $array = array(2,4,21);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Glutes")==0  || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Glutes")==0){
                   $array = array(2,5,25,26,30);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $array = array(2,4,5,31);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Legs")==0 ){
                   $array = array(2,5,25,26,30);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Back")==0 ){
                   $random_2exercises2 = 19;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Chest")==0 ){
                   $array = array(11,12,14,16,21,23);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Glutes")==0 ){
                   $random_2exercises2 = 29;
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $array = array(11,13,14,15,32,33);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Legs")==0 ){
                  
                   $random_2exercises2 = 15;
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Chest")==0 ){
                   $array = array(22,24);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Glutes")==0 ){
                   $array = array(17,18,26,30);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $array = array(17,18,19,32,35);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Legs")==0 ){
                   $random_2exercises2 = 38;
               }
               if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Glutes")==0 ){
                   $array = array(23,25,29);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $array = array(21,22,23,32);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Legs")==0 ){
                   $random_2exercises2 = 44;
               }
               if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Shoulders")==0 ){
                   $random_2exercises2 = 33;
               }
               if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Legs")==0 ){
                   $array = array(36,37,38,39,40,41,42,43);
                   $random_2exercises2 = $array[array_rand($array)];
               }
               if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Legs")==0 ){
                   $random_2exercises2 = 36;
               }
            }
    }
    if($timeval == 15) // 15 min
    {
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax2exercise.js\"></script>";
        if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Arms")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Arms")==0 ){
            $array = array(2,5);
            $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Back")==0 ){
               $array = array(3,9,19,20);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Chest")==0){
               $array = array(2,4,21);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Glutes")==0  || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Glutes")==0){
               $array = array(2,5,25,26,30);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Shoulders")==0 ){
               $array = array(2,4,5,31);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Abs")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Abs")==0 && strcmp($group1val, "Legs")==0 ){
               $array = array(2,5,25,26,30);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Back")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Back")==0 ){
               $random_2exercises1 = 19;
           }
           if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Chest")==0 ){
               $array = array(11,12,14,16,21,23);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Glutes")==0 ){
               $random_2exercises1 = 29;
           }
           if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Shoulders")==0 ){
               $array = array(11,13,14,15,32,33);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Arms")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Arms")==0 && strcmp($group1val, "Legs")==0 ){
              
               $random_2exercises1 = 15;
           }
           if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Chest")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Chest")==0 ){
               $array = array(22,24);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Glutes")==0 ){
               $array = array(17,18,26,30);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Shoulders")==0 ){
               $array = array(17,18,19,32,35);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Back")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Back")==0 && strcmp($group1val, "Legs")==0 ){
               $random_2exercises1 = 38;
           }
           if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Glutes")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Glutes")==0 ){
               $array = array(23,25,29);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Shoulders")==0 ){
               $array = array(21,22,23,32);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Chest")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Chest")==0 && strcmp($group1val, "Legs")==0 ){
               $random_2exercises1 = 44;
           }
           if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Shoulders")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Shoulders")==0 ){
               $random_2exercises1 = 33;
           }
           if (strcmp($group1val, "Glutes")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Glutes")==0 && strcmp($group1val, "Legs")==0 ){
               $array = array(36,37,38,39,40,41,42,43);
               $random_2exercises1 = $array[array_rand($array)];
           }
           if (strcmp($group1val, "Shoulders")==0 && strcmp($group2val, "Legs")==0 || strcmp($group2val, "Shoulders")==0 && strcmp($group1val, "Legs")==0 ){
               $random_2exercises1 = 36;
           }
       
   
           if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Arms")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Arms")==0 ){
               $array = array(2,5);
               $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Back")==0 ){
                  $array = array(3,9,19,20);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Chest")==0){
                  $array = array(2,4,21);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Glutes")==0  || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Glutes")==0){
                  $array = array(2,5,25,26,30);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Shoulders")==0 ){
                  $array = array(2,4,5,31);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Abs")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Abs")==0 && strcmp($group3val, "Legs")==0 ){
                  $array = array(2,5,25,26,30);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Back")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Back")==0 ){
                  $random_2exercises2 = 19;
              }
              if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Chest")==0 ){
                  $array = array(11,12,14,16,21,23);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Glutes")==0 ){
                  $random_2exercises2 = 29;
              }
              if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Shoulders")==0 ){
                  $array = array(11,13,14,15,32,33);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Arms")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Arms")==0 && strcmp($group3val, "Legs")==0 ){
                 
                  $random_2exercises2 = 15;
              }
              if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Chest")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Chest")==0 ){
                  $array = array(22,24);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Glutes")==0 ){
                  $array = array(17,18,26,30);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Shoulders")==0 ){
                  $array = array(17,18,19,32,35);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Back")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Back")==0 && strcmp($group3val, "Legs")==0 ){
                  $random_2exercises2 = 38;
              }
              if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Glutes")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Glutes")==0 ){
                  $array = array(23,25,29);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Shoulders")==0 ){
                  $array = array(21,22,23,32);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Chest")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Chest")==0 && strcmp($group3val, "Legs")==0 ){
                  $random_2exercises2 = 44;
              }
              if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Shoulders")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Shoulders")==0 ){
                  $random_2exercises2 = 33;
              }
              if (strcmp($group3val, "Glutes")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Glutes")==0 && strcmp($group3val, "Legs")==0 ){
                  $array = array(36,37,38,39,40,41,42,43);
                  $random_2exercises2 = $array[array_rand($array)];
              }
              if (strcmp($group3val, "Shoulders")==0 && strcmp($group4val, "Legs")==0 || strcmp($group4val, "Shoulders")==0 && strcmp($group3val, "Legs")==0 ){
                  $random_2exercises2 = 36;
              }
    }
    if($timeval == 30){ // 30min
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajaxexercise.js\"></script>";
        if (strcmp($group1val, "Abs")==0){
            $random_group1_ex1 = rand(1,9);
        
       }
       if (strcmp($group1val, "Arms")==0){
            $random_group1_ex1 = rand(10,15);
          
        }
        if (strcmp($group1val, "Back")==0){
            $random_group1_ex1 = rand(16,20);
          
        }
        if (strcmp($group1val, "Chest")==0){
            $random_group1_ex1 = rand(21,24);
           
        }
        if (strcmp($group1val, "Glutes")==0){
            $random_group1_ex1 = rand(25,30);
          

        }

        if (strcmp($group1val, "Shoulders")==0){
            $random_group1_ex1 = rand(31,35);
          
        }
        if (strcmp($group1val, "Legs")==0){
            $random_group1_ex1 = rand(36,44);
        
        }
        if (strcmp($group2val, "Abs")==0){
           $random_group2_ex1 = rand(1,9);
        }
      if (strcmp($group2val, "Arms")==0){
           $random_group2_ex1 = rand(10,15);
         
       }
       if (strcmp($group2val, "Back")==0){
           $random_group2_ex1 = rand(16,20);
     
       }
       if (strcmp($group2val, "Chest")==0){
           $random_group2_ex1 = rand(21,24);
    
       }
       if (strcmp($group2val, "Glutes")==0){
           $random_group2_ex1 = rand(25,30);
       }

       if (strcmp($group2val, "Shoulders")==0){
           $random_group2_ex1 = rand(31,35);
   
       }
       if (strcmp($group2val, "Legs")==0){
           $random_group2_ex1 = rand(36,44);
    
       }
      if (strcmp($group3val, "Arms")==0){
           $random_group3_ex1 = rand(10,15);
  
       }
       if (strcmp($group3val, "Back")==0){
           $random_group3_ex1 = rand(16,20);
    
       }
       if (strcmp($group3val, "Chest")==0){
           $random_group3_ex1 = rand(21,24);
    
       }
       if (strcmp($group3val, "Glutes")==0){
           $random_group3_ex1 = rand(25,30);
     

       }

       if (strcmp($group3val, "Shoulders")==0){
           $random_group3_ex1 = rand(31,35);
    
       }
       if (strcmp($group3val, "Legs")==0){
           $random_group3_ex1 = rand(36,44);
     
       }
      if (strcmp($group4val, "Arms")==0){
           $random_group4_ex1 = rand(10,15);
       
       }
       if (strcmp($group4val, "Back")==0){
           $random_group4_ex1 = rand(16,20);
    
       }
       if (strcmp($group4val, "Chest")==0){
           $random_group4_ex1 = rand(21,24);
      
       }
       if (strcmp($group4val, "Glutes")==0){
           $random_group4_ex1 = rand(25,30);
     
       }

       if (strcmp($group4val, "Shoulders")==0){
           $random_group4_ex1 = rand(31,35);

       }
       if (strcmp($group4val, "Legs")==0){
           $random_group4_ex1 = rand(36,44);
       }
 
    }
    if($timeval == 1) // 1h
    {
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax8exercise.js\"></script>";
        if (strcmp($group1val, "Abs")==0){
            $random_group1_ex1 = rand(1,9);
            $random_group1_ex2 = rand(1,9);
            if($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(1,9);
            }
       }
       if (strcmp($group1val, "Arms")==0){
            $random_group1_ex1 = rand(10,15);
            $random_group1_ex2 = rand(10,15);
            if($random_group1_ex1 == $random_group1_ex2){
               $random_group1_ex2 = rand(10,15);
           }
        }
        if (strcmp($group1val, "Back")==0){
            $random_group1_ex1 = rand(16,20);
            $random_group1_ex2 = rand(16,20);
            if($random_group1_ex1 == $random_group1_ex2){
               $random_group1_ex2 = rand(16,20);
           }
        }
        if (strcmp($group1val, "Chest")==0){
            $random_group1_ex1 = rand(21,24);
            $random_group1_ex2 = rand(21,24);
            if($random_group1_ex1 == $random_group1_ex2){
               $random_group1_ex2 =rand(21,24);
              }
        }
        if (strcmp($group1val, "Glutes")==0){
            $random_group1_ex1 = rand(25,30);
            $random_group1_ex2 = rand(25,30);
            if($random_group1_ex1 == $random_group1_ex2){
               $random_group1_ex2 = rand(25,30);
             }

        }

        if (strcmp($group1val, "Shoulders")==0){
            $random_group1_ex1 = rand(31,35);
            $random_group1_ex2 = rand(31,35);
            if($random_group1_ex1 == $random_group1_ex2){
               $random_group1_ex2 = rand(31,35);
               }
        }
        if (strcmp($group1val, "Legs")==0){
            $random_group1_ex1 = rand(36,44);
            $random_group1_ex2 = rand(36,44);
            if($random_group1_ex1 == $random_group1_ex2){
               $random_group1_ex2 =rand(36,44);
              }
        }
        if (strcmp($group2val, "Abs")==0){
           $random_group2_ex1 = rand(1,9);
           $random_group2_ex2 = rand(1,9);
           if($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 = rand(1,9);
             }
      }
      if (strcmp($group2val, "Arms")==0){
           $random_group2_ex1 = rand(10,15);
           $random_group2_ex2 = rand(10,15);
           if($random_group2_ex1 == $random_group2_ex2)
           {
              $random_group2_ex2 = rand(10,15);
            }
       }
       if (strcmp($group2val, "Back")==0){
           $random_group2_ex1 = rand(16,20);
           $random_group2_ex2 = rand(16,20);
           if($random_group2_ex1 == $random_group2_ex2){
              $random_group2_ex2 = rand(16,20);
              }
       }
       if (strcmp($group2val, "Chest")==0){
           $random_group2_ex1 = rand(21,24);
           $random_group2_ex2 = rand(21,24);
           if($random_group2_ex1 == $random_group2_ex2){
              $random_group2_ex2 =rand(21,24);
             }
       }
       if (strcmp($group2val, "Glutes")==0){
           $random_group2_ex1 = rand(25,30);
           $random_group2_ex2 = rand(25,30);
           if($random_group2_ex1 == $random_group2_ex2){
              $random_group2_ex2 = rand(25,30);
             }

       }

       if (strcmp($group2val, "Shoulders")==0){
           $random_group2_ex1 = rand(31,35);
           $random_group2_ex2 = rand(31,35);
           if($random_group2_ex1 == $random_group2_ex2){
              $random_group2_ex2 = rand(31,35);
             }
       }
       if (strcmp($group2val, "Legs")==0){
           $random_group2_ex1 = rand(36,44);
           $random_group2_ex2 = rand(36,44);
           if($random_group2_ex1 == $random_group2_ex2){
              $random_group2_ex2 =rand(36,44);
             }
       }
      if (strcmp($group3val, "Arms")==0){
           $random_group3_ex1 = rand(10,15);
           $random_group3_ex2 = rand(10,15);
           if($random_group3_ex1 == $random_group3_ex2)
           {
              $random_group3_ex2 = rand(10,15);
               }
       }
       if (strcmp($group3val, "Back")==0){
           $random_group3_ex1 = rand(16,20);
           $random_group3_ex2 = rand(16,20);
           if($random_group3_ex1 == $random_group3_ex2){
              $random_group3_ex2 = rand(16,20);
              }
       }
       if (strcmp($group3val, "Chest")==0){
           $random_group3_ex1 = rand(21,24);
           $random_group3_ex2 = rand(21,24);
           if($random_group3_ex1 == $random_group3_ex2){
              $random_group3_ex2 =rand(21,24);
             }
       }
       if (strcmp($group3val, "Glutes")==0){
           $random_group3_ex1 = rand(25,30);
           $random_group3_ex2 = rand(25,30);
           if($random_group3_ex1 == $random_group3_ex2){
              $random_group3_ex2 = rand(25,30);
             }

       }

       if (strcmp($group3val, "Shoulders")==0){
           $random_group3_ex1 = rand(31,35);
           $random_group3_ex2 = rand(31,35);
           if($random_group3_ex1 == $random_group3_ex2){
              $random_group3_ex2 = rand(31,35);
              }
       }
       if (strcmp($group3val, "Legs")==0){
           $random_group3_ex1 = rand(36,44);
           $random_group3_ex2 = rand(36,44);
           if($random_group3_ex1 == $random_group3_ex2){
              $random_group3_ex2 =rand(36,44);
              }
       }
      if (strcmp($group4val, "Arms")==0){
           $random_group4_ex1 = rand(10,15);
           $random_group4_ex2 = rand(10,15);
           if($random_group4_ex1 == $random_group4_ex2)
           {
              $random_group4_ex2 = rand(10,15);
               }
       }
       if (strcmp($group4val, "Back")==0){
           $random_group4_ex1 = rand(16,20);
           $random_group4_ex2 = rand(16,20);
           if($random_group4_ex1 == $random_group4_ex2){
              $random_group4_ex2 = rand(16,20);
             }
       }
       if (strcmp($group4val, "Chest")==0){
           $random_group4_ex1 = rand(21,24);
           $random_group4_ex2 = rand(21,24);
           if($random_group4_ex1 == $random_group4_ex2){
              $random_group4_ex2 =rand(21,24);
             }
       }
       if (strcmp($group4val, "Glutes")==0){
           $random_group4_ex1 = rand(25,30);
           $random_group4_ex2 = rand(25,30);
           if($random_group4_ex1 == $random_group4_ex2){
              $random_group4_ex2 = rand(25,30);
            }

       }

       if (strcmp($group4val, "Shoulders")==0){
           $random_group4_ex1 = rand(31,35);
           $random_group4_ex2 = rand(31,35);
           if($random_group4_ex1 == $random_group4_ex2){
              $random_group4_ex2 = rand(31,35);
             }
       }
       if (strcmp($group4val, "Legs")==0){
           $random_group4_ex1 = rand(36,44);
           $random_group4_ex2 = rand(36,44);
           if($random_group4_ex1 == $random_group4_ex2){
              $random_group4_ex2 =rand(36,44);
             }
       }
 
   }
    if($timeval == 130) // 1h30min
    {
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax12exercise.js\"></script>";
        if (strcmp($group1val, "Abs")==0){
             $random_group1_ex1 = rand(1,9);
             $random_group1_ex2 = rand(1,9);
             if($random_group1_ex1 == $random_group1_ex2){
                 $random_group1_ex2 = rand(1,9);
             }
                 $random_group1_ex3 = rand(1,9);
                 if($random_group1_ex3 == $random_group1_ex1 || $random_group1_ex3 == $random_group1_ex2)
                    $random_group1_ex3 = rand(1,9);
             
        }
        if (strcmp($group1val, "Arms")==0){
             $random_group1_ex1 = rand(10,15);
             $random_group1_ex2 = rand(10,15);
             if($random_group1_ex1 == $random_group1_ex2)
             {
                $random_group1_ex2 = rand(10,15);
            }
                $random_group1_ex3 = rand(10,15);
                if($random_group1_ex3 == $random_group1_ex1 || $random_group1_ex3 == $random_group1_ex2)
                   $random_group1_ex3 =rand(10,15);
            
         }
         if (strcmp($group1val, "Back")==0){
             $random_group1_ex1 = rand(16,20);
             $random_group1_ex2 = rand(16,20);
             if($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(16,20);
            }
                $random_group1_ex3 = rand(16,20);
                if($random_group1_ex3 == $random_group1_ex1 || $random_group1_ex3 == $random_group1_ex2)
                   $random_group1_ex3 = rand(16,20);
           
         }
         if (strcmp($group1val, "Chest")==0){
             $random_group1_ex1 = rand(21,24);
             $random_group1_ex2 = rand(21,24);
             if($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 =rand(21,24);
            }
                $random_group1_ex3 = rand(21,24);
                if($random_group1_ex3 == $random_group1_ex1 || $random_group1_ex3 == $random_group1_ex2)
                   $random_group1_ex3 =rand(21,24);
           
         }
         if (strcmp($group1val, "Glutes")==0){
             $random_group1_ex1 = rand(25,30);
             $random_group1_ex2 = rand(25,30);
             if($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(25,30);
            }
                $random_group1_ex3 = rand(25,30);
                if($random_group1_ex3 == $random_group1_ex1 || $random_group1_ex3 == $random_group1_ex2)
                   $random_group1_ex3 =rand(25,30);
            

         }

         if (strcmp($group1val, "Shoulders")==0){
             $random_group1_ex1 = rand(31,35);
             $random_group1_ex2 = rand(31,35);
             if($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 = rand(31,35);
            }
                $random_group1_ex3 = rand(31,35);
                if($random_group1_ex3 == $random_group1_ex1 || $random_group1_ex3 == $random_group1_ex2)
                   $random_group1_ex3 =rand(31,35);
            
         }
         if (strcmp($group1val, "Legs")==0){
             $random_group1_ex1 = rand(36,44);
             $random_group1_ex2 = rand(36,44);
             if($random_group1_ex1 == $random_group1_ex2){
                $random_group1_ex2 =rand(36,44);
            }
                $random_group1_ex3 = rand(36,44);
                if($random_group1_ex3 == $random_group1_ex1 || $random_group1_ex3 == $random_group1_ex2)
                   $random_group1_ex3 = rand(36,44);
            
         }
         if (strcmp($group2val, "Abs")==0){
            $random_group2_ex1 = rand(1,9);
            $random_group2_ex2 = rand(1,9);
            if($random_group2_ex1 == $random_group2_ex2){
                $random_group2_ex2 = rand(1,9);
            }
                $random_group2_ex3 = rand(1,9);
                if($random_group2_ex3 == $random_group2_ex1 || $random_group2_ex3 == $random_group2_ex2)
                   $random_group2_ex3 = rand(1,9);
         
       }
       if (strcmp($group2val, "Arms")==0){
            $random_group2_ex1 = rand(10,15);
            $random_group2_ex2 = rand(10,15);
            if($random_group2_ex1 == $random_group2_ex2)
            {
               $random_group2_ex2 = rand(10,15);
            }
               
                $random_group2_ex3 = rand(10,15);
               if($random_group2_ex3 == $random_group2_ex1 || $random_group2_ex3 == $random_group2_ex2)
                  $random_group2_ex3 =rand(10,15);
           
        }
        if (strcmp($group2val, "Back")==0){
            $random_group2_ex1 = rand(16,20);
            $random_group2_ex2 = rand(16,20);
            if($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 = rand(16,20);
            }
               $random_group2_ex3 = rand(16,20);
               if($random_group2_ex3 == $random_group2_ex1 || $random_group2_ex3 == $random_group2_ex2)
                  $random_group2_ex3 = rand(16,20);
           
        }
        if (strcmp($group2val, "Chest")==0){
            $random_group2_ex1 = rand(21,24);
            $random_group2_ex2 = rand(21,24);
            if($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 =rand(21,24);
            }
               $random_group2_ex3 = rand(21,24);
               if($random_group2_ex3 == $random_group2_ex1 || $random_group2_ex3 == $random_group2_ex2)
                  $random_group2_ex3 =rand(21,24);
           
        }
        if (strcmp($group2val, "Glutes")==0){
            $random_group2_ex1 = rand(25,30);
            $random_group2_ex2 = rand(25,30);
            if($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 = rand(25,30);
            }
               $random_group2_ex3 = rand(25,30);
               if($random_group2_ex3 == $random_group2_ex1 || $random_group2_ex3 == $random_group2_ex2)
                  $random_group2_ex3 =rand(25,30);
           

        }

        if (strcmp($group2val, "Shoulders")==0){
            $random_group2_ex1 = rand(31,35);
            $random_group2_ex2 = rand(31,35);
            if($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 = rand(31,35);
            }
               $random_group2_ex3 = rand(31,35);
               if($random_group2_ex3 == $random_group2_ex1 || $random_group2_ex3 == $random_group2_ex2)
                  $random_group2_ex3 =rand(31,35);
           
        }
        if (strcmp($group2val, "Legs")==0){
            $random_group2_ex1 = rand(36,44);
            $random_group2_ex2 = rand(36,44);
            if($random_group2_ex1 == $random_group2_ex2){
               $random_group2_ex2 =rand(36,44);
            }
               $random_group2_ex3 = rand(36,44);
               if($random_group2_ex3 == $random_group2_ex1 || $random_group2_ex3 == $random_group2_ex2)
                  $random_group2_ex3 = rand(36,44);
           
        }
       if (strcmp($group3val, "Arms")==0){
            $random_group3_ex1 = rand(10,15);
            $random_group3_ex2 = rand(10,15);
            if($random_group3_ex1 == $random_group3_ex2)
            {
               $random_group3_ex2 = rand(10,15);
            }
               $random_group3_ex3 = rand(10,15);
               if($random_group3_ex3 == $random_group3_ex1 || $random_group3_ex3 == $random_group3_ex2)
                  $random_group3_ex3 =rand(10,15);
           
        }
        if (strcmp($group3val, "Back")==0){
            $random_group3_ex1 = rand(16,20);
            $random_group3_ex2 = rand(16,20);
            if($random_group3_ex1 == $random_group3_ex2){
               $random_group3_ex2 = rand(16,20);
            }
               $random_group3_ex3 = rand(16,20);
               if($random_group3_ex3 == $random_group3_ex1 || $random_group3_ex3 == $random_group3_ex2)
                  $random_group3_ex3 = rand(16,20);
           
        }
        if (strcmp($group3val, "Chest")==0){
            $random_group3_ex1 = rand(21,24);
            $random_group3_ex2 = rand(21,24);
            if($random_group3_ex1 == $random_group3_ex2){
               $random_group3_ex2 =rand(21,24);
            }
               $random_group3_ex3 = rand(21,24);
               if($random_group3_ex3 == $random_group3_ex1 || $random_group3_ex3 == $random_group3_ex2)
                  $random_group3_ex3 =rand(21,24);
           
        }
        if (strcmp($group3val, "Glutes")==0){
            $random_group3_ex1 = rand(25,30);
            $random_group3_ex2 = rand(25,30);
            if($random_group3_ex1 == $random_group3_ex2){
               $random_group3_ex2 = rand(25,30);
            }
               $random_group3_ex3 = rand(25,30);
               if($random_group3_ex3 == $random_group3_ex1 || $random_group3_ex3 == $random_group3_ex2)
                  $random_group3_ex3 =rand(25,30);
           

        }

        if (strcmp($group3val, "Shoulders")==0){
            $random_group3_ex1 = rand(31,35);
            $random_group3_ex2 = rand(31,35);
            if($random_group3_ex1 == $random_group3_ex2){
               $random_group3_ex2 = rand(31,35);
            }
               $random_group3_ex3 = rand(31,35);
               if($random_group3_ex3 == $random_group3_ex1 || $random_group3_ex3 == $random_group3_ex2)
                  $random_group3_ex3 =rand(31,35);
           
        }
        if (strcmp($group3val, "Legs")==0){
            $random_group3_ex1 = rand(36,44);
            $random_group3_ex2 = rand(36,44);
            if($random_group3_ex1 == $random_group3_ex2){
               $random_group3_ex2 =rand(36,44);
            }
               $random_group3_ex3 = rand(36,44);
               if($random_group3_ex3 == $random_group3_ex1 || $random_group3_ex3 == $random_group3_ex2)
                  $random_group3_ex3 = rand(36,44);
           
        }
       if (strcmp($group4val, "Arms")==0){
            $random_group4_ex1 = rand(10,15);
            $random_group4_ex2 = rand(10,15);
            if($random_group4_ex1 == $random_group4_ex2)
            {
               $random_group4_ex2 = rand(10,15);
            }
               $random_group4_ex3 = rand(10,15);
               if($random_group4_ex3 == $random_group4_ex1 || $random_group4_ex3 == $random_group4_ex2)
                  $random_group4_ex3 =rand(10,15);
           
        }
        if (strcmp($group4val, "Back")==0){
            $random_group4_ex1 = rand(16,20);
            $random_group4_ex2 = rand(16,20);
            if($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(16,20);
            }
               $random_group4_ex3 = rand(16,20);
               if($random_group4_ex3 == $random_group4_ex1 || $random_group4_ex3 == $random_group4_ex2)
                  $random_group4_ex3 = rand(16,20);
           
        }
        if (strcmp($group4val, "Chest")==0){
            $random_group4_ex1 = rand(21,24);
            $random_group4_ex2 = rand(21,24);
            if($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 =rand(21,24);
            }
               $random_group4_ex3 = rand(21,24);
               if($random_group4_ex3 == $random_group4_ex1 || $random_group4_ex3 == $random_group4_ex2)
                  $random_group4_ex3 =rand(21,24);
           
        }
        if (strcmp($group4val, "Glutes")==0){
            $random_group4_ex1 = rand(25,30);
            $random_group4_ex2 = rand(25,30);
            if($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(25,30);
            }
               $random_group4_ex3 = rand(25,30);
               if($random_group4_ex3 == $random_group4_ex1 || $random_group4_ex3 == $random_group4_ex2)
                  $random_group4_ex3 =rand(25,30);
        

        }

        if (strcmp($group4val, "Shoulders")==0){
            $random_group4_ex1 = rand(31,35);
            $random_group4_ex2 = rand(31,35);
            if($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 = rand(31,35);
            }
               $random_group4_ex3 = rand(31,35);
               if($random_group4_ex3 == $random_group4_ex1 || $random_group4_ex3 == $random_group4_ex2)
                  $random_group4_ex3 =rand(31,35);
           
        }
        if (strcmp($group4val, "Legs")==0){
            $random_group4_ex1 = rand(36,44);
            $random_group4_ex2 = rand(36,44);
            if($random_group4_ex1 == $random_group4_ex2){
               $random_group4_ex2 =rand(36,44);
            }
               $random_group4_ex3 = rand(36,44);
               if($random_group4_ex3 == $random_group4_ex1 || $random_group4_ex3 == $random_group4_ex2)
                  $random_group4_ex3 = rand(36,44);
           }
    }


    ?>