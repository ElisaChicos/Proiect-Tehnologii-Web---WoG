<?php
require_once('config_create_account.php');
require_once("app/views/config_create_account.php");


if(isset($_POST['create'])){
  $full_name    = $_POST['full_name'];
  $username    = $_POST['username'];
  $email       = $_POST['email'];
  $age         = $_POST['age'];
  $height      = $_POST['height'];
  $weight      = $_POST['weight'];
  $gender      = $_POST['gender'];
  $password    = $_POST['password'];
  $image       = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $want        = $_POST['want'];
  $focus_part  = $_POST['focus_part'];
  



  $sql = "INSERT INTO user_exemplu.users (full_name,username,email,age,height,weight,gender,password,image,want,focus_part) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
  $stmtinsert = $db->prepare($sql);
  $result = $stmtinsert->execute([$full_name,$username,$email,$age,$height,$weight,$gender,$password,$image,$want,$focus_part]);
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
    <link rel="stylesheet" href="/public/css/Create_account.css">
    <title>Create account</title>
</head>
<body>

    <div class="start_create">

        <div class="login-box2">
    
    <h2>Create account</h2>
    <form action="Create_account.php" method="post">
    <div class="container">
    <div class="row">
    
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

     
      <div class="user-box">
      
        <input type="text" name="gender"  required>
        <label for="gender"> Gender</label>
      </div>

      <div class="user-box">
     
        <input type="password" name="password"  required>
        <label for="password"> Password</label>
      </div>


      <div id="radios">
        <p> I want to:
        <select name="want">
        <option> Choose an option </option>
        <option value="lose_weight"> Lose weight </option>
        <option value="get_toned"> Get toned </option>
        <option value="build_muscles"> Build muscles </option>
        </select>
        </p>
       </div>

              
       <div id="radios">
          <p>Choose what's your focus part:
          <select name="focus_part">
          <option> Choose an option </option>
          <option value="arms"> Arms </option>
          <option value="abs"> Abs </option>
          <option value="butt"> Butt </option>
          <option value="legs"> Legs </option>
          </select>
          </p>
        </div>

 <div id="terms">
   <label>
   <input type="checkbox" class="option-input-checkbox" />
    I agree to the processing of my personal data.  I agree with the terms and <br> conditions. 
   </label>
 </div>
 <input type="submit" name="create" id="create" value="Sign Up">
 <a href="/app/views/home/Login.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Create account
          </a>
    
        
    
        <p> You have an account?</p>
    
            <a href="/app/views/home/Login.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login
              </a>
          
    </form>
    </div>
    </div>

</body>
</html>