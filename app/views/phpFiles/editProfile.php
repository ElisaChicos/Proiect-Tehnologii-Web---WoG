    <?php
    session_start();

    function findUserInDatabase($db_email, $db_password, $input_email, $input_password){
        if($input_email === $db_email){
            if(password_verify($input_password, $db_password)==1){
            return 1;
            }
        }
        return 0;
    }

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

    $email = $_SESSION['email'];

    $username = isset($_POST["username"]) ? $_POST["username"] : '';
    $height = isset($_POST["height"]) ? $_POST["height"] : '';
    $weight = isset($_POST["weight"]) ? $_POST["weight"] : '';
    $current_pass = isset($_POST["currentPassword"]) ? $_POST["currentPassword"] : '';
    $new_password = isset($_POST["newPassword"]) ? $_POST["newPassword"] : '';


    if(empty($username) && empty($age) && empty($height) && empty($weight) && empty($current_pass) && empty($new_password)){
        $status = false;
        $message[] = 'You need to modify an input to save the changes.';
    }

    if(isset($_POST["username"]) && !empty($username)){
        $stmt = $conn->prepare("UPDATE user_exemplu.users SET username=? WHERE email=?");
        $stmt->bind_param('ss',$username, $email);
        $stmt->execute();
        if($stmt->execute()){
            $stmt->close();
            $status = true;
            $message[] = 'Updated succesfully.';
        }else{
            $status = false;
            $message[] =  'There was a problem at updating your username.';
        }
    }
    

    if(isset($_POST["height"]) && !empty($height)){
        if($height > 50 && $height < 250 ){
            $stmt = $conn->prepare("UPDATE user_exemplu.users SET height=? WHERE email=?");
            $stmt->bind_param('ss',$height ,$email);
            $stmt->execute();
            if($stmt->execute()){
                $stmt->close();
                $status = true;
                $message[] = 'Updated succesfully.';
            }else{
                $status = false;
                $message[] =  'There was a problem at updating your height.';
            }
        }else{
            $status = false;
            $message[] =  'Please choose a valid height.';
        }
    
    }

    if(isset($_POST["weight"]) && !empty($weight)){
        if($weight > 30 && $weight < 500){
            $stmt = $conn->prepare("UPDATE user_exemplu.users SET weight=? WHERE email=?");
            $stmt->bind_param('ss',$weight ,$email);
            $stmt->execute();
            if($stmt->execute()){
                $stmt->close();
                $status = true;
                $message[] = 'Updated succesfully.';
            }else{
                $status = false;
                $message[] =  'There was a problem at updating your weight.';
            }
        }else{
            $status = false;
            $message[] =  'Please choose a valid weight.';
        }
    }


    if((isset($_POST["currentPassword"]) && !isset($_POST["newPassword"]))
    || (!empty($current_pass) && empty($new_password)) ){
        $status = false;
        $message[] =  'Please choose a new password.';
    }else{
        if((!isset($_POST["currentPassword"]) && isset($_POST["newPassword"]))
        ||  (empty($current_pass) && !empty($new_password))){
            $status = false;
            $message[] =  'Please write your current password.';
        }else{
            if(isset($_POST["currentPassword"]) && isset($_POST["newPassword"]) && !empty($current_pass) && !empty($new_password)){
                $stmt = $conn->prepare("SELECT email, password FROM user_exemplu.users WHERE email = ? ;");
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $result = $stmt->get_result();
                $numberOfRows = $result->num_rows;
                $row = $result->fetch_assoc();

                $hashPass = password_hash($new_password, PASSWORD_DEFAULT);
                $newHashPassword = $hashPass;

                if($numberOfRows == 1  && findUserInDatabase($row["email"], $row["password"], $email, $current_pass)==1){
                    $stmt->close();
                    $stmt = $conn->prepare("UPDATE user_exemplu.users SET password=? WHERE email=?");
                    $stmt->bind_param('ss', $newHashPassword ,$email);
                    $stmt->execute();
                    if($stmt->execute()){
                        $stmt->close();
                        $status = true;
                        $message[] = 'Updated succesfully.';
                    }else{
                        $status = false;
                        $message[] =  'There was a problem at updating your password.';
                    }
                }else{
                    $status = false;
                    $message[] =  'Your current password is incorrect, please check.';
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