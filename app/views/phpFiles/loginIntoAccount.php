

<?php
    session_start();

    function findUserInDatabase($get_email, $get_password, $email, $password){
        if($email == $get_email && $password == $get_password){
            return 1;
        }
        return null;
    }

    $host="localhost";
    $user="root";
    $password="";
    $db="user_exemplu";

    $aVar=mysqli_connect($host,$user,$password);
    mysqli_select_db($aVar,'user_exemplu');

    if(!isset($_POST['email'])){
        exit;
    }
    if(!isset($_POST['password'])){
        exit;
    }
    $email=$_POST['email'];
    $password=$_POST['password'];


    $query = "SELECT * FROM user_exemplu.users where email = '$email';";
    $result = mysqli_query($aVar,$query) or die( mysqli_error($aVar));
    $numberOfRows = mysqli_num_rows($result);
    if($numberOfRows == 0 ){
      $response = 403;
    }else{
    while($row = mysqli_fetch_array($result)){

        if(findUserInDatabase($row["email"], $row["password"], $email, $password)==1){
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            header('Location: /app/views/home/Profil.php');
            }
            else{
                $response = 403;
                
          }
    }
}
?>