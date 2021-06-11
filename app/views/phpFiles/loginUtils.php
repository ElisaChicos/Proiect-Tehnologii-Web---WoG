<?php
    require_once("../../models/User.php");

    session_start();

    $CONFIG = [
        'servername' => "localhost",
        'username' => "root",
        'password' => '',
        'db' => 'user_exemplu'
    ];

    $conn = new mysqli($CONFIG["servername"], $CONFIG["username"], $CONFIG["password"], $CONFIG["db"]);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        
    }



    function getUser($email, $password) {
        global $conn;
        $queryStmt =  $conn -> prepare('
            SELECT * 
            FROM user_exemplu.users
            WHERE email = ? AND password = ?;
        ');
        $queryStmt -> bind_param('ss', $email, $password);

        $queryStmt -> execute();
        $results = $queryStmt -> get_result();
        $queryStmt -> close();

        if( $results->num_rows == 1 ) {
            $row = $results->fetch_assoc();
            return new User($row["email"], $row["password"]);
        }
        return null;
    }

?>