<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img class="backImg" src="images/backImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="images/backImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>

          <form action="./phpQueries/getLoginInfo.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="getUsername" id="getUsername" placeholder="Enter your username" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="getPassword" id="getPassword" placeholder="Enter your password" required>
              </div>
              <div id="invalidCred" style="color:red;font-size:14px;visibility:hidden;display:none">Incorrect username or password</div>
              <div class="text"><a href="./resetPassword.php">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div id="accountCreated" style="color:green;font-size:14px;visibility:hidden;display:none">Account created successfully</div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
        <?php
        include './verify.php';
        ?>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
          
          <form action="./phpQueries/createUser.php" method="post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="cFirstName" id="cFirstName" placeholder="Enter your first name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="cLastName" id="cLastName" placeholder="Enter your last name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="cUsername" id="cUsername" placeholder="Enter your username" required>
              </div>
              <div id="invalidUser" style="color:red;font-size:14px;visibility:hidden">Username already exists.</div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="cPassword" id="cPassword" placeholder="Enter your password" required>
              </div>
              <div id="invalidPass" style="color:red;font-size:14px;visibility:hidden;display:none">
                <ul class="small text-muted pl-4 mb-0">
                <li>Minimum 8 characters</li>
                <li>At least one special character</li>
                <li>At least one uppercase letter</li>
                <li>At least one lowercase letter</li>
                <li>At least one number</li></div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="cConPassword" id="cConPassword" placeholder="Confirm your password" required>
              </div>
              <div id="invalidPassword" style="color:red;font-size:14px;visibility:hidden">Passwords do not match.</div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="cEmail" id="cEmail" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-phone"></i>
                <input type="number" name="cPhone" id="cPhone" placeholder="Enter your phone number" required>
              </div>
              <div class="button input-box instantFlip">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>