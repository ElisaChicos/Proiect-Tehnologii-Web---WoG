<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Login.css">
    <title>Login</title>
</head>
<body>
  <div class="start_login">
    <div class="login-box2">

<h2>Login</h2>

<form method = "POST" id = "myForm" action="../phpFiles/loginIntoAccount.php" >

<div class="user-box">
    <input type="text" name="email" id = "email" placeholder="" value="" required>
    <label id="emailId">Email</label>
  </div>

  <div class="user-box">
  <svg class="close" viewBox="0 0 100 100">
		<path id="top-eye-part" d="M10,50 Q50,-10 90,50" fill="none" stroke-width="5"></path>
		<path id="bottom-eye-part" d="M10,50 Q50,110 90,50" fill="none" stroke-width="5"></path>
		<circle cx="50" cy="50" r="10" fill="black"></circle>
	  </svg>
  
    <input type="password" name="password" id = "password" value="" placeholder="" required>
    <label>Password</label>
    </div>

    <div class= "error-message" id="error-message">
    <p> Error message</p>
    </div>

    <div>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    <button class ="buttonSubmit" id="btn" type="submit" > LOGIN </button>
    </div>

    <div class="forgot_pass">
      <a href="/app/views/home/Reset_password.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Forgot your password?
      </a>
    </div>


    <p>First time here? </p>

    <a href="/app/views/home/Create_account.php">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Create account
    </a>

        
</form>
<script src= "/app/views/home/JavaScriptFiles/showPassword.js"></script> 
<script >
 const form = {
    email: document.getElementById("email"),
    password: document.getElementById("password"),
    submit: document.getElementById("btn"),
    message: document.getElementById("error-message")
};
const formular = document.getElementById("myForm");
function handleForm(event){event.preventDefault();}
formular.addEventListener('submit', handleForm);
form.submit.addEventListener('click', () => {
    var ajax;
    if(window.XMLHttpRequest) { 
       ajax = new XMLHttpRequest();
    } else { 
       ajax = new ActiveXObject("Microsoft.XMLHTTP");
    }

    ajax.onload = () => {
        var response = null;
        try{
            response = JSON.parse(ajax.responseText);
        }catch(e){
            console.error('error at parsing Json');
        }

        if(response){
            getAndHandleResponse(response);
        }

    }
    const requestData = `email=${form.email.value}&password=${form.password.value}`;
    console.log(requestData);
    ajax.open("POST", '../phpFiles/loginIntoAccount.php', true);
    ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ajax.send(requestData);
  });

    function getAndHandleResponse(response){

    if(response.status){
      document.getElementById("error-message").innerHTML = response.message ;
        location.href = '/app/views/home/Profil.php';
    } else {
        document.getElementById("error-message").innerHTML = response.message ;
        form.message.style.color = 'white';
        form.message.style.marginBottom = "30px";
    }
}
</script>
</div>
</div>
 
</body>
</html>
