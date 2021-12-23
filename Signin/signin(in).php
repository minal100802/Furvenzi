<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="signin(in).css">
  <link rel="shortcut icon" href="../images/logotitle.png" type="image/png"/>
  <title>Sign In</title>
</head>

<body>
  <!-- <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="circle-4"></div> -->
  <div id="login-box">
    <div class="right">
      <h1>Sign In</h1>
      <div>
        <!-- <input type="checkbox" class="btn"> -->
        <div class="btn-group">
          <button onclick="window.location.href='signin(in).php';" class="btn btn-individual">Individual</button>
            <button onclick="window.location.href='signin(en).php';" class="btn btn-enterprise">Enterprise</button>
        </div>
        </div>  
      <form action = "signin(in)(d).php" method = "post">
        <div class="input-box">
          <input class="text" type="text" name="email" placeholder="Enter your email" />
          <input class="number" type="password" name="password" placeholder="Enter your password" />
        </div>
      
            <!-- <button class="social-signin-google"><img class="Gimg"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/768px-Google_%22G%22_Logo.svg.png"></button>
            <button class="social-signin-facebook"><img class="Fimg"
            src="https://1000logos.net/wp-content/uploads/2021/04/Facebook-logo.png"></button>
            <button class="social-signin twitter">Log in with Twitter</button> -->

            <a class="fp-link" name="forgot-pass" href="rp.html">Forgot Password ?</a>
          <input class="submit-button" type="submit" name="signup_submit" value="Sign-In"/>
          <label class="sign-in-link">New to Furvenzi ?<a class="sign-link" href="../Signup/signup(in)1.php">Sign-Up</a></label>
      </div>
      </form>
    <div class="left">
      <div class="lefttxt">
        <h1 class="ltxt">Furvenzi<img class="pawimg"
            src="https://upload.wikimedia.org/wikipedia/commons/1/12/Black_Paw.svg"></h1>
        <h3 class="ptxt">Its All About Pets</h3>
      </div>
      <img class="leftimg"
        src="https://cdn.magnify360.com/client_files/client_5544/3883/24983/images/ec-1-collars2.png">
    </div>
    <!-- <div class="or">OR</div> -->
  </div>
</body>

</html>