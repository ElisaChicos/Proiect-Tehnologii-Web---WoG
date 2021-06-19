<?php 
    session_start();
    $host="localhost";
    $user="root";
    $password="";
    $db="images";
    $aVar=mysqli_connect($host,$user,$password);
    mysqli_select_db($aVar,'user_exemplu');

    $group1val   = isset($_POST["group1"]) ? $_POST["group1"] : 'Abs';
    $group2val   = isset($_POST["group2"]) ? $_POST["group2"] : 'Legs';
    $group3val   = isset($_POST["group3"]) ? $_POST["group3"] : 'Glutes';
    $group4val   = isset($_POST["group4"]) ? $_POST["group4"] : 'Back';
    $timeval     = isset($_POST["time"]) ? $_POST["time"] : '30';
    $locationval = isset($_POST["location"]) ? $_POST["location"] : 'Inside';

    $status = true;
    $message = array();

    if(isset($_POST["group1"]) && (!isset($_POST["group2"]) || !isset($_POST["group3"]) || !isset($_POST["group4"]))){
        $status = false;
        $message[] = 'Please select all the boxes!';   
    }else 
        if(isset($_POST["group2"]) && (!isset($_POST["group1"]) || !isset($_POST["group3"]) || !isset($_POST["group4"]))){
        $status = false;
        $message[] = 'Please select all the boxes!'; 
    }else if(isset($_POST["group3"]) && (!isset($_POST["group1"]) || !isset($_POST["group2"]) || !isset($_POST["group4"]))){
        $status = false;
        $message[] = 'Please select all the boxes!'; 
    }else if(isset($_POST["group4"]) && (!isset($_POST["group1"]) || !isset($_POST["group2"]) || !isset($_POST["group3"]))){
        $status = false;
        $message[] = 'Please select all the boxes!'; 
    }else{
        if(isset($_POST["group1"]) == isset($_POST["group2"]) || isset($_POST["group1"]) == isset($_POST["group3"]) || isset($_POST["group1"]) == isset($_POST["group4"]) )
        {
            $status = false;
            $message[] = 'Choose different options!'; 
        }
        else{
            if(isset($_POST["group2"]) == isset($_POST["group1"]) || isset($_POST["group2"]) == isset($_POST["group3"]) || isset($_POST["group2"]) == isset($_POST["group4"]) )
        {
            $status = false;
            $message[] = 'Choose different options!'; 
        }
        else
        {
            if(isset($_POST["group3"]) == isset($_POST["group1"]) || isset($_POST["group3"]) == isset($_POST["group2"]) || isset($_POST["group3"]) == isset($_POST["group4"]) )
        {
            $status = false;
            $message[] = 'Choose different options!'; 
        }
        else{
        if(isset($_POST["group4"]) == isset($_POST["group2"]) || isset($_POST["group4"]) == isset($_POST["group3"]) || isset($_POST["group4"]) == isset($_POST["group1"]) )
        {
            $status = false;
            $message[] = 'Choose different options!'; 
        }
        else
        {
            $_SESSION['group1'] = $group1val;
            $_SESSION['group2'] = $group2val;
            $_SESSION['group3'] = $group3val;
            $_SESSION['group4'] = $group4val;
            $_SESSION['time']   = $timeval;
            $_SESSION['location'] = $locationval;
        
            $status = true;
            $message[] = 'Have fun!'; 

        }
    }
        }
        }
    }
    

   
    echo json_encode(
        array(
            'status' => $status,
            'message' => $message
        )
    );

?>