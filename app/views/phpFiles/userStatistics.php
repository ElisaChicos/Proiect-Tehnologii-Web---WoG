<?php
    $aVar = mysqli_connect("localhost","root","","user_exemplu");
    $email = ($_SESSION['message']);
    $query = "SELECT * FROM user_exemplu.users where email = '$email';";
    $result = mysqli_query($aVar,$query) or die( mysqli_error($aVar));

    while($row = mysqli_fetch_array($result)){
       echo "<p> → You are number " . $row["id"] . " in top most active users</p>";

       echo "<p> → Workout " . $row["gender"] . " days/week </p>";

       echo "<p> → Workout " . $row["want"] . " days/month </p>";

       echo "<p> → You have with " . ($row["old_weight"] - $row["weight"]) . " kg less!</p>";
    }
?>