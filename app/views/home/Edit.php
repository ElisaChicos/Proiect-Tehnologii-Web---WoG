<?php
//require_once('config_create_account.php');


$host="localhost";
$user="root";
$password="";
$db="user_exemplu";

$aVar=mysqli_connect($host,$user,$password);

mysqli_select_db($aVar,'user_exemplu');



if(isset($_POST['create'])){
  $full_name    = $_POST['full_name'];
  $username    = $_POST['username'];
  $email       = $_POST['email'];
  $age         = $_POST['age'];
  $height      = $_POST['height'];
  $weight      = $_POST['weight'];

  $sql = "UPDATE `users` SET `full_name`='".$full_name."',`email`='".$email."',`age`='".$age."',`height`='".$height ."',`weight`='".$weight ."' WHERE `username`=$username";
 // $stmtinsert = $db->prepare($sql);
 // $result = $stmtinsert->execute([$full_name,$username,$email,$age,$height,$weight]);
 $result = mysqli_query($aVar,$sql);

 if($result){
      echo 'Successfuly saved.';
  }
  else{
      echo 'Erorssss';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Edit.css">
    <title>Edit profile</title>
</head>
<body>
    <div class="start_create">

        <div class="login-box2">
    
    <h2>Edit your profile</h2>
    <form action="/app/views/home/Edit.php" method="post">
    
    <div class="user-box">
        <input type="text"  name="full_name"  placeholder="" required >
        <label for="full_name">Full name</label>
          </div>
    
          
          <div class="user-box">
          <input type="text" name="username" required>
        <label for="username"> Username</label>
          </div>

        <div class="user-box">
        <input type="text" name="email"  required>
        <label for="email">Email</label>
          </div>

          <div class="user-box">
          <input type="number" name="age"  required>
        <label for="age">Age</label>
          </div>

          <div class="user-box">
          <input type="number"  name="height"  required>
        <label for="height">Height</label>
          </div>

          <div class="user-box">
          <input type="number" name="weight"  required>
        <label for="weight">Weight</label>
          </div>

          <input type="submit" name="create" id="create" value="Save changes">
          <a href="/app/views/home/Profil.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Save changes
          </a>

    </form>
    </div>
    </div>

</body>
</html>