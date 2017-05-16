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
    <title>PsychoHelp - Anxiety</title>

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
                    <a class="navbar-brand" href="/psychohelp"><i class="fa fa-heartbeat"></i>Psycho <span>Help</span></a>
                    <!-- IMG BASED LOGO  -->
                    <!--  <a class="navbar-brand" hrindex.phphtml"><img src="images/logo.png" alt="logo"></a>   -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li ><a href="/psychohelp">Home</a></li>
                        <li><a href="../ps-features">Features</a></li>
                        <li ><a href="../ps-aboutus">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="../chat">Online Counselling</a></li>
                                <li class="active"><a href="../ps-assessment">Take Assessment</a></li>
                                <li><a href="../profile">Self Help</a></li>
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


<!--=========== START BLOG SECTION ================-->
<section id="blogArchive">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
                <div class="container">
                    <div class="blog-breadcrumbs-left">
                        <h2>Depression</h2>
                    </div>
                    <div class="blog-breadcrumbs-right">
                        <ol class="breadcrumb">
                            <li>You are here</li>
                            <li><a href="#">Home</a></li>
                            <li class="active">Assessment-Depression</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- Start Blog Archive Area -->
                        <div class="blogArchive-area">
                            <div class="row">
                                <!-- Start Blog Content -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="blog-content">
                                        <!-- Start Single Blog -->
                                        <div class="single-Blog">

                                            <div class="single-blog-right">
                                                <div class="blog-img">
                                                    <figure class="blog-figure">
                                                        <a href="#"><img alt="img" src="../images/dep1.jpg"></a>
                                                        <span class="image-effect"></span>
                                                    </figure>
                                                </div>

                                                <div class="blog-content blog-details">
                                                    <h2>বিষণ্ণতা কি?</h2>
                                                    <p>বিষণ্ণতা বর্তমান বিশ্বে একটি সাধারণ ধরনের মানসিক রোগ। জীবনের চলার পথে আমরা অনেকেই যেমন মাঝে মাঝে উদ্বেগে ভুগি, তেমনিভাবে মাঝে মাঝে বিষাদগ্রস্তও হই। বিষণ্ণতা একটি আবেগীয় অবস্থা যার লক্ষণ হল গভীর দুঃখবোধ (ঝধফহবংং) ও আশংকা (অঢ়ঢ়ৎবযবহংরড়হ) বা উৎকণ্ঠা। খারাপ একটি ঘটনা ঘটবে বলে ভয়; নিজেকে অপর্দম মনে করা অপরাধবোধ, নিদ্রাহীনতা, ক্ষুধা নষ্ট হয়ে যাওয়া, যৌন স্পৃহার অভাব বা অবলুপ্তি দৈনন্দিনকাজ কর্মে আগ্রহহীনতা বা আনন্দের অভাব এ সমস্ত অবস্থাগুলি যে ব্যক্তির মধ্যে প্রকাশ পায় তাকে বিষণ্ণতায় আক্রান্ত বলে গণ্য করা হয়। বিষণ্ণতা স্বল্পস্থায়ী হতে পারে আবার দীর্ঘস্থায়ীও হতে পারে। বিষণ্ণতার যখন দীর্ঘস্থায়ী রূপ নেয়, তখন ব্যক্তি মাঝে মাঝে সুস্থ হলেও সে কখনও অসুখের পূর্বের কমোদ্যম ও কর্মক্ষমতা ফিরে পায় না।

                                                    </p>
                                                    <p>বিষণ্ণতার লক্ষণাবলী জীবনের বিভিন্ন সময়ে বিভিন্ন ধরনের হয়ে থাকে অর্থাৎ বয়সের সঙ্গে এসব লক্ষণের সম্পর্ক রয়েছে।
                                                        শিশু-কিশোরদের বিষণ্ণতা শুরু হয় শারীরিক ব্যাধির অভিযোগের মধ্যে দিয়ে যেমন-প্রথমে তারা মাথা ব্যাথার কথা বলে অথবা পেট ব্যথা বা এমনি ধরনের শারীরিক অসুবিধার কথা বলে।
                                                        কিন্তু বেশি বয়সে প্রথমে শুরু হয় মনোযোগ নিবিষ্ট করার অসুবিধা এবং কোন কিছু মনে না রাখতে পারার (স্মৃতি নষ্ট হওয়া) অভিযোগ দিয়ে।
                                                    </p>

                                                    <h3>বিষণ্ণতার লক্ষণ/ উপসর্গ:</h3>
                                                    <ol>
                                                        <li>কোন কিছুতেই মনোযোগ স্থাপন করতে না পারা। মনোযোগ স্থাপন ব্যর্থতার ফলে রোগী সহজ স্বাভাবিক বিষয়গুলো বারবার ভুলেযায়।</li>
                                                        <li>সিদ্ধান্তহীনতায় ভোগা।</li>
                                                        <li>প্রায়ই কান্নাকাটি করা। তবে সেটা অবশ্যই সবার সামনে নয়। </li>
                                                        <li>সবকিছুতে বিরক্ত বোধ করা। কারণে অকারণে কথায় কথায় রাগ করা। </li>
                                                        <li>অপরাধবোধ বা আত্ম-অভিযোগ করা। সব সময় নিজেকে সবকিছুর জন্য দায়ী বা দোষী করার চিন্তা ঘুরপাক খায়। </li>
                                                        <li>আগ্রহহীনতা।</li>
                                                        <li>হতাশা বোধ করা। “জীবনে কিছু হবে না”, কিছু পেলাম না,” টাইপের কথা তাদের কাছে থেকে বারবার শোনা যায়। আর পৃথিবীর যে কোন ব্যাপারেই তাদের এই হতাশা বোঝা যাবে।</li>

                                                        <li>যৌন স্পৃহা কমে যাওয়া বা অবলুপ্তি ঘটা। </li>
                                                        <li>খাদ্যে অনীহা। </li>
                                                        <li>আত্মহত্যার চেষ্টা অথবা আত্মহত্যা করার ইচছা।</li>
                                                        <li>সাধারণ আনন্দ উপভোগ অক্ষমতা। ব্যক্তির সামনে হাসির কোন ঘটনা ঘটলেও সে আর সহজে হাসতে পারে না। </li>
                                                        <li>ওজনের তারতম্য ঘটে। বিষণ্ণতায় আক্রান্ত ব্যক্তির ওজন কমে যায় বা অতিরিক্ত মাত্রায় বেড়ে যায়। এটা তাদের ইচ্ছাকৃতভাবে ওজন নিয়ন্ত্রণের ফলে ঘটে না। </li>
                                                        <li>ঘুমের ব্যাঘাত: বিষণ্ণতায় আক্রান্ত ব্যক্তিরা ঠিকমত ঘুমাতে পারে না। সহজে ঘুম আসতে চায় না। এ সময় রাতের বেলায় বারবার ঘুম ভেঙ্গে যায় । </li>
                                                        <li>বিষণ্ণতায় আক্রান্ত ব্যক্তিরা নিজেদের স্বাস্থ্যের প্রতি যতœ নেয় না, নিজেদের পরিচ্ছন্নতা ও বেশ ভূষার প্রতি নজর দেয় না। এ সময় রোগীর বিভিন্ন রকম ব্যথা-বেদনা এবং শারীরিক অসুবিধার কথা বলে সেগুলোর পেছনে স্পষ্টত: কোন শারীরিক ভিত্তি থাকে না। এ সমস্ত অসুবিধার মধ্যে রয়েছে-মাথা ধরা, ক্লান্তিরোধ, হাত-পা জ্বালা পোড়া করা, শারীরিক দূর্বলতা, পুরো শরীর ব্যথা করা, মাথা ঘুরানো, বদহজম বুকে চাপ বাধা, শ্বাসকষ্ট, গা, হাত-পা ম্যাজম্যাজ করা প্রভৃতি।</li>




                                                    </ol>
                                                    <p>তাছাড়া বিষণ্ণতায় আক্রান্ত ব্যক্তিরা বেশিরভাগ সময় সম্পুর্ণভাবে হতাশ, হতোদ্যম শঙ্কিত, উৎকণ্ঠিত, উদ্বিগ্ন এবং মন-মরা থাকে। </p>

                                                    <br><h3>আপনার মানসিক অবস্থা জানতে এসেস্মেন্ট সেবাটি গ্রহণ করুন</h3>
                                                    <a href="../ps-assessment"><button style="color: #0c0c2d; background-color: #31b0d5">Take Assessment</button></a>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--=========== END BLOG SECTION ================-->

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
                            <li><a href="#"><span class="fa fa-check"></span>Online Counselling</a></li>
                            <li><a href="#"><span class="fa fa-check"></span>Self Help</a></li>
                            <li><a href="#"><span class="fa fa-check"></span>Assessment on Mental Health</a></li>
                            <li><a href="#"><span class="fa fa-check"></span>Face to Face Counselling</a></li>
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
                        <p>
                            <a href="mailto:mehedi1055@gmail.com">
                          <span style="padding-right:3px; padding-top: 3px;">
                            <img class="manImg" src="../images/mehedi.jpg" alt="img">

                          </span>
                                Mehedi Hasan
                            </a><br>
                            <a href="mailto:abida1616@gmail.com">
                            <span style="padding-right:3px; padding-top: 3px;">
                                <img class="manImg" src="../images/abida.jpg" alt="img">

                            </span>
                                Abida Sultana
                            </a><br>
                        </p>
                        <div class="section-heading">
                            <h2>Supervised By</h2>
                            <div class="line"></div>
                        </div>

                        <p>
                            <a href="mailto:mamun@cse.univdhaka.edu">
                          <span style="padding-right:3px; padding-top: 3px;">
                            <img class="manImg" src="../images/sir.jpg" alt="img">

                          </span>
                                Dr. Md. Mamun-or-Rashid
                            </a><br>

                        </p>
                        <address class="contact-info">
                            <p><span class="fa fa-user"></span>Professor</p>
                            <p><span class="fa fa-home"></span>Department of Computer Science & Engineering, University of Dhaka</p>

                            <p><span class="fa fa-envelope"></span>sanguine.csedu@gmail.com</p>
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
                        <p>&copy; Copyright 2017 <a href="/psychohelp">Psycho Help</a></p>
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
                    <p>Design & Developed By <a rel="nofollow"></a>Team Sanguine, CSEDU</p>
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

<!-- Custom JS -->
<script src="../js/custom.js"></script>

</body>
</html>