<h2> Exercise 12 </h2> 
      
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

$timeval = $_SESSION['timeval'];
if($timeval == 130)
      {
        $random_group4_ex3 = $_SESSION['random_group4_ex3'];
        $ex = $random_group4_ex3;
      }

$sql = "SELECT * FROM user_exemplu.images WHERE id=$ex;";
$result = mysqli_query($aVar,$sql) or die( mysqli_error($aVar));
while($row = mysqli_fetch_array($result))
  {
    echo $row["path"];
  }

?>
">

<div class="exercise_info">
<?php
$sql = "SELECT * FROM user_exemplu.images WHERE id=$ex;";
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
<button class="button3" id="getTxt12">NEXT EXERCISE</button>


</div>
