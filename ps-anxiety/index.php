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
                                <li><a href="../chat">Online Counseling</a></li>
                                <li class="active"><a href="../ps-assessment">Take Assessment</a></li>
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


<!--=========== START BLOG SECTION ================-->
<section id="blogArchive">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="blog-breadcrumbs-area">
                <div class="container">
                    <div class="blog-breadcrumbs-left">
                        <h2>Anxiety</h2>
                    </div>
                    <div class="blog-breadcrumbs-right">
                        <ol class="breadcrumb">
                            <li>You are here</li>
                            <li><a href="#">Home</a></li>
                            <li class="active">Assessment-Anxiety</li>
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
                                                        <a href="#"><img alt="img" src="../images/anxiety.jpg"></a>
                                                        <span class="image-effect"></span>
                                                    </figure>
                                                </div>

                                                <div class="blog-content blog-details">
                                                    <h2> উদ্বেগ কি?</h2>
                                                    <p>বআফিফার কলেজ জীবনের ফাইনাল পরীক্ষা সামনে। পরীক্ষার চিন্তায় সে প্রায়

                                                        প্রতিদিন নানারকম দু:স্বপ্ন দেখে। পড়তে বসলে এত পড়া দেখে তার মাথাব্যথা শুরু হয়ে

                                                        যায়, বমি বমি লাগে, পেটে কেমন বদহজমের ব্যথার মত মোচড় দিতে থাকে। কোথা থেকে

                                                        পড়া শুরু করবে, কি পড়বে এইসব ভাবতে ভাবতে সময় শেষ হয়ে যায়। এইভাবে দিন যেতে

                                                        থাকে আর পরীক্ষা একেবারে কাছে চলে আসে। আফিফার উদ্বেগের মাত্রা ব্যারোমিটারের

                                                        পাইপ ফেটে পারদের মত লাফিয়ে উঠে উপচে পড়ার মত অবস্থা। সত্যি সত্যি বমি আর

                                                        পেটের সমস্যা শুরু হয়ে গেছে মেয়েটার কয়েক সপ্তাহ ধরে। খাওয়া-দাওয়া, ঘুম নেই বললেই

                                                        চলে। পরীক্ষার দিন আফিফার শারিরীক অবস্থার এমন পরিস্থিতি যে, সে আর শরীর নিয়ে

                                                        চলতেই পারে না, পরীক্ষার হলে বসবে কেমন করে? বাবা-মা বাধ্য হলেন কলেজ

                                                        কর্তৃপক্ষকে তার পরীক্ষা দেয়া সম্ভব নয় বলে জানাতে।

                                                    </p>


                                                    <p>আফিফার মত অতিরিক্ত উদ্বেগ হয়ত আমরা অনেকে বিভিন্ন সময় অনুভব করি। যেমন,

                                                        চাকরীর ইন্টারভিউ দিতে বা কোন সামাজিক অনুষ্ঠানে সবার সামনে কথা বলতে। উদ্বেগ

                                                        আমাদের আর যে কোন অনুভুতির মতই একটি স্বাভাবিক অনুভূতি । কিছু পরিমান উদ্বেগ

                                                        থাকা প্রত্যেকের জন্য প্রয়োজনীয়ও বটে । কারণ উদ্বেগ আমাদেরকে চাপমূলক

                                                        পরিস্থিতিকে নিয়ন্ত্রণে আনতে, প্রয়োজনীয় কার্যকরী পদক্ষেপ নিতে উদ্যোগী করে

                                                        তোলে। কিন্তু অনেক সময় কারো কারো জন্য উদ্বেগ স্বাভাবিকের তুলনায় বেশী হয়ে গেলে

                                                        তা সহায়তার চাইতে সমস্যা তৈরীরই কারণ হয়ে দাড়াঁয়। আর তখন দেখা যায় তাদের পক্ষে

                                                        চাপমূলক পরিস্থিতিকে মোকাবেলা করা অসম্ভব হয়ে পড়ে। চাপের মুখে তারা হয়ত স্থবির

                                                        হয়ে যান বা পরিস্থিতিটিকে এড়াতে সর্বোচ্চ চেষ্টা করেন। আর তখন এধরনের উদ্বেগকে

                                                        একটি মানসিক স্বাস্থ্যসমস্যা হিসেবে চিহ্নিত করা হয়।
                                                    </p>
                                                    <h3><strong>উদ্বেগ যখন একটি সমস্যা</strong></h3>
                                                    <p>উদ্বেগের সমস্যাক্রান্ত ব্যক্তি সবসময় একটা ভয় বা কোন বিপদের আশংকায় ভোগেন। এই

                                                        অস্বস্তিকর অনুভূতি ব্যক্তির শারিরীক বা মানসিক বিভিন্ন লক্ষণের মধ্যে দিয়ে প্রকাশ পায়।

                                                        উদ্বেগে আক্রান্ত ব্যক্তি যে বিষয় বা পরিস্থিতির সাথে খাপ খাওয়াতে পারবেন না বলে ভাবেন,

                                                        তেমন বিষয় বা পরিস্থিতির সম্মুখীন হলে (বা না হলেও) সবসময় তার চারপাশকে মূল্যায়ন করতে

                                                        থাকেন। আর তখনই তার চিন্তা এবং শারীরিক প্রতিক্রিয়ায় প্রতিফলিত হয় যে সে উদ্বেগে ভুগছে।

                                                        উদ্বেগের সমস্যার প্রকোপ সাধারণত কমবয়সীদের (২০ বছরের কম বা কাছাকাছি) এবং মহিলাদের

                                                        (অষ্ট্রেলিয়ায় 17.9% নারী এবং 10.8% পুরুষ) ভিতর বেশী পরিলক্ষিত হয়। যদিও বয়স বাড়ার

                                                        সাথে সাথে অনেকের সমস্যা কমে আসে, কিন্তু অনেকের সমস্যা আরও তীব্র আকার ধারণ করে।

                                                        এছাড়াও বেকার ও বিবাহ বা সম্পর্কবিচ্ছেদ ঘটেছে যাদের তাদের মধ্যে উদ্বেগজনিত সমস্যা বেশী

                                                        হয়।
                                                    </p>
                                                    <h3><strong>উদ্বেগের লক্ষণ:</strong></h3>
                                                    উদ্বেগের লক্ষণসমূহকে সাধারণত: তিনধরনের ভাগে ভাগ করা যায়। শারীরিক, মানসিক

                                                    এবং ভাবনাসংক্রান্ত। উদ্বেগের কারণে যেসব শারীরিক লক্ষণ একজন ব্যক্তির মাঝে দেখা

                                                    যায়, সেগুলো অনেকসময় কোন শারীরিক রোগের কারণ বলেই বেশী মনে হতে পারে। সেজন্য

                                                    নিম্নলিখিত লক্ষণগুলি আপনার বা পরিবারের কারো ভেতর দেখা গেলে প্রথমে ভালভাবে

                                                    নিশ্চিত হবেন যে সেগুলো কোন শারীরিক রোগের লক্ষণ নয়।
                                                    <h4>শারিরীক লক্ষণ:</h4>
                                                    <ol>
                                                        <li>হৃদস্পন্দন অতি দ্রুতগতিতে চলা</li>
                                                        <li>বুক ধড়ফড় বা বুকে ব্যথা</li>
                                                        <li>শ্বাস কষ্ট বা অজ্ঞান লাগা</li>
                                                        <li>অপ্রতিরোধ্য আতঙ্কের চাপ</li>
                                                        <li>নিয়ন্ত্রণ হারিয়ে ফেলছি বা পাগল হয়ে যাচ্ছি এমন অনুভূতি হওয়া</li>
                                                        <li>ঘাম (বেশী গরম বা দৌড়ঝাঁপ করবার জন্য নয়)</li>
                                                        <li>পেট খারাপ বা মাথা ঘোরা</li>
                                                        <li>ঘন ঘন মূত্রত্যাগ বা পাতলা পায়খানা</li>
                                                        <li>পেশী অত্যধিক টানটান থাকা বা  কম্পনবোধ করা</li>
                                                        <li>ক্রমাগত মাথাব্যাথা থাকা </li>
                                                        <li>ক্লান্তি</li>
                                                        <li>অনিদ্রা</li>


                                                    </ol>
                                                    <h4>মানসিক লক্ষণসমূহ</h4>
                                                    <ol>

                                                        <li>আসন্ন কোন বিপদের জন্য সারাক্ষণ একটা ভয়ের অনুভূতি</li>
                                                        <li>কোনকিছুতে একটানা মনোযোগ ধরে রাখার সমস্যা</li>
                                                        <li>সারাক্ষণ উদ্দ্বিগ্ন লাগা</li>
                                                        <li>সবকিছু বা সবাইকে বিরক্ত লাগা</li>
                                                        <li>অস্থির লাগা</li>

                                                    </ol>
                                                    <h4>ভাবনাসংক্রান্ত লক্ষণসমূহ</h4>
                                                    <ol>
                                                        <li>সবচেয়ে খারাপ পরিস্থিতি ঘটার আশংকায় থাকা</li>
                                                        <li>প্রায় সববিষয়কেই নেতিবাচকভাবে ব্যাখ্যা করার অভ্যাস</li>
                                                        <li>যে বিষয়, ঘটনা বা পরিস্থিতিকে ব্যক্তি ভয় পান বা নিজেকে সেসব পরিস্থিতিকে খাপ খাইয়ে নিতে পারবে না বলে ভাবেন, সে ধরনের বিষয়, ঘটনা বা পরিস্থিতিকে এড়িয়ে চলার প্রবণতা থাকা</li>

                                                        <li>সারাক্ষণ আসন্ন বিপদের লক্ষণ খুঁজে বেড়ানো।</li>
                                                    </ol>

                                                    <br>
                                                    <h3><strong>উদ্বেগ নিয়ন্ত্রনের উপায়</strong></h3>
                                                    <p>উদ্বেগ নিয়ন্ত্রনের জন্য আমাদের সবচেয়ে প্রথম কোন বিষয়, ঘটনা বা পরিস্থিতিটি অতিরিক্ত চাপ দেয় তা খুঁজে বের করতে হবে। বুঝতে হবে, বিষয়টি আসলে কতটুকু দু:শ্চিন্তা বা ভয় করার মত। অন্যরা এইক্ষেত্রে কিভাবে খাপ খাওয়ায় তা নিজের পক্ষে করা সম্ভব কিনা তার চেষ্টা করা যেতে পারে। পাশাপাশি বিষয়টিকে ঘিরে নিজের ভেতর যেসব নেতিবাচক চিন্তা বা ভ্রান্ত ধারণা কাজ করে সেগুলোকে চিহ্নিত করা ও পরিবর্তন করার চেষ্টা করতে পারেন। আর এই প্রচেষ্টাকে সহজ করার জন্য রিলাক্সজেশন বা পেশী শিথিলায়ন পদ্ধতিসমূহ শেখা এবং অনুশীলন করার অভ্যাস করা যেতে পারে।   </p>
                                                    <p>অনেকক্ষেত্রে সমস্যার তীব্রতা অনেক বেশী হলে নিজে নিজে সমস্যা সমাধান করা খুব সহজসাধ্য হয় না। সেক্ষেত্রে পেশাদার মানসিক স্বাস্থ্যসেবা নেয়া যেতে পারে। </p>
                                                    <p>যাহোকে এসব করার আগে সবচেয়ে প্রথম নিজেকে কতগুলো প্রশ্ন করে বোঝার চেষ্টা করুন আসলেই কোন উদ্বেগের সমস্যায় ভুগছেন কিনা?
                                                    </p>

                                                    <ol>
                                                        <li>আপনি কি সারাক্ষণ দু:শ্চিন্তাগ্রস্ত, চিন্তিত বা উত্তেজিত থাকেন? </li>
                                                        <li>উদ্বেগের কারনে আপনার কাজ, স্কুল, বা পরিবারের দায়িত্বসমূহ পালনে সমস্যার সৃষ্টি হয়? </li>
                                                        <li>আপনি কি মনে করেন যুক্তিহীন ভয় আপনাকে ছেয়ে রেখেছে যা বুঝলেও আপনি ঝেঁড়ে ফেলতে পারেন না?</li>
                                                        <li>কিছু জিনিস একটি নির্দিষ্টভাবে না করলে (ধর্মীয় কার্যক্রম নয়)খারাপ কিছু ঘটবে বলে বিশ্বাস করেন?</li>
                                                        <li>আপনার উদ্বেগের কারণ হতে পারে তাই কি আপনি কোন কাজ, ঘটনা বা পরিস্থিতি এড়িয়ে চলেন?</li>
                                                        <li>আপনি কি হঠাৎ আকস্মিক, অপ্রত্যাশিত আতঙ্কের আক্রমণের আশংকা করেন?</li>
                                                        <li>বিপজ্জনক কোন সংবাদ বা ঘটনা আপনার খুব কাছাকাছি বলে মনে হয়?</li>



                                                    </ol>
                                                    <p>উপরের প্রশ্নগুলোর বেশীর ভাগ উত্তরই যদি ‘হ্যাঁ’ হয় তাহলে আপনার উদ্বেগের প্রকৃতি হয়ত আপনাকে নানাভাবে সমস্যাক্রান্ত করছে। জীবনকে পূর্ণাঙ্গভাবে উপভোগ করতে উদ্বেগকে আপনার নিয়ন্ত্রনে নিয়ে আসুন।
                                                    </p><br>

                                                    <h3>আপনার মানসিক অবস্থা জানতে এসেস্মেন্ট সেবাটি গ্রহণ করুন</h3>
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

<!-- Custom JS -->
<script src="../js/custom.js"></script>

</body>
</html>