<?php
/**
 * Created by PhpStorm.
 * User: mehedi
 * Date: 4/24/17
 * Time: 10:29 PM
 */
session_start();
if(!isset($_SESSION['username'])){
?>
    <html>
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PsychoHelp : Online Couseling</title>

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
        <link id="switcher" href="../css/themes/black-theme.css" rel="stylesheet">
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
        <link rel = "stylesheet" type="text/css" href="chat.css">

        <script src="http://code.jquery.com/jquery-1.9.0.js"></script>

    </head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body>

    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
        <!-- BEGIN MENU -->
        <div class="menu_area">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- LOGO -->
                        <!-- TEXT BASED LOGO -->
                        <a class="navbar-brand" href="/psychohelp"><i class="fa fa-heartbeat"></i>Psycho <span>Help</span></a>
                        <!-- IMG BASED LOGO  -->
                        <!--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>   -->
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                            <li ><a href="/psychohelp">Home</a></li>
                            <li><a href="/psychohelp/ps-features">Features</a></li>
                            <li><a href="/psychohelp/ps-aboutus">About Us</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="fa fa-angle-down"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="active"><a href="../chat">Online Counselling</a></li>
                                    <li><a href="/psychohelp/ps-assessment">Take Assessment</a></li>
                                    <li><a href="#">Self Help</a></li>
                                </ul>
                            </li>
                            <!--<li><a href="gallery.html">Gallery</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <span class="fa fa-angle-down"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="blog-archive.html">Blog Archive</a></li>
                                <li><a href="blog-archive-with-left-sidebar.html">Blog Archive with Left Sidebar</a></li>
                                <li><a href="blog-archive-with-right-sidebar.html">Blog Archive with Right Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="blog-single-with-left-sidebar.html">Blog Single with Left Sidebar</a></li>
                                <li><a href="blog-single-with-right-sidebar.html">Blog Single with Right Sidebar</a></li>
                              </ul>
                            </li>-->

                            <!--<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Page <span class="fa fa-angle-down"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="#">Link Two</a></li>
                                <li><a href="#">Link Three</a></li>
                              </ul>
                            </li>-->
                            <li><a href="/psychohelp/ps-contact">Contact</a></li>
                            <?php
                            $user;

                            if(!isset( $_SESSION["state"])){
                                $user = "<a href='/psychohelp/profile'><strong>Login</strong></a>";
                            }
                            else{

                                $user = "<a href='/psychohelp/profile' style='color: #00CC00;'><strong>".$_SESSION["fname"]."</strong></a>";
                            }
                            ?>
                            <li><?php echo $user ?></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
        </div>
        <!-- END MENU -->
    </header>
    <!--=========== END HEADER SECTION ================-->

    <section id="blogArchive">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="blog-breadcrumbs-area">
                    <div class="container">
                        <div class="blog-breadcrumbs-left">
                            <h2>Service</h2>
                        </div>
                        <div class="blog-breadcrumbs-right">
                            <ol class="breadcrumb">
                                <li>You are here</li>
                                <li><a href="#">Home</a></li>
                                <li class="active">Online Counselling</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="service-area">
                        <!-- Start Service Title -->
                        <div class="section-heading">
                            <h2>Login</h2>
                            <div class="line"></div>
                        </div>
                        <!-- Start Service Content -->
                        <div class="service-content">
                            <form name="form2" action="login.php" method="post">
                                <table border="1" align="center">
                                    <tr>
                                        <td> Username: </td>
                                        <td><input type="text" name="username"></td>
                                    </tr>
                                    <tr>
                                        <td> Password: </td>
                                        <td><input type="password" name="password"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><input type="submit" name="submit" value="Login"> </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><a href="register.php"> Register Here to get an Account </a></td>
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




<?php
    exit;
    }


?>

<html>
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>psychoHelp : Chat</title>

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
    <link id="switcher" href="../css/themes/black-theme.css" rel="stylesheet">
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
    <link rel = "stylesheet" type="text/css" href="chat.css">

    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script>
        function submitchat() {
            if( form1.msg.value == ''){
                alert("Enter Your Message");
                return;
            }


            $('#imageload').show();


            var msg = form1.msg.value;



            var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function () {
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
                    $('#imageload').hide();
                }
            }
            xmlhttp.open('GET', 'insert.php?&msg='+msg, true);
            xmlhttp.send();

            var frm = document.getElementsByName('form1')[0];

            frm.reset();  // Reset

        }

        $(document).ready(function(e){
           $.ajaxSetup({cache:false});
           setInterval(function () {$('#chatlogs').load('logs.php');}, 200);
           setInterval(function () {$('#userList').load('activeuser.php');}, 200);
        });
    </script>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<body>

