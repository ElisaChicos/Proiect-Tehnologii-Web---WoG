<?php 
$to = "alinaadrianah@gmail.com"; 
$subject = "Reset password"; 
$txt = "No need to worry, you can reset your WoG password by clicking the link below: 	
If you didn't request a password reset, feel free to delete this email and carry on enjoying your workouts!

All the best,
The WoG Team"; 
$headers = "From: elisachicos68@gmail.com"; 

if(mail($to,$subject,$txt,$headers))
    echo 'succes';
else
    echo 'not sent';
?>  