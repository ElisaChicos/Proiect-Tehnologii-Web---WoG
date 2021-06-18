<?php

    $servername="localhost";
    $user="root";
    $db_password="";
    $db="user_exemplu";

    $conn = new mysqli($servername, $user, $db_password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_SESSION['email'];
    $username = $_SESSION['username'];
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

    $stmt = $conn->prepare("SELECT * FROM user_exemplu.users where email = '$email';");
    $stmt->execute();
    if($stmt->execute()){
        $result = $stmt->get_result();
        $stmt->close();

        $string = file_get_contents("../phpFiles/activeUsers.json");
        $json = json_decode($string, true);
        foreach ($json['nr.crt']['username'] as $field => $value) {
            if()
        }
        while($row = $result->fetch_assoc()){
            echo "<p> → You are number " . $row["id"] . " in top most active users</p>";

            echo "<p> → You have with " . $maxActivityPoints - $row["activity_points"] . " activity points less than the most active user </p>";
     
            echo "<p> → You have with " . $row["old_weight"] - $row["weight"] . " kg less!</p>";
        }
    }else{
        echo 'Error';
    }
?>