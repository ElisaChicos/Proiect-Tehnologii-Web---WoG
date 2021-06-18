<?php

    $servername="localhost";
    $user="root";
    $db_password="";
    $db="user_exemplu";
    
    $conn = new mysqli($servername, $user, $db_password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM user_exemplu.users ORDER BY activity_points DESC, username ASC, email ASC LIMIT 10;");
    $stmt->execute();
    if($stmt->execute()){
      $result = $stmt->get_result();
      $stmt->close();
      while($row = $result->fetch_assoc()){
            echo "<li class=\"enum\">" . $row["username"] . "</li>";
      }
  }else{
      echo 'Error';
  }

?>