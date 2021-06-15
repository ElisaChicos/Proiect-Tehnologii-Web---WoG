<?php
    if( isset($_POST['some-name']) and !empty($_POST['some-name']) ){
        echo $_POST['some-name'];
        exit();
    }
    else{
        echo 'Please enter your name!';
        exit();
    }
?>