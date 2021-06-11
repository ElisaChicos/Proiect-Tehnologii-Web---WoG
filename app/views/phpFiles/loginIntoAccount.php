
<script>

    function function_alert($message){
    var btn = document.getElementById("buttonSubmit");
    btn.addEventListener("click",function(){
            alert($message);
    });
}

</script>

<?php

require_once("../../models/User.php");

session_start();

if(!isset($_POST["email"])){
    exit;
}

if(!isset($_POST["password"])){
    exit;
}

$email=$_POST["email"];
$password=$_POST["password"];

function findUserInDatabase($get_email, $get_password, $email, $password){
    if($email == $get_email && $password == $get_password){
        return 1;
    }
    return null;
}
function function_alert($message) { 
    echo "<script>alert('$message');</script>";
    //sleep(20);
   /* var form = document.getElementById("myForm");
    function handleForm(event) { event.preventDefault(); } 
    form.addEventListener('submit', handleForm);*/
}


$host="localhost";
$user="root";
$password="";
$db="user_exemplu";

$aVar=mysqli_connect($host,$user,$password);

mysqli_select_db($aVar,'user_exemplu');

$query = "SELECT * FROM user_exemplu.users where email = '$email';";
$result = mysqli_query($aVar,$query) or die( mysqli_error($aVar));
$numberOfRows = mysqli_num_rows($result);
if($numberOfRows == 0 ){
     Swal.fire('Any fool can use a computer');
    //header('Location: /app/views/home/Login.php');
}else{
while($row = mysqli_fetch_array($result)){

      if(findUserInDatabase($row["email"], $row["password"], $email, $password)==1){      
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        header('Location: /app/views/home/Profil.php');
        }
        else{
            Swal.fire('Any fool can use a computer');
            //header('Location: /app/views/home/Login.php');
        }
}
}
?>
<?php
/*
    require_once("../../models/User.php");
    require_once("../phpFiles/loginUtils.php");

    if(!isset($_POST["email"])){
        exit;
    }

    if(!isset($_POST["password"])){
        exit;
    }
    
    $email=$_POST["email"];
    $password=$_POST["password"];

    $user = getUser($email, $password);

    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;

    header('Location: /app/views/home/Profil.php');


*/
?>