<?php 

session_start();
$host="localhost";
$user="root";
$password="";
$db="images";
$aVar=mysqli_connect($host,$user,$password);
mysqli_select_db($aVar,'user_exemplu');


if(isset($_POST['submit']))
{
    $select1 = $_POST['group1'];
    echo $select1;
}



/*
$sql = "SELECT * FROM user_exemplu.images WHERE id='2';";
$result = mysqli_query($aVar,$sql) or die( mysqli_error($aVar));
while($row = mysqli_fetch_array($result))
  {
    echo $row["path"];
  }

?>
*/


?>