<?php
    session_start();
    $servername="localhost";
    $user="root";
    $db_password="";
    $db="user_exemplu";

    $conn = new mysqli($servername, $user, $db_password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_SESSION['email'];

    $maxActivityPoints = 0; //nr 1 in top

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

    $position = 1; //position for current user in top
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

    $isInTop = '';
    $stmt = $conn->prepare("SELECT * FROM user_exemplu.users where email = '$email';");
    $stmt->execute();
    if($stmt->execute()){
        $result = $stmt->get_result();
        $stmt->close();

    while($row = $result->fetch_assoc()){
            $weight = $row["old_weight"] - $row["weight"];
            $variable = $maxActivityPoints - $row["activity_points"];
            if($row["activity_points"] > $activityPointsLastPosition){
                $isInTop = ' You are in top 10!';
            }else{
                if($row["activity_points"] == $activityPointsLastPosition){
                    if(strcmp($row['username'],$usernameLastPosition) == 0) {
                       
                        if(strcmp(strcmp($row['email'],$emailLastPosition) < 0)){
                            $isInTop = ' You are in top 10!';
                        }else{
                            $isInTop = 'You have to do one or two more workouts to be in top 10!';
                        }
                   }else{
                        if(strcmp($row['username'],$usernameLastPosition) <= 0){
                            $isInTop = ' You are in top 10!';
                        }else{
                            $isInTop = 'You have to do one or two more workouts to be in top 10!';
                        }
                   }
                }else{
                    $isInTop = 'You have to do ' . $activityPointsLastPosition - $row["activity_points"] . ' more workouts to be in top 10!';
                }
            }
    }
        $items = array(
            array("title"       => "Number in top active users:",
                "description" => "You are number " . $position . " in top most active users.",
                "link"        => "/app/views/home/Statistics.php")
            
            , array("title"       => "Nr. 1 vs you in Top:",
                "description" => "You have with " . $variable . " activity points less than the most active user",
                "link"        => "/app/views/home/Statistics.php")
            
            , array("title"       => "Weight loss:",
                "description" => "You have with " . $weight . " kg less.",
                "link"        => "/app/views/home/Statistics.php")
            
            , array("title"       => "Belonging to the top:",
                "description" =>  $isInTop,
                "link"        => "/app/views/home/Statistics.php")
        );

        $output = '<?xml version="1.0" encoding="ISO-8859-1"?>';
        $output .= '<rss version="2.0">';
        $output .= "<channel>";
        $output .= "<title>Statistics Update | RSS</title>";
        $output .= "<description>New update on statistics</description>";
        $output .= "<link>/app/views/home/Statistics.php</link>";
        $output .= "<language>en-us</language>";
        $output .= "<category>Statistics</category>";

        foreach ($items as $item) {
            $output .= "<item>";
            $output .= "<title>" . $item["title"] . "</title>";
            $output .= "<description>" . $item["description"] . "</description>";
            $output .= "<link>" . $item["link"] . "</link>";
            $output .= "</item>";
        }
        $output .= "</channel>";
        $output .= "</rss>";
    
        header("Content-Type: application/rss+xml; charset=ISO-8859-1");
    
    
        $filename = 'rssFeed.xml';
                if(file_put_contents($filename, $output)){
                    echo '';
                }else{
                    echo 'There is a error.';
                }
        }else{
            echo 'error';
        }
?>