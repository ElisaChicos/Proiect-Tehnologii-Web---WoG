<?php 

function getRssData(){
header('Content-type: application/rss+xml; charset=ISO-8859-1'); 

$aVar = mysqli_connect("localhost","root","","user_exemplu");

echo "<rss version='2.0' xmlns:atom='http://www.w3.org/2005/Atom'>\n";
echo "<channel>\n";

echo "<title>RSS Feed For Your Informations</title>\n";
echo "<description>Here are your personal informations and statistics</description>\n";

$email = ($_SESSION['message']);
$query = "SELECT * FROM user_exemplu.users where email = '$email';";
$result = mysqli_query($aVar,$query) or die( mysqli_error($aVar));

while($row = mysqli_fetch_array($result)) {
      echo "<item>\n";
         echo "<title> Number in top: </title>\n";
         echo "<description>" . $row["id"] . "</description>\n";
         echo "<title> Workout days/week: </title>\n";
         echo "<description>" . $row["gender"] . "</description>\n";
         echo "<title> Workout days/month: </title>\n";
         echo "<description>" . $row["want"] . "</description>\n";
         echo "<title> Kg less: </title>\n";
         echo "<description>" . ($row["old_weight"] - $row["weight"]) . "</description>\n";
     echo "</item>\n";
}

echo "</channel>\n";
echo "</rss>\n";
}

            $filename = 'userStatisticsRSS.xml';
            if(file_put_contents($filename, getRssData())){
                echo '';
            }else{
                echo 'There is a error.';
            }
?>