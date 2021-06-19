<?php

    require_once("../phpFiles/dbConn.php");    

    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
    echo "<br>";
    $maxActivityPoints = 0;

    $stmt = $conn->prepare("SELECT activity_points FROM user_exemplu.users order by activity_points DESC LIMIT 1;");
    $stmt->execute();
    if($stmt->execute()){
        $result = $stmt->get_result();
        $stmt->close();
        while($row = $result->fetch_assoc()){
            $maxActivityPoints = $row["activity_points"];
        }
    }else{
        echo 'Error';
    }

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

    $emailLastPosition = '';
    $usernameLastPosition = '';
    $activityPointsLastPosition = 0;

    $stmt = $conn->prepare("SELECT u1.username, u1.email, u1.activity_points FROM user_exemplu.users AS u1 INNER JOIN (SELECT username, email,activity_points FROM user_exemplu.users order by activity_points DESC LIMIT 10) AS u2 ON u1.email = u2.email ORDER BY activity_points ASC LIMIT 1;");
    $stmt->execute();
    if($stmt->execute()){
        $result = $stmt->get_result();
        $stmt->close();
        while($row = $result->fetch_assoc()){
            $emailLastPosition = $row['email'];
            $usernameLastPosition = $row['username'];
            $activityPointsLastPosition = $row['activity_points'];
        }
    }else{
        echo 'Error';
    }

    $stmt = $conn->prepare("SELECT * FROM user_exemplu.users where email = '$email';");
    $stmt->execute();
    if($stmt->execute()){
        $result = $stmt->get_result();
        $stmt->close();

        while($row = $result->fetch_assoc()){
            echo "<p> → You are number " . $position . " in top most active users</p>";

            if($position == 1){
                echo "<p> → You are the most active user. Congrats!</p>";
            }else{
                echo "<p> → You have with " . $maxActivityPoints - $row["activity_points"] . " activity points less than the most active user </p>";
            }

            echo "<p> → You have with " . $row["old_weight"] - $row["weight"] . " kg less!</p>";

            if($row["activity_points"] > $activityPointsLastPosition){
                echo "<p> → You are in top 10!</p>";
            }else{
                if($row["activity_points"] == $activityPointsLastPosition){
                    if(strcmp($row['username'],$usernameLastPosition) == 0) {
                       
                        if(strcmp(strcmp($row['email'],$emailLastPosition) < 0)){
                            echo "<p> → You are in top 10!</p>";
                        }else{
                            echo "<p> → You have to do one or two more workouts to be in top 10!</p>";
                        }
                   }else{
                        if(strcmp($row['username'],$usernameLastPosition) <= 0){
                            echo "<p> → You are in top 10!</p>";
                        }else{
                            echo "<p> → You have to do one or two more workouts to be in top 10!</p>";
                        }
                   }
                }else{
                    echo "<p> → You have to do " . $activityPointsLastPosition - $row["activity_points"] . " more workouts to be in top 10!</p>";
                }
            }

        }
    }else{
        echo 'Error';
    }
?>