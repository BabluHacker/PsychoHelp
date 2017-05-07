<?php
session_start();
//$state =  trim($_SESSION["state"]);
if(!isset( $_SESSION["state"])){
   header("Location: /psychohelp");
    exit();
   // echo "<script> window.location.replace('http://localhost:63342/psycho_help/index.html')</script>";

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <link href="/style.css" rel="stylesheet">
    <link id="switcher" href="/css/themes/black-theme.css" rel="stylesheet">

</head>

<title>User Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">
<ul>
    <li><a href="/psychohelp">Home</a></li>
    <li><a class="active" href="/psychohelp/profile/access/user_profile.php">Profile</a></li>
    <li><a  href="../access/logout.php">Logout</a></li>
</ul>
<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-black w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
      <h1 id="user"></h1>
      <h1>যেকোনো সাহায্য গ্রহণ করুন </h1>
    </div>
    <div class="w3-padding-10">
      <a href="../easyappointments/index.php" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16">এপয়েন্টমেন্ট (অনলাইন কাউন্সেলিং)</a>
      <a href="/psychohelp/chat" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16">অনলাইন কাউন্সেলিং</a>
      <a href="/psychohelp/profile/selfhelp/selfhelp.html" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">নিজেকে নিজে সাহায্য করি</a>

        <a href="#" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">এসেসমেন্ট </a>

        <div class="appointment-area">
            <select class="wp-form-control wpcf7-select" name="forma" onchange="location = this.value;">
                <option value="#" selected="selected">সিলেক্ট করুন</option>
                <option value="../quiz/quiz_view.html">এসেসমেন্ট উদ্বেগ</option>
                <option value="../quiz/quix_view_depression.html">এসেসমেন্ট হতাশা</option>
            </select>
        </div>



    </div>
  </div>
  <div class="w3-half w3-blue-grey w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <h1>How to start</h1>

      <div class="w3-left-align w3-padding-large">
        <p>আপনি কি নিজেকে নিজেই সাহায্য করতে চান? আপনি যদি পড়তে ভালবাসেন, শুরু করুন<a href="#"> "নিনিজেকে নিজে সাহায্য করি"</a> এখানে আপনি পাবেন আপনার জন্যে তৈরি করা কিছু উপকারী  নির্দেশনা
           </p>
          </br>
        <p>যদি আপনি অনলাইন কাউন্সেলিং সেশন চান, এবং সেই সময় অনুযায়ী চ্যাট বক্স এ অনলাইন সেবা গ্রহণ করুন <a href="#">এপয়েন্টমেন্ট </a> সেই সময় অনুযায়ী <a href="#">চ্যাট বক্স </a> এ অনলাইন সেবা গ্রহণ করুন.
        </p>
          </br>
        <p>আপনার বর্তমান মানুসিক অবস্থা জানতে<a href="#">এসেসমেন্ট</a> এ অংশ নিন।
        </p>
      </div>
    </div>
  </div>
</div>

</body>
</html>

