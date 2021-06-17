<?php
if(isset($_POST['btnSendMail'])){
$message = "No need to worry, you can reset your WoG password by clicking the link below: 	
If you didn't request a password reset, feel free to delete this email and carry on enjoying your workouts!

All the best,
The WoG Team"; ;


$message = wordwrap($message, 70, "\r\n");

mail('alinaadrianah@gmail.com', 'Reset password for WoG account', $message);
}else{
    echo 'upsi, not send';
}
?>
