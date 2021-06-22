<?php

if (isset($_POST['logout'])) {
    session_start();

    if (!isset($_SESSION)) {
        echo 'not destroyed';
    }
    session_destroy();
    header('Location: /app/views/home/Login.php'); 
    
}
?>