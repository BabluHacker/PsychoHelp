<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PsychoHelp : Assessment</title>

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
<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
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
                    <a class="navbar-brand" href="../index.php"><i class="fa fa-heartbeat"></i>Psycho <span>Help</span></a>
                    <!-- IMG BASED LOGO  -->
                    <!--  <a class="navbar-brand" hrindex.phphtml"><img src="images/logo.png" alt="logo"></a>   -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li ><a href="../index.php">Home</a></li>
                        <li><a href="../ps-features">Features</a></li>
                        <li ><a href="../ps-aboutus">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="../chat">Online Counseling</a></li>
                                <li class="active"><a href="">Take Assessment</a></li>
                                <li><a href="#">Self Help</a></li>
                            </ul>
                        </li>
                        <!--<li><a href="gallery.html">Gallery</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">News <span class="fa fa-angle-down"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a hrblog1.htmlhtml">Blog Archive</a></li>
                            <li><a hrblog2.htmlhtml">Blog Archive with Left Sidebar</a></li>
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
                        <li><a href="../ps-contact">Contact</a></li>
                        <?php
                        $user;

                        if(!isset( $_SESSION["state"])){
                            $user = "<a href='../profile'><strong>Login</strong></a>";
                        }
                        else{

                            $user = "<a href='../profile' style='color: #00CC00;'><strong>".$_SESSION["fname"]."</strong></a>";
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
                        <h2>Assessment</h2>
                    </div>
                    <div class="blog-breadcrumbs-right">
                        <ol class="breadcrumb">
                            <li>You are here</li>
                            <li><a href="#">Home</a></li>
                            <li class="active">Assessment</li>
                        </ol>
                    </div>

                </div>

            </div>
        </div>
    </div>

</section>

<div class="col-lg-12 col-md-12">
    <div class="meetDoctors-area">
        <div class="section-heading">
            <h2>কেন এই সার্ভিস</h2>
            <div class="line"></div>
        </div>
        <p> সাম্প্রতিক একটি তথ্য থেকে পাওয়া গেছে বাংলাদেশের ১৬% মানুষ মানুষিক সমস্যায় ভুগছেন (NIMH)। বাংলাদেশ এ বিগত ২০ বছর যাবত মানুষিক সমস্যার জন্যে সাইকোথেরাপি দেয়া যাচ্ছে।

            প্রতিদিন হাজার সমস্যা নিয়ে সারাদেশ থেকে অসংখ্য মানুষ চিকিৎসা নেবার জন্যে তাদের শরণাপন্ন হন। যেহেতু এখন পর্যন্ত অথিকাংশ মনোবৈজ্ঞানিক স্বাস্থ্য সেবা শুধুমাত্র ঢাকা কেন্দ্রিক তাই সারা দেশে বর্তমানে যখন ৭০ লক্ষ মানুষ মানুষিক স্বাস্থ্য সমস্যায়(প্রথম আলো ) ভুগছেন কিন্তু তাদের জন্যে এই পেশাদার  মনোবৈজ্ঞানিক সেবা দেয়া সম্ভবপর হচ্ছে না। যেহেতু বাংলাদেশ বিজ্ঞানের অগ্রযাত্রায় শামিল হয়ে তথ্যপ্রযুক্তির ব্যাবহারে অনেকটাই অগ্রগামী হয়েছে, যার ফলে বর্তমানে প্রায়  ১৪.৪ %  মানুষ প্রতিদিন ইন্টারনেট ব্যাবহার করেন, সরাসরি চিকিৎসা সেবা সমান না হলেও অনেকটাই সমস্যার সমাধানে কাজ করছে বলে উন্নত বিশ্বে পাওয়া গিয়েছে। এই বিষয়টিকে মাথায় রেখে আমরা মাতৃ ভাষায় সার্ভিসটি চালু করার প্রয়াস নিয়েছি।

        </p>

    </div>
</div>

<!--=========== BEGAIN Doctors SECTION ================-->
<section id="meetDoctors">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="meetDoctors-area">
                    <!-- Start Service Title -->
                    <div class="section-heading">
                        <h2>Take Assessment Please</h2>
                        <div class="line"></div>
                    </div>
                    <div align="center" class="doctors-area">
                        <ul class="doctors-nav">
                            <li>
                                <div class="single-doctor">
                                    <a class="tdoctor" href="../profile/quiz/quiz_view.html" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                                        <figure>
                                            <img src="../images/anx-re.jpg" />
                                            <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                                            <figcaption>
                                                <h2>Assessment on Anxiety</h2>
                                                <p>To know click</p>
                                                <button>Take</button>
                                            </figcaption>
                                        </figure>
                                    </a>
                                    <a class="tdoctor" href="../ps-anxiety" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                                        <figure>
                                            <img src="../images/anx-re.jpg" />
                                            <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                                            <figcaption>
                                                <h2 style="color: #ff8e1b">To Know ABout Anxiety</h2>
                                                <button>Click</button>
                                            </figcaption>
                                        </figure>
                                    </a>

                                </div>
                            </li>
                            <li>
                                <div class="single-doctor">
                                    <div class="single-doctor">
                                        <a class="tdoctor" href="../profile/quiz/quix_view_depression.html" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                                            <figure>
                                                <img src="../images/dpre-re.jpg" />
                                                <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                                                <figcaption>
                                                    <h2>Assessment on Depression</h2>
                                                    <p>To know click</p>
                                                    <button>Take</button>

                                                </figcaption>


                                            </figure>
                                        </a>
                                        <a class="tdoctor" href="../ps-depression" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                                            <figure>
                                                <img src="../images/dpre-re.jpg" />
                                                <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                                                <figcaption>

                                                    <h2 style="color: #ff8e1b">To Know ABout Depression</h2>
                                                    <button>Click</button>

                                                </figcaption>


                                            </figure>
                                        </a>

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== End Doctors SECTION ================-->


<!--=========== Start Footer SECTION ================-->
<footer id="footer">
    <!-- Start Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-widget">
                        <div class="section-heading">
                            <h2>disclaimer</h2>
                            <div class="line"></div>
                        </div>
                        <p> This web-based service is part of a research of the team. When you proceed for assessment and intervention with registration then they will be corresponding with you. Please note that once you registrar to a section of the web-site you are consenting to be part of the research. All personal information will be strictly confidential and will not be used other than this service related research. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-widget">
                        <div class="section-heading">
                            <h2>Our Service</h2>
                            <div class="line"></div>
                        </div>
                        <ul class="footer-service">
                            <li><a href="#"><span class="fa fa-check"></span>Online Counseling</a></li>
                            <li><a href="#"><span class="fa fa-check"></span>Self Help</a></li>
                            <li><a href="#"><span class="fa fa-check"></span>Assessment on Mental Health</a></li>
                            <li><a href="#"><span class="fa fa-check"></span>Face to Face Counseling</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-widget">
                        <div class="section-heading">
                            <h2>Tags</h2>
                            <div class="line"></div>
                        </div>
                        <ul class="tag-nav">
                            <li><a href="#">University of Dhaka</a></li>
                            <li><a href="#">CSEDU</a></li>
                            <li><a href="#">Clinical Psyhology Department</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="single-footer-widget">
                        <div class="section-heading">
                            <h2>Developed By</h2>
                            <div class="line"></div>
                        </div>
                        <h4><strong>Team Sanguine</strong></h4>
                        <p>Mehedi Hasan<br>Abida Sultana</p>
                        <address class="contact-info">
                            <p><span class="fa fa-home"></span>Department of Computer Science & Engineering, University of Dhaka</p>
                            <p><span class="fa fa-phone"></span>000001111122222</p>
                            <p><span class="fa fa-envelope"></span>psychohelp@gmail.com</p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Middle -->
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-copyright">
                        <p>&copy; Copyright 2017 <a href="../index.php">Psycho Help</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-social">
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Design & Developed By <a rel="nofollow" href="http://www.wpfreeware.com/"></a>Team Sanguine, CSEDU</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=========== End Footer SECTION ================-->

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