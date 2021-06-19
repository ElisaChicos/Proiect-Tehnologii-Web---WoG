<?php
    $servername="localhost";
    $user="root";
    $db_password="";
    $db="user_exemplu";

    $conn = new mysqli($servername, $user, $db_password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>