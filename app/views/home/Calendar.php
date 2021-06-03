<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Calendar.css">
    <title>Calendar</title>
</head>
<body>
  <div class="start-calendar">
  <ul class="menu">
    <li><img class="logo"src="/../public/images/LOGO.png" alt="LOGO"> </li>
    <li><a href="/app/views/home/Profil.php">Your profile</a></li>
    <li><a href="/app/views/home/Generator.php">Start workout</a></li>
    <li><a href="/app/views/home/Informations.php">Informations</a></li>
    <li><a href="/app/views/home/Statistics.php">Statistics</a></li>
    <li><a href="/app/views/home/Calendar.php">Calendar</a></li>
    <li><a href="/app/views/home/Start.php">Logout</a></li>
  </ul>

<div class="calendar">
      <div class="container">

        <div class="calendar-base">
      
          <div class="year">2021</div>

          <div class="triangle-left"></div>

          <div class="triangle-right"></div>

      
          <div class="months">
            <span class="month-hover">Jan</span>
            <span class="month-hover">Feb</span> 
            <span class="month-hover">Mar</span> 
            <strong class="month-color">Apr</strong>
            <span class="month-hover">May</span>
            <span class="month-hover">Jun</span>
            <span class="month-hover">July</span> 
            <span class="month-hover">Aug</span> 
            <span class="month-hover">Sep</span> 
            <span class="month-hover">Oct</span> 
            <span class="month-hover">Nov</span> 
            <span class="month-hover">Dec</span>
          </div>
          <hr class="month-line" />
      
          <div class="days">SUN MON TUE WED THU FRI SAT</div>
          
      
          <div class="num-dates">
      
            <div class="first-week"><span class="grey">26 27 28 29 30 31</span> 01</div>
         
            <div class="second-week">02 03 04 05 06 07 08</div>
           
            <div class="third-week"> 09 10 11 12 13 14 15</div>
           
            <div class="fourth-week"> 16 17 18 19 20 21 22</div>
            
            <div class="fifth-week"> 23 24 25 26 <strong class="white">27</strong> 28 29</div>
            
            <div class="sixth-week"> 30 <span class="grey">01 02 03 04 05 06</span></div>
          
          </div>
         
          <div class="event-indicator"></div>
   
          <div class="active-day"></div>
        
          <div class="event-indicator two"></div>
         
      
        </div>
       
        <div class="calendar-left">
      
          <div class="hamburger">
            <div class="burger-line"></div>
         
            <div class="burger-line"></div>
           
            <div class="burger-line"></div>
          
          </div>
     
      
      
          <div class="num-date">27</div>
     
          <div class="day">THURSDAY</div>
      
          <div class="current-events">Current Events
            <br/>
            <ul>
              <li>Workout Day!</li>
            </ul>
            <span class="posts">See post events</span></div>
       
      
          <div class="create-event">Create an Event</div>
       
          <hr class="event-line" />
          <div class="add-event"><span class="add">+</span></div>

      
        </div>

      </div>
</div>
    </div>  
</body>
</html>