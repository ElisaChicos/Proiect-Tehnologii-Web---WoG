
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
    if($timeval == 15) // 15 min
    {
        echo "<script type=\"text/javascript\" src=\"JavaScriptFiles/Ajax2exercise.js\"></script>";
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