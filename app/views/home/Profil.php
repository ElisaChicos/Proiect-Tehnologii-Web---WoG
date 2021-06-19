<?php
session_start();
?>
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
    <li class="signoutBtn" >
    <form method= "POST" action = "../phpFiles/logOut.php">
       <button type="submit" id="btnSignOut" name="logout">LogOut</button>
    </form>
    </li>
    </ul>

    <div class="login-box2">
    <h1>PROFILE</h1>
    <h2>Public information</h2>
    <p class="enum">Username:  <?php
    
    require_once("../phpFiles/dbConn.php");

    $email = $_SESSION['email'];

    $stmt = $conn->prepare("SELECT * FROM user_exemplu.users WHERE email = '$email';");
    $stmt->execute();
    if($stmt->execute()){
        $result = $stmt->get_result();
        $stmt->close();
        while($row = $result->fetch_assoc()){
            echo $row["username"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["age"] = $row["age"];
            $_SESSION["gender"] = $row["gender"];
            $_SESSION["activity_points"] = $row["activity_points"];
            $_SESSION["height"] = $row["height"];
            $_SESSION["weight"] = $row["weight"];
        }
    }else{
        echo 'Error';
    }
    ?>
    </p>

    <p class="enum">Number 
        
    <?php     

        require_once("../phpFiles/dbConn.php");
        
        $email = $_SESSION['email'];

        $position = 1;
        $stmt = $conn->prepare("SELECT email, activity_points FROM user_exemplu.users order by activity_points DESC;");
        $stmt->execute();
        if($stmt->execute()){
            $result = $stmt->get_result();
            $stmt->close();
            while($row = $result->fetch_assoc()){
                if($row["email"] === $email){
                    break;
                }else{
                    $position++;
                }
            }
        }else{
            echo 'Error';
        }
        echo $position;
    ?> in top most active users</p>


    <p class="enum">Age: 
    <?php
       echo $_SESSION["age"];
    ?>
    </p>
    <p class="enum">Gender: 
    <?php
       echo $_SESSION["gender"];
    ?>
    </p>

    <h2>Private information</h2>
    <p class="enum">
    &nbsp;&nbsp;Don't worry, only you cand see these informations. :)
    </p>
    <p class="enum">Email: 
    <?php
       echo $_SESSION["email"];
    ?>
    </p>

    <p class="enum">Activity points (how many workouts have you done):  <?php
       echo $_SESSION["activity_points"];
    ?>
    </p>

    <p class="enum">Height: 
    <?php
       echo $_SESSION["height"];
    ?>
    </p>

    <p class="enum">Weight: 
    <?php
       echo $_SESSION["weight"];
    ?>
    </p>

    <a href="/app/views/home/Edit.php" class="button">Edit your profile</a> 
</div>
    </div>
</body>
</html>