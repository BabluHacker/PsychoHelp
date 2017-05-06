<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 4/25/17
 * Time: 1:00 AM
 */
session_start();

if(isset($_POST['submit'])){


    $con=mysqli_connect("localhost","root","","psycho_help");
    $uname = $_POST['username'];
    $pword = $_POST['password'];
    $pword2 = $_POST['password2'];

    if($pword != $pword2){

        echo "Password do not match . <br>";
    }
    else{
        $checkexit = mysqli_query($con, "SELECT username FROM users WHERE username='$uname'");

        if(mysqli_num_rows($checkexit)){
            echo "<center>";
            echo "Username already exists, please select different username";
            echo "</center>";
        }
        else{
            mysqli_query($con, "INSERT INTO users(username, password) VALUES ('$uname', '$pword')");
            echo "<center>";
            echo "Successfully registered. click <a href='index.php'>here</a> to go to start chat<br>";
            echo "</center>";
        }

    }

}

?>

<html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WpF Medinova : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="../images/favicon.ico"/>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Default Theme css file -->
    <link id="switcher" href="../css/themes/green-theme.css" rel="stylesheet">
    <!-- Slick slider css file -->
    <link href="../css/slick.css" rel="stylesheet">
    <!-- Photo Swipe Image Gallery -->
    <link rel='stylesheet prefetch' href='../css/photoswipe.css'>
    <link rel='stylesheet prefetch' href='../css/default-skin.css'>

    <!-- Main structure css file -->
    <link href="../style.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="service-area">
                    <!-- Start Service Title -->
                    <div class="section-heading">
                        <h2>Registration</h2>
                        <div class="line"></div>
                    </div>
                    <!-- Start Service Content -->
                    <div class="service-content">
                        <form name="form1" method="post" action="register.php">
                            <table align="center" border = "1" width="40%">

                                <tr>
                                    <td>
                                        email :
                                    </td>
                                    <td>
                                        <input type="text" name="username">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        password :
                                    </td>
                                    <td>
                                        <input type="password" name="password">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Repeat Password :
                                    </td>
                                    <td>
                                        <input type="password" name="password2">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" onclick="" name="submit" value="Register">

                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== End Service SECTION ================-->

<!-- jQuery Library  -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap default js -->
<script src="../js/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/modernizr.custom.79639.js"></script>
<!-- counter -->
<script src="../js/waypoints.min.js"></script>
<script src="../js/jquery.counterup.min.js"></script>
<!-- Doctors hover effect -->
<script src="../js/snap.svg-min.js"></script>
<script src="../js/hovers.js"></script>
<!-- Photo Swipe Gallery Slider -->
<script src='../js/photoswipe.min.js'></script>
<script src='../js/photoswipe-ui-default.min.js'></script>
<script src="../js/photoswipe-gallery.js"></script>

<!-- Custom JS -->
<script src="../js/custom.js"></script>



</body>

</html>
