<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Statistics.css">
    <title>Statistics</title>
</head>

<body>

<div class="start_statistics">
    <ul class="menu">
    <li><img class="logo" src="/../public/images/LOGO.png" alt="LOGO"> </li>
    <li class="start"></li>
    <li><a href="/app/views/home/Profil.php">Your profile</a></li>
    <li><a href="/app/views/home/Generator.php">Start workout</a></li>
    <li><a href="/app/views/home/Informations.php">Informations</a></li>
    <li><a href="/app/views/home/Statistics.php">Statistics</a></li>
    <li><a href="/app/views/home/Calendar.php">Calendar</a></li>
    <li><a href="/app/views/home/Login.php">
    <?php require_once("../phpFiles/logOut.php"); ?>
    Logout</a></li>
    </ul>



        <div class="login-box2">
            <h1>STATISTICS</h1>
            <a href="../phpFiles/rssFeed.xml" target="_blank" type="application/rss+xml"><img src="/../public/images/feed-icon.png" class="rss-btn"></a>
            <h2>Top 10 most active users:</h2>
            <ol type="1">
            <?php require_once("../phpFiles/displayTop.php");?>
            </ol>
            <p class="paragraph"> You can see the whole top by downloading it from right here: </p>

            <span class="btn_container">

            <a href="/app/views/home/activeUsers.json" class="button2" download>
            <?php require_once("../phpFiles/generateJson.php");?>
            Download Top Active Users (JSON format)</a>

            <form action="../phpFiles/generatePdf.php"  method="POST" target="_blank"> 
            <button type="submit" class="button2" name="btn_pdf"  > &nbsp;Download Top Active Users (PDF format)&nbsp;&nbsp;</button>
            </form>
           
            </span>

            <h2> Personal Information</h2>

            <div class="enum">
            <?php require_once("../phpFiles/userStatistics.php");?>
            </div>

            <p class="paragraph"> If you want to see how your body looks like right now, we have this tool ready for you: </p>
            <a href="http://www.bmivisualizer.com/" class="button" target="_blank">CLICK HERE</a>
            <a href="https://bodyvisualizer.com/" class="button" target="_blank">CLICK HERE</a>
        </div>
    </div>
</body>

</html>