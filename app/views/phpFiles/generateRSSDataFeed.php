<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="users";
$aVar=mysqli_connect($host,$user,$password);
$email = $_SESSION['email'];
$query = "SELECT * FROM user_exemplu.users where email = '$email';";
$publish_Date = strtotime("today");
$result = mysqli_query($aVar,$query) or die( mysqli_error($aVar));
while($row = mysqli_fetch_array($result)){
        $id = $row["id"];
        $weight = $row["old_weight"] - $row["weight"];
}
    $items = array(
        array("title"       => "Number in top active users:",
              "description" => "You are number " . $id . " in top most active users.",
              "link"        => "/app/views/home/Statistics.php",
              "pubDate"     => date("Y-m-d h:i:sa", $publish_Date))
        , array("title"       => "Workout days/week:",
                "description" => "?",
                "link"        => "/app/views/home/Statistics.php",
                "pubDate"     => date("Y-m-d h:i:sa", $publish_Date))
        , array("title"       => "Workout days/month:",
                "description" => "?",
                "link"        => "/app/views/home/Statistics.php",
                "pubDate"     => date("Y-m-d h:i:sa", $publish_Date))
        , array("title"       => "Weight loss:",
                "description" => "You have with " . $weight . " kg less.",
                "link"        => "/app/views/home/Statistics.php",
                "pubDate"     => date("Y-m-d h:i:sa", $publish_Date))
    );

    $output = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $output .= '<rss version="2.0">';
    $output .= "<channel>";
    $output .= "<title>Statistics Update | RSS</title>";
    $output .= "<description>New update on statistics</description>";
    $output .= "<link>/app/views/home/Statistics.php</link>";
    $output .= "<language>en-us</language>";
    $output .= "<category>Statistics</category>";

    foreach ($items as $item) {
        $output .= "<item>";
        $output .= "<title>" . $item["title"] . "</title>";
        $output .= "<description>" . $item["description"] . "</description>";
        $output .= "<link>" . $item["link"] . "</link>";
        $output .= "<pubDate>" . date("Y-m-d h:i:sa", $publish_Date) . "</pubDate>";
        $output .= "</item>";
    }
    $output .= "</channel>";
    $output .= "</rss>";
 
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");
  
 
    $filename = 'rssFeed.xml';
            if(file_put_contents($filename, $output)){
                echo '';
            }else{
                echo 'There is a error.';
            }
?>