<!-- END PRELOADER -->

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->
<header id="header">
    <!-- BEGIN MENU -->
    <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <a class="navbar-brand" href="/psychohelp"><i class="fa fa-heartbeat"></i>Psycho <span>Help</span></a>
                    <!-- IMG BASED LOGO  -->
                    <!--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>   -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li ><a href="/psychohelp">Home</a></li>
                        <li><a href="/psychohelp/ps-features">Features</a></li>
                        <li><a href="/psychohelp/ps-aboutus">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="active"><a href="/psychohelp/chat">Online Counselling</a></li>
                                <li><a href="/psychohelp/ps-assessment">Take Assessment</a></li>
                                <li><a href="/psychohelp/profile">Self Help</a></li>
                            </ul>
                        </li>
                        <!--<li><a href="gallery.html">Gallery</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <span class="fa fa-angle-down"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="blog-archive.html">Blog Archive</a></li>
                            <li><a href="blog-archive-with-left-sidebar.html">Blog Archive with Left Sidebar</a></li>
                            <li><a href="blog-archive-with-right-sidebar.html">Blog Archive with Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                            <li><a href="blog-single-with-left-sidebar.html">Blog Single with Left Sidebar</a></li>
                            <li><a href="blog-single-with-right-sidebar.html">Blog Single with Right Sidebar</a></li>
                          </ul>
                        </li>-->

                        <!--<li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Page <span class="fa fa-angle-down"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="#">Link Two</a></li>
                            <li><a href="#">Link Three</a></li>
                          </ul>
                        </li>-->
                        <li><a href="/psychohelp/contact.html">Contact</a></li>
                        <?php
                        $user;

                        if(!isset( $_SESSION["state"])){
                            $user = "<a href='/psychohelp/profile'><strong>Login</strong></a>";
                        }
                        else{

                            $user = "<a href='/psychohelp/profile' style='color: #00CC00;'><strong>".$_SESSION["fname"]."</strong></a>";
                        }
                        ?>
                        <li><?php echo $user ?></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>
    <!-- END MENU -->
</header>
<!--=========== END HEADER SECTION ================-->

<section id="blogArchive">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
                <div class="container">
                    <div class="blog-breadcrumbs-left">
                        <h2>Service</h2>
                    </div>
                    <div class="blog-breadcrumbs-right">
                        <ol class="breadcrumb">
                            <li>You are here</li>
                            <li><a href="#">Home</a></li>
                            <li class="active">Online Counselling</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="service-area">
                    <!-- Start Service Title -->
                    <div class="section-heading">
                        <h2>Online Counselling</h2>
                        <div class="line"></div>
                    </div>
                    <!-- Start Service Content -->
                    <div class="service-content">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="single-footer-widget">
                                <div class="section-heading">
                                    <h2>Users</h2>
                                    <div class="line"></div>
                                </div>
                                <ul class="footer-service">
                                    <li><span class="fa fa-check"></span><div id="userList">No user</div></li>

                                </ul>
                            </div>
                        </div>

                        <form name ="form1">

                            <div align="center">
                                <div id="chatlogs" align="left"  style="height:250px;width:350px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                                    LOADING.... <img src="Loading_icon.gif"/>
                                </div>

                            </div>

                            <table border="1" align="center">

                                <tr>
                                    <td>
                                        <?php
                                            if($_SESSION['username'] == "Admin"){
                                                echo "Your Name: <b style='color: #af0f06'> ".$_SESSION['username']. "</b>  Recipient:<b style='color: #31a22b'>   " .$_SESSION['recipient']."</b><br>";
                                            }
                                            else{
                                                echo "Your Name: <b style='color: #31a22b'> ".$_SESSION['username']. "</b>  Recipient:<b style='color: #af0f06'>   " .$_SESSION['recipient']."</b><br>";
                                            }
                                        ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Your Message:
                                    </td>
                                    <td>
                                        <textarea name="msg" style="width: 200px; height: 70px"></textarea>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="#" onclick="submitchat()" class="button">Send</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="logout.php">Logout</a>
                                    </td>
                                </tr>
                            </table>

                            <div id="imageload" style="display: none;">
                                <img src="Loading_icon.gif"/>
                            </div>

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
