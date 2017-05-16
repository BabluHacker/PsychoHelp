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
    <title>PsychoHelp : Features</title>

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
              <a class="navbar-brand" href="/psychohelp"><i class="fa fa-heartbeat"></i>psycho <span>Help</span></a>
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" hrindex.phphtml"><img src="images/logo.png" alt="logo"></a>   -->

            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                <li><a href="/psychohelp">Home</a></li>
                <li class="active"><a href="">Features</a></li>
                <li><a href="../ps-aboutus">About Us</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Service <span class="fa fa-angle-down"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="../chat">Online Counselling</a></li>
                    <li><a href="#">Take Assessment</a></li>
                    <li><a href="../profile">Self Help</a></li>
                  </ul>
                </li>



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
                <h2>Features</h2>
              </div>
              <div class="blog-breadcrumbs-right">
                <ol class="breadcrumb">
                  <li>You are here</li>
                  <li><a href="#">Home</a></li>                  
                  <li class="active">Features</li>
                </ol>
              </div>
            </div>
          </div>
        </div>        
      </div>      
    </section>
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
                      <p>To improve your mental health by yourself, SelfHelp section will be your guidlines</p>
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
                      <img src="../images/choose-us-img1.jpg" alt="img">
                    </div>
                    <div class="whychoose-singleslide">
                      <img src="../images/choose-us-img2.jpg" alt="img">
                    </div>
                    <div class="whychoose-singleslide">
                      <img src="../images/choose-us-img3.jpg" alt="img">
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
    </section>-->
    <!--=========== End Counter SECTION ================-->

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