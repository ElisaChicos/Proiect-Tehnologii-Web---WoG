<?php
    session_start();
    $email = $_SESSION['email'];
    $activityPoints = $_SESSION['activity_points'];
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['newWorkout']))
    {
        func($email, $activityPoints);
    }
    function func($email, $activityPoints)
    {
        require_once("../phpFiles/dbConn.php");    

        $activityPoints = $activityPoints + 1;
        $stmt = $conn->prepare("UPDATE user_exemplu.users SET activity_points = '$activityPoints' WHERE email='$email';");
        $stmt->execute();
        if($stmt->execute()){
            $stmt->close();
            $_SESSION['activity_points'] = $activityPoints;
            header('Location: /app/views/home/Generator.php');
        }else{
            echo  'There was a problem at updating your username.';
        }
    }
?>