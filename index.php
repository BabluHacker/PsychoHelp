<?php
    session_start();



?>

<!DOCTYPE html>
<html lang="en">
  <head>


    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>PsychoHelp : Home</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">       
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/black-theme.css" rel="stylesheet">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Photo Swipe Image Gallery -->     
    <link rel='stylesheet prefetch' href='css/photoswipe.css'>
    <link rel='stylesheet prefetch' href='css/default-skin.css'>    

    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
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
                <li class="active"><a href="/psychohelp">Home</a></li>
                <li><a href="ps-features">Features</a></li>
                <li><a href="ps-aboutus">About Us</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="chat">Online Counselling</a></li>
                    <li><a href="ps-assessment">Take Assessment</a></li>
                    <li><a href="profile">Self Help</a></li>
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
                <li><a href="ps-contact">Contact</a></li>
                <?php
                    $user;

                    if(!isset( $_SESSION["state"])){
                        $user = "<a href='profile'><strong>Login</strong></a>";
                    }
                    else{

                        $user = "<a href='profile' style='color: #00CC00;'><strong>".$_SESSION["fname"]."</strong></a>";
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

    <!--=========== BEGIN SLIDER SECTION ================-->
    <section id="sliderArea">
      <!-- Start slider wrapper -->      
      <div class="top-slider">
        <!-- Start First slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/slider1.jpg" alt="">
          </div>
          <div class="slider-text">
            <!--<h2>An <strong>Excellent Theme</strong> for your Health Related Project</h2>
            <p><strong>WpF Medinova</strong> Theme suitable for any health and medical related projets or business</p>
            <div class="readmore_area">
              <a data-hover="Read More" href="#"><span>Read More</span></a>                
            </div>-->
          </div>
        </div>
        <!-- End First slide -->

        <!-- Start 2nd slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/dep1.jpg" alt="">
          </div>
          <div class="slider-text">

            <h2 style="color: rgba(11,149,10,0.57)">আপনি কি <strong style="color: #3c763d">ডিপ্রেশনে</strong> ভুগছেন? </h2>
            <p>মানসিকভাবে আপনি আপনি কতটুকু স্বাভাবিক! জানতে ক্লিক করুন <strong>Take Assessment</strong></p>
            <div class="readmore_area">
              <a data-hover="Take Assessment" href="ps-assessment"><span>Take Assessment</span></a>

            </div>
          </div>
        </div>
        <!-- End 2nd slide -->

        <!-- Start Third slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/dep2.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2>আপনি কি <strong>বিষন্নতায়</strong>  ভুগছেন? </h2>
            <p>মানসিকভাবে আপনি আপনি কতটুকু স্বাভাবিক! জানতে ক্লিক করুন <strong>Take Assessment</strong></p>

            <div class="readmore_area">
              <a data-hover="Take Assessment" href="ps-assessment"><span>Take Assessment</span></a>
            </div>
          </div>
        </div>
        <!-- End Third slide -->

        <!-- Start Fourth slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/slider5.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2>কাওকে বলতেও পারছেন না মন খুলে!!? <strong>আমাদের বলুন </strong></h2>
            <p>মানসিকভাবে আপনি আপনি কতটুকু স্বাভাবিক! জানতে ক্লিক করুন <strong>Take Assessment</strong></p>
            <div class="readmore_area">
              <a data-hover="Take Assessment" href="ps-assessment"><span>Take Assessment</span></a>
            </div>
          </div>
        </div>
        <!-- End Fourth slide -->

        <!-- Start Fifth slide -->
        <div class="top-slide-inner">
          <div class="slider-img">
            <img src="images/slider2.jpg" alt="">
          </div>
          <div class="slider-text">
            <h2><strong>Psycho Help </strong> আমরা আছি আপনার পাশে</h2>
            <p>মানসিকভাবে আপনি আপনি কতটুকু স্বাভাবিক! জানতে ক্লিক করুন <strong>Take Assessment</strong></p>

            <div class="readmore_area">
              <a data-hover="Take Assessment" href="ps-assessment"><span>Take Assessment</span></a>
            </div>
          </div>
        </div>
        <!-- End Fifth slide -->
      </div><!-- /top-slider -->
    </section>
    <!--=========== END SLIDER SECTION ================-->

    <!--=========== BEGIN Top Feature SECTION ================-->
    <section id="topFeature">
      <div class="row">
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-flask"></span>
              <h3>Self Help</h3>
                <p> <strong> নিজেকে নিজে সাহায্য করুন </strong></p>
              <div class="readmore_area">
                <a href="profile" data-hover="Self Help"><span>Self Help</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->
         
        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature opening-hours">
              <span class="fa fa-clock-o"></span>
              <h3>Opening Hours</h3>
                <p><strong>Schedule of Online Counselling</strong></p>
              <ul class="opening-table">
                <li>
                  <span>Wednesday</span>
                  <div class="value">10.00 - 05.00</div>
                </li>

              </ul>
                <p><strong>Schedule of Onspot Counselling</strong></p>
            <ul class="opening-table">
                <li>
                    <span>Sunday - Wednesday</span>
                    <div class="value"></div>
                </li>
                <p align="center" style="color: #c32b2f;">Onspot Counselling time will be confirmed by the Counselors</p>

            </ul>
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->

        <!-- Start Single Top Feature -->
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="single-top-feature">
              <span class="fa fa-hospital-o"></span>
              <h3>Appointment</h3>
              <p>সরাসরি কাউন্সেলরদের সাথে সাক্ষাতের জন্যে ফর্মটি ফিলাপ করুন</p>
              <div class="readmore_area">
                <a data-toggle="modal" data-target="#myModal" href="#" data-hover="Appoinment"><span>Appointment</span></a>
              </div>
              <!-- start modal window -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Appointment Details</h4>
                    </div>
                    <div class="modal-body">
                      <div class="appointment-area">


                          <form class="appointment-form" method="post" action="appointment.php">
                              <div class="row">
                                  <div class="col-md-6 col-sm-6">
                                      <label class="control-label" >নাম  <span class="required">*</span>
                                      </label>
                                      <input type="text" name="name" class="wp-form-control wpcf7-text" placeholder="নাম">
                                  </div>
                                  <div class="col-md-6 col-sm-6">
                                      <label class="control-label">ইমেইল <span class="required">*</span>
                                      </label>
                                      <input type="mail" name="mail" class="wp-form-control wpcf7-email" placeholder="ইমেইল">

                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6 col-sm-6">
                                      <label class="control-label">বয়স <span class="required">*</span>
                                      </label>
                                      <input type="text" name="age" class="wp-form-control wpcf7-text" placeholder="বয়স">
                                  </div>
                                  <div class="col-md-6 col-sm-6">
                                      <label class="control-label">ফোন নম্বর <span class="required">*</span>
                                      </label>
                                      <input type="text" name="phone" class="wp-form-control wpcf7-text" placeholder="ফোন নম্বর">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6 col-sm-6">
                                      <label class="control-label">আপনার মানসিক অবস্থা <span class="required">*</span>
                                      </label>
                                      <select class="wp-form-control wpcf7-select" name="mental1">
                                          <option val="1" name="mental" >খুব খারাপ</option>
                                          <option val="2" name="mental">খারাপ</option>
                                          <option val="3" name="mental">ভালো</option>
                                          <option val="4" name="mental">খুব ভালো</option>

                                      </select>
                                  </div>
                                  <div class="col-md-6 col-sm-6">
                                      <label class="control-label">কি ধরনের সমস্যায় ভুগছেন<span class="required">*</span>
                                      </label>
                                      <select  class="wp-form-control wpcf7-select" name="option1">
                                          <option val="1" name="option">উদ্বেগ (Anxiety)</option>
                                          <option val="2" name="option">বিষণ্ণতা (Depression)</option>
                                          <option val="3" name="option">অন্যান্য (Others)</option>

                                      </select>
                                  </div>
                              </div>
                              <input type="text" name="subject" class="wp-form-control wpcf7-text" placeholder="Subject">
                              <textarea name="description" class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="আপনার সমস্যার কিছু বিবরণ যা আমাদের আপনি বলতে চান"></textarea>
                              <p>আপনার Appointment Request টি পাঠানো হবে যাচাই করার জন্যে। ফোন অথবা মেইলে আপনাকে কনফার্ম করা হবে। </p>
                              <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-share"></i><span>Book Appointment</span></button>


                          </form>


                      </div>
                    </div>                    
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div>
        </div>
        <!-- End Single Top Feature -->
      </div>
    </section>
    <!--=========== END Top Feature SECTION ================-->
    <!--=========== BEGIN Service SECTION ================-->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Our Services</h2>
                <div class="line"></div>
              </div>
              <!-- Start Service Content -->
              <div class="service-content">
                <div class="row">
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-angle-double-down service-icon-effect"></span>
                      </div>
                      <h3><a href="#">Online Assessment</a></h3>
                      <p>To know your mental status, take our online Assessment Service</p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-angle-double-down service-icon-effect"></span>
                      </div>
                      <h3><a href="#">Online Counselling</a></h3>
                      <p>Talk with a licensed, professional therapist online.</p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-angle-double-down service-icon-effect"></span>
                      </div>
                      <h3><a href="#">Self Help</a></h3>
                      <p>To improve your mental health by yourself, SelfHelp section will be your guidlines. নিজেকে নিজে সাহায্য করুন। </p>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Service SECTION ================-->
    <!--=========== BEGIN Service SECTION ================-->
    <section id="serviceother">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Other Services</h2>
                <div class="line"></div>
              </div>
              <!-- Start Service Content -->
              <div class="service-content">
                <div class="row">

                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-angle-double-down service-icon-effect"></span>
                      </div>
                      <h3><a href="#">মেডিকেল সেন্টার</a></h3>
                      <p>ঢাকা বিশ্ববিদ্যালয়, শহীদ মিনারের বিপরীত দিকে। <br> সময় ২-৫টা, সোম, মঙ্গল, বৃহস্পতি <br> ফোন ০১৭৩১৭০৯০৯৯</p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-angle-double-down service-icon-effect"></span>
                      </div>
                      <h3><a href="#">নাসিরুল্লাহ সাইকোথেরাপী ইউনিট</a></h3>
                      <p>কলা ভবন, ৩য় তলা, ঢাকা বিশ্ববিদ্যালয় <br>
                        ফোনঃ ০১৭৫৫৬৫৪৮৩৫, মেইলঃ clinpsy.npu.du@gmail.com
                      </p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-angle-double-down service-icon-effect"></span>
                      </div>
                      <h3><a href="#">মনোরোগবিদ্যা বিভাগ</a></h3>
                      <p>
                        বঙ্গবন্ধু শেখ মুজিব মেডিকেল বিশ্ববিদ্যালয় (ব্লক ডি, ১২-তলা), শাহবাগ, ঢাকা<br>
                        সময়ঃ ৮-২টা, শনি - বৃহস্পতি <br>
                        শিশু ক্লিনিকঃ শনি, সোম, বৃহস্পতিঃ ৮-২টা
                      </p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-angle-double-down service-icon-effect"></span>
                      </div>
                      <h3><a href="#">ক্লিনিক্যাল সাইকোলজি বিভাগ</a></h3>
                      <p>জাতীয় মানসিক স্বাস্থ্য ইন্সটিটিউট(NIMH)
                        শেরে-বাংলা নগর, আগারগাও, ঢাকা
                        শিশু ক্লিনিকঃ সোমবার, বুধবার ৮-২
                      </p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-angle-double-down service-icon-effect"></span>
                      </div>
                      <h3><a href="#">মনোরোগ বিভাগ (DMCH)</a></h3>
                      <p>ঢাকা মেডিকেল কলেজ ও হাসপাতাল, ঢাকা </p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-angle-double-down service-icon-effect"></span>
                      </div>
                      <h3><a href="#">নারী ও শিশু নির্যাতন নিরাময়</a></h3>
                      <p>ন্যাশনাল ট্রমা কাউন্সেলিং সেন্টার (NTCC)<br>
                        ৩৭/৩, নিউ ইস্কাটন গার্ডেন রোড, ঢাকা
                      </p>
                    </div>
                  </div>
                  <!-- Start Single Service -->
                  <div class="col-lg-4 col-md-4">
                    <div class="single-service">
                      <div class="service-icon">
                        <span class="fa fa-angle-double-down service-icon-effect"></span>
                      </div>
                      <h3><a href="#">মাদকাসক্তি নিরাময়</a></h3>
                      <p>১/১৪, ইকবাল রোড, মুহাম্মদপুর, ঢাকা-১২০৭ <br>
                        ফোনঃ ০১৭১১১৫৩১৯৭

                      </p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== End Service SECTION ================-->
    <!--=========== BEGAIN Why Choose Us SECTION ================-->
    <section id="whychooseSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="service-area">
              <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Why Choose Us</h2>
                <div class="line"></div>
              </div>              
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-left">
                  <div class="whychoose-slider">
                    <div class="whychoose-singleslide">
                      <img src="images/choose-us-img1.jpg" alt="img">
                    </div>
                    <div class="whychoose-singleslide">
                      <img src="images/choose-us-img2.jpg" alt="img">
                    </div>
                    <div class="whychoose-singleslide">
                      <img src="images/choose-us-img3.jpg" alt="img">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                <div class="whyChoose-right">
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-hospital-o"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">সাইকোথেরাপি</h4>
                      <p>সাম্প্রতিক একটি তথ্য থেকে পাওয়া গেছে বাংলাদেশের ১৬% মানুষ মানুষিক সমস্যায় ভুগছেন (NIMH)। বাংলাদেশ এ বিগত ২০ বছর যাবত মানুষিক সমস্যার জন্যে সাইকোথেরাপি দেয়া যাচ্ছে। </p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-user-md"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">অভিজ্ঞ সাইকোথেরাপিস্ট</h4>
                      <p>এখন পর্যন্ত অথিকাংশ মনোবৈজ্ঞানিক স্বাস্থ্য সেবা শুধুমাত্র ঢাকা কেন্দ্রিক তাই সারা দেশে বর্তমানে যখন ৭০ লক্ষ মানুষ মানুষিক স্বাস্থ্য সমস্যায়(প্রথম আলো ) ভুগছেন কিন্তু তাদের জন্যে এই পেশাদার  মনোবৈজ্ঞানিক সেবা দেয়া সম্ভবপর হচ্ছে না। তাই সবার কাছে
                      অভিজ্ঞ সাইকোথেরাপি পৌঁছে দেবার লক্ষ্যে আমাদের আছে অভিজ্ঞ সাইকোথেরাপিস্ট</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-forumbee"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">অনলাইন </h4>
                      <p> বর্তমানে প্রায়  ১৪.৪ %  মানুষ প্রতিদিন ইন্টারনেট ব্যাবহার করেন, সরাসরি চিকিৎসা সেবা সমান না হলেও অনেকটাই সমস্যার সমাধানে কাজ করছে বলে উন্নত বিশ্বে পাওয়া গিয়েছে। এই বিষয়টিকে মাথায় রেখে আমরা মাতৃ ভাষায় সার্ভিসটি চালু করার প্রয়াস নিয়েছি।</p>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="media-icon">
                        <span class="fa fa-ambulance"></span>
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">এমার্জেন্সি </h4>
                      <p>১০৯ এ কল করুন যা একটা ২৪ ঘণ্টা ব্যাপী ইমারজেন্সি সার্ভিসেবা, শিশু ও নারী নির্যাতন সম্পর্কিত যেকোন সেবার<br>

                        National Helpline centre for violance agains women and children. Tole free 24 hour service from any operator. Call 109 for service</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </section>
    <!--=========== END Why Choose Us SECTION ================-->

    <!--=========== BEGAIN Counter SECTION ================-->
    <!--
    <section id="counterSection">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="counter-area">
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                  <div class="counter-no counter">
                    200
                  </div>
                  <div class="counter-label">Doctors</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    300
                  </div>
                  <div class="counter-label">Clinic Rooms</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    350
                  </div>
                  <div class="counter-label">Awards</div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                 <div class="counter-box">
                  <div class="counter-no counter">
                    450
                  </div>
                  <div class="counter-label">Happy Patients</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->
    <!--=========== End Counter SECTION ================-->

    <!--=========== BEGAIN Doctors SECTION ================-->
    <section id="meetDoctors">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="meetDoctors-area">
             <!-- Start Service Title -->
              <div class="section-heading">
                <h2>Our Psychotherapists</h2>
                <div class="line"></div>
              </div>
              <div align="center" class="doctors-area">
                <ul class="doctors-nav">
                  <li>
                    <div class="single-doctor">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="images/doctor-1.jpg" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Dr. Farah Deeba</h2>
                            <p>Associate Professor, Department of Clinical Psychology, University of Dhaka is a lead of this online service for Bangladeshies.</p>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-doctor-social">
                        <a href="http://www.du.ac.bd/faculty/faculty_details/CPS/1595"><span class="fa fa-link"></span></a>
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="single-doctor">
                      <div class="single-doctor">
                      <a class="tdoctor" href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                        <figure>
                          <img src="images/doctor-2.jpg" />
                          <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"/></svg>
                          <figcaption>
                            <h2>Jesan Ara</h2>
                            <p>Assistant Professor and Clinical psychologist at University of Rajshahi.</p>
                            <button>View</button>             
                          </figcaption>
                        </figure>
                      </a>
                      <div class="single-doctor-social">
                        <a href="#"><span class="fa fa-link"></span></a>
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                      </div>
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

    <!--=========== BEGAIN Testimonial SECTION ================-->
    <!--
    <section id="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="testimonial-area">
             <!-- Start Service Title -->
    <!--
              <div class="section-heading">
                <h2>What our patients said</h2>
                <div class="line"></div>
              </div>
              <div class="testimonial-area">
                <ul class="testimonial-nav">
                  <li>
                    <div class="single-testimonial">
                      <div class="testimonial-img">
                        <img src="images/patients-3.jpg" alt="img">
                      </div>
                      <div class="testimonial-cotent">
                        <p class="testimonial-parg">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.There are many variations of passages of Lorem Ipsum available.</p>
                      </div>
                    </div>
                  </li> 
                  <li>
                    <div class="single-testimonial">
                      <div class="testimonial-img">
                        <img src="images/patients-1.jpg" alt="img">
                      </div>
                      <div class="testimonial-cotent">
                        <p class="testimonial-parg">There are many variations of passages of Lorem Ipsum available.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                      </div>
                    </div>
                  </li> 
                  <li>
                    <div class="single-testimonial">
                      <div class="testimonial-img">
                        <img src="images/patients-2.jpg" alt="img">
                      </div>
                      <div class="testimonial-cotent">
                        <p class="testimonial-parg">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.There are many variations of passages of Lorem Ipsum available.</p>
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
    <!--=========== End Testimonial SECTION ================-->

    <!--=========== BEGAIN Home Blog SECTION ================-->
    <!--
    <section id="homeBLog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="homBlog-area">
             <!-- Start Service Title -->
    <!--
              <div class="section-heading">
                <h2>News From Blog</h2>
                <div class="line"></div>
              </div> 
              <!-- Start Home Blog Content -->
    <!--
              <div class="homeBlog-content">
                <div class="row">
                  <!-- Start Single Blog -->
    <!--
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>May <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                        <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/choose-us-img3.jpg" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Dr. Smith</a></li>
                            <li>In <a href="#">Dental</a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>Latest Trend Of Medical Dental Department</h2>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   <!-- Start Single Blog -->
    <!--
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>May <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                         <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/choose-us-img3.jpg" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Dr. Smith</a></li>
                            <li>In <a href="#">Dental</a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>Latest Trend Of Medical Dental Department</h2>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   <!-- Start Single Blog -->
    <!--
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-Blog">
                      <div class="single-blog-left">
                        <ul class="blog-comments-box">
                          <li>May <h2>10</h2>2015</li>
                          <li><span class="fa fa-eye"></span>1523</li>
                          <li><a href="#"><span class="fa fa-comments"></span>5</a></li>
                        </ul>
                      </div>
                      <div class="single-blog-right">
                         <div class="blog-img">
                          <figure class="blog-figure">
                           <a href="#"><img src="images/choose-us-img3.jpg" alt="img"></a>
                            <span class="image-effect"></span>
                          </figure>
                        </div>
                        <div class="blog-author">
                          <ul>
                            <li>By <a href="#">Dr. Smith</a></li>
                            <li>In <a href="#">Dental</a></li>
                          </ul>
                        </div>
                        <div class="blog-content">
                          <h2>Latest Trend Of Medical Dental Department</h2>
                          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                          <div class="readmore_area">
                            <a href="#" data-hover="Read More"><span>Read More</span></a>                
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
    <!--=========== End Home Blog SECTION ================-->

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
                            <img class="manImg" src="images/mehedi.jpg" alt="img">

                          </span>
                          Mehedi Hasan
                      </a><br>
                      <a href="mailto:abida1616@gmail.com">
                            <span style="padding-right:3px; padding-top: 3px;">
                                <img class="manImg" src="images/abida.jpg" alt="img">

                            </span>
                          Abida Sultana
                      </a>
                  </p>
                <address class="contact-info">
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
    <script src="js/jquery.js"></script>    
    <!-- Bootstrap default js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>      
    <!-- counter -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Doctors hover effect -->
    <script src="js/snap.svg-min.js"></script>
    <script src="js/hovers.js"></script>
    <!-- Photo Swipe Gallery Slider -->
    <script src='js/photoswipe.min.js'></script>
    <script src='js/photoswipe-ui-default.min.js'></script>    
    <script src="js/photoswipe-gallery.js"></script>

    <!-- Custom JS -->
    <script src="js/custom.js"></script>
     
  </body>
</html>