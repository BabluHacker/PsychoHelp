<?php
session_start();
//$state =  trim($_SESSION["state"]);
if(!isset( $_SESSION["state"])){
    //echo "<script>alert('aaaa')</script>";
    header("Location: /psycho_help/profile/index.html");
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

</head>

<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
    <div class="w3-half w3-black w3-container w3-center" style="height:700px">
        <div class="w3-padding-64">
            <h1 id="user"></h1>
            <h1>You are the admin</h1>
        </div>
        <div class="w3-padding-10">
            <a href="#" class="w3-button w3-black w3-block w3-hover-blue-grey w3-padding-16">Home</a>
            <a href="/psycho_help/profile/easyappointments/index.php" class="w3-button w3-black w3-block w3-hover-teal w3-padding-16">View yours appointment</a>
            <a href="#" class="w3-button w3-black w3-block w3-hover-dark-grey w3-padding-16">Start Chat</a>
            <a href="/psycho_help/profile/quiz/quiz.php" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">Set quiz</a>
            <a href="/psycho_help/profile/access/statistics_registered.php" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">View the data of registered user</a>

            <a href="/psycho_help/profile/access/statistics_all.php" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">View the data of all user</a>
            <a href="/psycho_help/profile/access/logout.php" class="w3-button w3-black w3-block w3-hover-brown w3-padding-16">Logout</a>




        </div>
    </div>
    <div class="w3-half w3-blue-grey w3-container" style="height:700px">
        <div class="w3-padding-64 w3-center">
            <h1>How to start</h1>

            <div class="w3-left-align w3-padding-large">
                <p>You can set quiz from  <a href="/psycho_help/profile/quiz/quiz.php">here</a> where you will find some potential
                    instructions to help you. There are three stage .....</p>
                <p>If you want to counselling session, login <a href="/psycho_help/profile/easyappointments/index.php">here</a> and start <a href="#">chat</a> in scheduled time.
                </p>

            </div>
        </div>
    </div>
</div>

</body>
</html>

