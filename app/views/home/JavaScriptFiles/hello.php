<h2> Set 2 </h2> 
      
<div class="containerr">
<img class="exercise" src="
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="images";
$aVar=mysqli_connect($host,$user,$password);
mysqli_select_db($aVar,'user_exemplu');
$sql = "SELECT * FROM user_exemplu.images WHERE id='2';";
$result = mysqli_query($aVar,$sql) or die( mysqli_error($aVar));
while($row = mysqli_fetch_array($result))
  {
    echo $row["path"];
  }

?>
">

<div class="exercise_info">
<?php
$sql = "SELECT * FROM user_exemplu.images WHERE id='2';";
$result = mysqli_query($aVar,$sql) or die( mysqli_error($aVar));
while($row = mysqli_fetch_array($result))
  {
    
    echo "<div class=\"title\"> Proper breathing</div> <br>";
    echo "<div class=\"enum\">".$row["breathing_info"] ."</div> <br>";
    echo "<br><br><br><br><br>";
    echo "<div class=\"title\"> Steps</div> <br>";
    echo "<div class=\"enum\">".$row["step1"] ." <br>";
    echo $row["step2"] ."<br>";
    echo $row["step3"] ."<br>";
    echo $row["step4"] ."</div><br>";
    echo "<br><br><br><br><br>";
    echo "<div class=\"title\"> Sets & Reps</div> <br>";
    echo "<div class=\"enum\">".$row["reps"] ."</div><br>";
  }
  
?>

</div>
<button class="button3" id="getTxt2">NEXT EXERCISE</button>


</div>
