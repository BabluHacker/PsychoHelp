<?php
session_start();
//$state =  trim($_SESSION["state"]);
if(!isset( $_SESSION["state"])){
    echo "<script>alert('aaaa')</script>";
   header("Location: /psychohelp");
    exit();
   // echo "<script> window.location.replace('http://localhost:63342/psycho_help/index.html')</script>";

}

?>
<!DOCTYPE html>
<html>
<head>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type ="text/javascript">
      $(document).ready(function() {

          var email = localStorage.getItem("email");
          var fname = localStorage.getItem("fname");
          var lname = localStorage.getItem("lname");
          var msg = "Hello " + fname;
          document.getElementById("user").innerHTML = msg;
      });
  </script>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.91);
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: rgba(218, 245, 255, 0.14);
        }

        .active {
            background-color: rgba(84, 159, 160, 0.82);
        }
    </style>

</head>

<title>logged in page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">
<ul>
    <li><a href="/psychohelp/index.html">Home</a></li>
    <li><a class="active" href="/psychohelp/profile/access/user_profile.php">Profile</a></li>
    <li><a  href="../access/logout.php">Logout</a></li>
</ul>
<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-black w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
      <h1 id="user"></h1>
      <h1>Take any help</h1>
    </div>
    <div class="w3-padding-10">
      <a href="../easyappointments/index.php" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16">Take an appointment</a>
      <a href="/psychohelp/chat" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16">Start Chat</a>
      <a href="/psychohelp/profile/selfhelp/selfhelp.html" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">Self help</a>

        <a href="#" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">Judge your mental strength.</a>

        <select name="forma" onchange="location = this.value;">
            <option value="#" selected="selected">Select</option>
            <option value="../quiz/quiz_view.html">Quiz on Anxiety</option>
            <option value="../quiz/quix_view_depression.html">Quiz on Depression</option>
        </select>



    </div>
  </div>
  <div class="w3-half w3-blue-grey w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <h1>How to start</h1>

      <div class="w3-left-align w3-padding-large">
        <p>If you love to read and want to help yourself, you can start with <a href="#">self help</a> where you will find some potential
          instructions to help you. There are three stage .....</p>
        <p>If you want a counselling session, take a <a href="#">appointment</a> and start <a href="#">chat</a> in scheduled time.
        </p>
        <p>You can judge your current mental strength at any time from <a href="#">his quiz</a>.
        </p>
      </div>
    </div>
  </div>
</div>

</body>
</html>

