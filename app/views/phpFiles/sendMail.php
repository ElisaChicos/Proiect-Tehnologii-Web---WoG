<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "../phpFiles/PHPMailer/src/Exception.php";
require '../phpFiles/PHPMailer/src/PHPMailer.php';
require '../phpFiles/PHPMailer/src/SMTP.php';

function random_str(
    int $length = 64,
    string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ/!.,^#$%^*'
): string {
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces []= $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}
session_start();
$email = isset($_POST["email"]) ? $_POST["email"] : '';

$status = true;
$message = array();

if(empty($email)){
    $status = false;
    $message[] = 'Please write your email.';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $status = false;
    $message[] = 'Please give a valid email adress.';
}else{
    
$servername="localhost";
$user="root";
$db_password="";
$db="user_exemplu";
    
$conn = new mysqli($servername, $user, $db_password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("SELECT email FROM user_exemplu.users WHERE email = ? ;");
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$numberOfRows = $result->num_rows;
$stmt->close();

if($numberOfRows == 0 ){
    $status = false;
    $message[] = 'This account does not exist.';       
}else{
    $tokenResponse = random_str(32);
    //$tokenResponse = '.i^gnBkW1chX!16RnYaFLiQV*tOlgeDS';
    $hashToken = password_hash($tokenResponse, PASSWORD_DEFAULT);
    $_SESSION['hashToken'] = $hashToken;
    $_SESSION['email'] = $email;

    $mail = new PHPMailer(TRUE);

try {
    $mail->SMTPDebug = 1;                      
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'wogapp1@gmail.com';                     //SMTP username
    $mail->Password   = 'pass123:word456';                       //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    $mail->setFrom('wogapp1@gmail.com', 'WoG');
    $mail->addAddress('alinaadrianah@gmail.com', $email);   

    $body = '<p>Hi, your requested token for reseting the password for your wog account is:</p><p><br><strong>' . $tokenResponse . '</strong></p><br><p>If you did not request a 
    password reset, feel free to delete this email and enjoy your day!</p><br>All the best,<br>The WoG Team'; 

    $mail->isHTML(true);                                  
    $mail->Subject = 'Reset password for WoG account';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    $status = true;
    $message[] = 'We have sended the token. Check your email.'; 
} catch (Exception $e) {
    $status = false;
    $message[] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

}
echo json_encode(
        array(
            'status' => $status,
            'message' => $message
        )
);






// $email = isset($_POST["email"]) ? $_POST["email"] : '';
// $token = isset($_POST["token"]) ? $_POST["token"] : '';
// $new_password = isset($_POST["newPassword"]) ? $_POST["newPassword"] : '';
// $confirm_password = isset($_POST["confirmPassword"]) ? $_POST["confirmPassword"] : '';

// $status = true;
// $message = array();

// if((empty($email) || empty($token)) && (!empty($new_password) || !empty($confirm_password))){
//     $status = false;
//     $message[] = 'We need your email and your token, buddy. :) ';
// }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     $status = false;
//     $message[] = 'Please give a valid email adress.';
// }else if(empty($email) && empty($token) && empty($new_password) && empty($confirm_password)){
//     $status = false;
//     $message[] = 'You need to modify an input to save the changes.';
// }else{

// $servername="localhost";
// $user="root";
// $db_password="";
// $db="user_exemplu";
    
// $conn = new mysqli($servername, $user, $db_password, $db);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $stmt = $conn->prepare("SELECT email FROM user_exemplu.users WHERE email = ? ;");
// $stmt->bind_param('s', $email);
// $stmt->execute();
// $result = $stmt->get_result();
// $numberOfRows = $result->num_rows;
// $stmt->close();

// if($numberOfRows == 0 ){
//     $status = false;
//     $message[] = 'This account does not exist.';       
// }else{
//     $tokenResponse = '.i^gnBkW1chX!16RnYaFLiQV*tOlgeDS';
//     //$token = random_str(32);
//     $status = true;
//     //$message[] = $token; 
//     $message[] = '.i^gnBkW1chX!16RnYaFLiQV*tOlgeDS';
//     if(!empty($token)){
//     if($tokenResponse == $token){
//             if($new_password == $confirm_password){
//                 $hashPass = password_hash($new_password, PASSWORD_DEFAULT);
//                 $newHashPassword = $hashPass;
//                 $stmt = $conn->prepare("UPDATE user_exemplu.users SET password=? WHERE email=?");
//                 $stmt->bind_param('ss', $newHashPassword,$email);
//                 $stmt->execute();
//                 if($stmt->execute()){
//                     $stmt->close();
//                     $status = true;
//                     $message[] = 'Updated succesfully.';
//                 }else{
//                     $status = false;
//                     $message[] =  'There was a problem at updating your password.';
//                 }

//             }else{
//                 $status = false;
//                 $message[] = "Your password's don't match."; 
    
//             }
//     }else{
//         $status = false;
//         $message[] = 'Your token is not correct. Please check again.'; 
//     }
// }else{
//         $status = false;
//         $message[] = 'Your token input can not be empty.';    
// }
// }
// }
// echo json_encode(
//     array(
//         'status' => $status,
//         'message' => $message
//     )
// );
?>