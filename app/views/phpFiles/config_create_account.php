  <?php

  $status = true;
  $message = array();

  $servername="localhost";
  $user="root";
  $db_password="";
  $db="user_exemplu";
      
  $conn = new mysqli($servername, $user, $db_password, $db);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $username = isset($_POST["username"]) ? $_POST["username"] : '';
  $email = isset($_POST["email"]) ? $_POST["email"] : '';
  $age = isset($_POST["age"]) ? $_POST["age"] : '';
  $height = isset($_POST["height"]) ? $_POST["height"] : '';
  $weight = isset($_POST["weight"]) ? $_POST["weight"] : '';
  $old_weight  = $weight;
  $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
  $pass = isset($_POST["password"]) ? $_POST["password"] : '';
  $want        =  isset($_POST['want']) ? $_POST["want"] : 'lose_weight';
  $focus_part  =  isset($_POST['focus_part']) ? $_POST['focus_part'] : 'abs';
  $activity_points = 0;


  if(!isset($_POST['username']) || empty($username) || !isset($_POST["email"]) || empty($email) || !isset($_POST["age"]) || empty($age) 
  || !isset($_POST["height"]) || empty($height) || !isset($_POST["weight"]) || empty($weight) || !isset($_POST["password"]) || empty($pass)
  || !isset($_POST["gender"]) || empty($gender)){
          $status = false;
          $message[] = 'Please fill in all the inputs.';
  }else{
  
    if(!filter_var(filter_var($email, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL)){
          $status = false;
          $message[] = 'Please choose a valid email.';
    }else{

      if($age < 5 || $age > 120 || $height < 50|| $height > 250 || $weight < 30 || $weight > 500){
        $status = false;
        $message[] = 'Please fill in with correct informations.';
      }else{ 

      if(!isset($_POST['gender']) || !isset($_POST['want']) || !isset($_POST['focus_part'])){
        $status = false;
        $message[] = 'Please choose an option from the select box.';
      }else{
        $stmt = $conn->prepare("SELECT email FROM user_exemplu.users WHERE email = '$email' ;");
      $stmt->execute();
      $result = $stmt->get_result();
      $numberOfRows = $result->num_rows;
      $stmt->close();

      if($numberOfRows == 0 ){
        $hashPass = password_hash($pass, PASSWORD_DEFAULT);
        $password = $hashPass;
        $sql = "INSERT INTO user_exemplu.users (username,email,age,height,weight,old_weight,gender,password,want,focus_part,activity_points) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssiddissssi",$username,$email,$age,$height,$weight,$old_weight,$gender,$password,$want,$focus_part,$activity_points);
        $result = $stmt->execute();
        $stmt->close();
        if($result){
            $status = true;
            $message[] = 'Account created succesfully.';
        }
      }
      else{
            $status = false;
            $message[] = 'Email already exists.'; 
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