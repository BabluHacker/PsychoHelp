<?php
session_start();
//$state =  trim($_SESSION["state"]);
if(isset( $_SESSION["state"])){
    echo "<script>alert('aaaa')</script>";
    if($_SESSION["admin"] == 1){
        header("Location: /psychohelp/profile/access/user_profile_admin.php");
    }
    else{
        header("Location: /psychohelp/profile/access/user_profile.php");
    }


    exit();
    // echo "<script> window.location.replace('http://localhost:63342/psycho_help/index.html')</script>";

}

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1>


    <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

<script type ="text/javascript" src="js/registration_login.js">
</script>
  <style>
      .bText{
          font-family: "Harrington", Times, serif;
          font-size: 1.5em;
          font-weight: bold;
          color: #a0b3b0;
      }
  </style>
</head>

<body>
<form action="/psychohelp">
  <center>
  <button  class="button button-pblock"/>Home</button>
  </center>
</form>
  <div class="form" >
      	  <h1>Register or login to Experience our Services.</h1>


      <ul class="tab-group">

        <li class="tab "><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Sign In</a></li>


      </ul>
      
      <div class="tab-content">
          <div id="login">
              <h1>Welcome Back!</h1>

              <form onsubmit="return false" id="loginform" method="post">

                  <div class="field-wrap">
                      <label>
                          Email Address<span class="req">*</span>
                      </label>
                      <input type="email" id="lemail" required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                      <label>
                          Password<span class="req">*</span>
                      </label>
                      <input type="password" id="lpassword" required autocomplete="off"/>
                  </div>

                  <p class="forgot"><a href="#">Forgot Password?</a></p>

                  <button onclick="validate()" class="button button-block"/>Log In</button>

              </form>

          </div>
        <div id="signup">   
	
          <h1>Please Register if you don't have an account</h1>
          
          <form id="myform" >
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input id="fname" type="text" required autocomplete="off" />
            </div>

        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"  id="lname" required autocomplete="off"/>
            </div>

          </div>



          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"  id="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password  <span class="req">*</span>
            </label>
            <input type="password"  id="password" required autocomplete="off"/>
          </div>
          <div class="field-wrap">

              <span class="req"></span>
              <p class="bText">  Male<input type="radio" style = "width : 20px ; height: 20px; background-color: lightgreen;"
                     value="male" id="male" name="gen">
              </p>
              <p class="bText">  Female<br> <input type="radio" style = "width : 20px ; height: 20px; background-color: lightgreen" value="female"  id="female" name="gen">
              </p>
          </div>
          <div>

              <p  id="err_msg"/>
          </div>
          <button type="submit" onclick="loadvalue()" class="button button-block"  />Get Started</button>
          
          </form>

        </div>
        



        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
