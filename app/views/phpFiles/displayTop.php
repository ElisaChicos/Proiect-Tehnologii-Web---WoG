<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="users";

$aVar=mysqli_connect($host,$user,$password);
mysqli_select_db($aVar,'user_exemplu');

$sql = "SELECT * FROM user_exemplu.users ORDER BY username DESC LIMIT 10;";
$result = mysqli_query($aVar,$sql) or die( mysqli_error($aVar));

while($row = mysqli_fetch_array($result))
  {
    echo "<li class=\"enum\">" . $row["username"] . "</li>";
  }

?>