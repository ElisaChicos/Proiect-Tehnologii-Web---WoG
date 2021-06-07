<?php 
$to = "client@example.com"; 
$subject = "subject of maik"; 
$txt = "Hello Sir"; 
$headers = "From: website@example.com" . "\r\n" . 
"CC: user2@example.com"; 
mail($to,$subject,$txt,$headers); 
?> 