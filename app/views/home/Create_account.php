<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/Create_account.css">
    <title>Create account</title>
</head>
<body>

    <div class="start_create">

        <div class="login-box2">
    
    <h2>Create account</h2>

    <form action="../phpFiles/config_create_account.php" method="POST" id="myForm">

    <div class="container">
    <div class="row">
    
      <div class="user-box">
      
        <input type="text" name="username" id="username" required>
        <label for="username"> Username</label>
      </div>

    <div class="user-box">
   
        <input type="text" name="email" id="email" required>
        <label for="email">Email</label>
      </div>

      <div class="user-box">
      
        <input type="number" name="age" id="age" required>
        <label for="age">Age</label>
      </div>

      <div class="user-box">
      
        <input type="number"  name="height" id="height" required>
        <label for="height">Height (ex: 189cm)</label>
      </div>

      <div class="user-box">
      
        <input type="number" name="weight"  id="weight" required>
        <label for="weight">Weight (ex: 57kg)</label>
      </div>

      <div class="user-box">
     
        <input type="password" name="password" id="password" required>
        <label for="password"> Password</label>
      </div>

      <div class= "error-message" id="error-message">
    <p> Error message</p>
    </div>

    <div id="radios1">
        <p> Gender:
        <select name="gender" id="gender">
        <option selected disabled> Choose an option </option>
        <option value="female"> Female </option>
        <option value="male"> Male </option>
        </select>
        </p>
       </div>

      <div id="radios2" >
        <p> I want to:
        <select name="want" id="want">
        <option selected disabled> Choose an option </option>
        <option value="lose_weight"> Lose weight </option>
        <option value="get_toned"> Get toned </option>
        <option value="build_muscles"> Build muscles </option>
        </select>
        </p>
       </div>

              
       <div id="radios3">
          <p>Choose what's your focus part:
          <select name="focus_part" id="focus_part">
          <option selected disabled> Choose an option </option>
          <option value="arms"> Arms </option>
          <option value="abs"> Abs </option>
          <option value="butt"> Butt </option>
          <option value="legs"> Legs </option>
          </select>
          </p>
        </div>

 <div id="terms">
   <label>
   <input type="checkbox" class="option-input-checkbox" required/>
    I agree to the processing of my personal data.  I agree with the terms and <br> conditions. 
   </label>
 </div>

  <div class="signUpBtn">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    <button class ="buttonSubmit"  id="create" type="submit"> SIGN UP </button>
    </div>
    
        
    
        <p> You have an account?</p>
    
            <a href="/app/views/home/Login.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login
              </a>
    </div>
    </div>
    </form>
    <script src = "/app/views/home/JavaScriptFiles/signupAjaxCall.js"></script> 
    </div>
    </div>

</body>
</html>