<?php

if (isset($_POST['logout'])) {
    session_start();

    if (!isset($_SESSION)) {
        echo 'not destroyed';
    }else{
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    header('Location: /app/views/home/Login.php'); 
    }  
}
?>