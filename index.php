<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Javascript Labs</title>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- FAVICON  -->
    <!-- Place your favicon.ico in the images directory -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <!-- =========================
       STYLESHEETS 
    ============================== -->
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/plugins/bootstrap.min.css">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="css/icons/iconfont.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     
    <!-- GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
    
    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="css/plugins/loaders.css">
    <link rel="stylesheet" href="css/plugins/animate.css">
    <link rel="stylesheet" href="css/plugins/pickadate-default.css">
    <link rel="stylesheet" href="css/plugins/pickadate-default.date.css">
    
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="css/style.css">

    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-target="#main-navbar">

    <!-- Preloader -->
    <!--
    <div class="loader bg-white">
        <div class="loader-inner ball-scale-ripple-multiple vh-center">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    -->

    <div class="main-container" id="page">

    <!-- =========================
            HEADER 
        ============================== -->
        <header id="nav2-3" style="position:fixed;width:100%;z-index:100">
            
            <nav class="navbar" id="main-navbar">
            <!-- navbar fixed on top: -->
            <!--  
                <nav class="navbar navbar-fixed-top" id="main-navbar" role="navigation">
            -->
            <!-- navbar static: -->
            <!--
                <nav class="navbar navbar-static-top" id="main-navbar" role="navigation">
            -->
            <!-- background transparent: -->
            <!--
                <nav class="navbar navbar-fixed-top bg-transparent" id="main-navbar" role="navigation">
            -->
                
                <div class="container">
                    <!-- Menu Button for Mobile Devices -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <!-- Image Logo -->
                        <!-- note:
                            recommended sizes
                                width: 150px;
                                height: 35px;
                        -->
                        <!-- <a href="" class="navbar-brand smooth-scroll"><img src="images/logo-black.png" alt="logo"></a> -->
                        <a href="" class="navbar-brand smooth-scroll"><img src="images/jl-logo.png" width=150 height=35 alt="logo"></a>
                        <!-- Image Logo For Background Transparent -->
                        <!--
                            <a href="#" class="navbar-brand logo-black smooth-scroll"><img src="images/logo-black.png" alt="logo" /></a>
                            <a href="#" class="navbar-brand logo-white smooth-scroll"><img src="images/logo-white.png" alt="logo" /></a> 
                        -->
                    </div><!-- /End Navbar Header -->

                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <!-- Menu Links -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#hero1-1" class="smooth-scroll">Home</a></li>
                            <li><a href="#features4-1" class="smooth-scroll">Why JavascriptLabs</a></li>
                            <li><a href="#portfolio2-2" class="smooth-scroll">Portfolio</a></li>
                            <li><a href="#contact2-1" class="smooth-scroll">Contact Us</a></li>
                            <!-- Dropdown Menu -->
<!--                             <li class="dropdown">
                                <a id="dLabel" data-toggle="dropdown" data-target="#" href="#">
                                    Dropdown <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-level" role="menu">
                                  <li><a href="#">Some action</a></li>
                                  <li><a href="#">Some other action</a></li>
                                  <li class="divider"></li>
                                  <li class="dropdown-submenu">
                                    <a tabindex="-1" href="#">Hover me for more options</a>
                                    <ul class="dropdown-menu">
                                      <li><a tabindex="-1" href="#">Second level action</a></li>
                                      <li><a href="#">Second level other</a></li>
                                      <li><a href="#">Second level</a></li>
                                    </ul>
                                  </li>
                                </ul>
                            </li>
 --><!--                             <li><a href="" class="btn-nav btn-grey btn-login">Login</a></li>
                            <li><a href="" class="btn-nav btn-blue btn-signup">Signup</a></li>
 -->                        </ul><!-- /End Menu Links -->
                    </div><!-- /End Navbar Collapse -->

                </div><!-- /End Container -->
            </nav><!-- /End Navbar -->
        </header><!-- =========================
             HERO SECTION
        ============================== -->
        <section id="hero1-1" class="hero bg-img" >
            <div class="overlay"></div>                        
            
            <div class="container vertical-center-rel" >
                <div class="row" >
                    <!-- <div class="overlay"></div> -->
                    <div class="col-md-7">
                        <h1 class="text-white p-t-md">We make something extraordinary</h1>
                        <p class="lead text-white m-b-md ">We have been collaborating with brands and agencies to build meaningful digital interactions since 2007</p>
                        <a href="#contact2-1" class="btn btn-shadow btn-green text-uppercase btn-md smooth-scroll">Contact Us</a>
                    </div>
                </div><!-- /End Row -->
            </div><!-- /End Container -->

        </section><!-- =========================
           FEATURES SECTION 
        ============================== -->
        <section id="features4-1" class="p-y-lg bg-edit">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <h2 class="wow animated animated" style="visibility: visible;">Why Javascript Labs ?</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At rerum odio eum. Tempore eum provident consectetur unde, iure. Unde nemo culpa nulla.</p>    
                        </div>
                    </div>
                </div>
                <!-- Features Row -->
                <div class="row features-block wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="col-md-10 col-md-offset-1 c2">
                        <div class="col-sm-6 img-left clearfix"> 
                            <img src="images/elegant-vintage-the-simple-is-good-quote_23-2147589424.jpg" height=128 width=128 alt="">
                            <h5 class="m-t f-w-900">Simplicity</h5>
                            <p>We believe in Simple.</p>
                        </div>
                        <div class="col-sm-6 img-left clearfix"> 
                            <img src="images/stock-vector-flat-illustration-of-megaphone-with-announce-on-the-bubble-speech-boost-your-business-loudspeaker-502508425.jpg" width=128 height="128" alt="">
                            <h5 class="m-t f-w-900">Boost Productivity</h5>
                            <p>Identifying sustainable and practical ways to enhance productivity and also strengthen organisational agility in order to respond to customers quickly and effectively are likely to be high on many IT leaders’ to-do lists. Both goals are critically important.</p>
                        </div>
                    </div>
                </div>
                <!-- Features Row -->
                <div class="row features-block wow fadeIn new-row-sm" style="visibility: visible; animation-name: fadeIn;">
                    <div class="col-md-10 col-md-offset-1 c2">
                        <div class="col-sm-6 img-left clearfix"> 
                            <img src="images/stock-vector-modern-thin-line-concept-of-artificial-intelligence-and-data-science-technology-simple-vector-432272329.jpg" width=128 height=128 alt="">
                            <h5 class="m-t f-w-900">Capability</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At rerum odio eum. Tempore eum provident consectetur unde, iure. Unde nemo culpa nulla.</p>
                        </div>
                        <div class="col-sm-6 img-left clearfix"> 
                            <img src="images/stock-vector-engineering-building-text-brand-vector-illustrate-243346276.jpg" width=128 height="128" alt="">
                            <h5 class="m-t f-w-900">Shaping the future of Customer</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At rerum odio eum. Tempore eum provident consectetur unde, iure. Unde nemo culpa nulla.</p>
                        </div>
                    </div>
                </div><!-- /End Features Row -->

            </div><!-- /End Container -->
        </section><!-- =========================
           PORTFOLIO
        ============================== -->
        <section id="portfolio2-2" class="p-t-lg p-b-0 bg-edit bg-dark">
            
            <!-- Section Header -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center text-white wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <h2>Latest Projects</h2>
                            <p class="lead">Our portfolio reflects our commitment to building great companies. It takes energy, commitment, agility, focus, insight and experience.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <ul class="portfolio-grid text-white">    
                    <!-- Portfolio Item -->
                    <li class="h caption-2">
                        <figure><img src="http://railsfactory.com/assets/portfolio/portfolio_3.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="caption-box">
                                    <div class="col-xs-7">
                                        <p class="m-b-0">Apigee</p>
                                        <p class="small m-t-0"></p> 
                                    </div>
                                    <div class="col-xs-5">
                                        <a href="images/portfolio1-xl.jpg" class="btn btn-green mp-gallery" title="Project1 Description">View More</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- Portfolio Item -->
                    <li class="h caption-2">
                        <figure><img src="http://railsfactory.com/assets/portfolio/portfolio_1.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="caption-box">
                                    <div class="col-xs-7">
                                        <p class="m-b-0">Populere</p>
                                        <p class="small m-t-0"></p> 
                                    </div>
                                    <div class="col-xs-5">
                                        <a href="images/portfolio2-xl.jpg" class="btn btn-green mp-gallery" title="Project2 Description">View More</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- Portfolio Item -->
                    <li class="h caption-2">
                        <figure><img src="http://railsfactory.com/assets/portfolio/portfolio_2.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="caption-box">
                                    <div class="col-xs-7">
                                        <p class="m-b-0">Caratlane</p>
                                        <p class="small m-t-0"></p> 
                                    </div>
                                    <div class="col-xs-5">
                                        <a href="images/portfolio3-xl.jpg" class="btn btn-green mp-gallery" title="Project3 Description">View More</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- Portfolio Item -->
                    <li class="h caption-2">
                        <figure><img src="http://railsfactory.com/assets/portfolio/portfolio_4.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="caption-box">
                                    <div class="col-xs-7">
                                        <p class="m-b-0">Modus</p>
                                        <p class="small m-t-0"></p> 
                                    </div>
                                    <div class="col-xs-5">
                                        <a href="images/portfolio4-xl.jpg" class="btn btn-green mp-gallery" title="Project4 Description">View More</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- Portfolio Item -->
                    <li class="h caption-2">
                        <figure><img src="http://railsfactory.com/assets/portfolio/portfolio_5.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="caption-box">
                                    <div class="col-xs-7">
                                        <p class="m-b-0">Project 5</p>
                                        <p class="small m-t-0"></p> 
                                    </div>
                                    <div class="col-xs-5">
                                        <a href="images/portfolio5-xl.jpg" class="btn btn-green mp-gallery" title="Project5 Description">View More</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- Portfolio Item -->
                    <li class="h caption-2">
                        <figure><img src="http://railsfactory.com/assets/portfolio/portfolio_6.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="caption-box">
                                    <div class="col-xs-7">
                                        <p class="m-b-0">Project6</p>
                                        <p class="small m-t-0"></p> 
                                    </div>
                                    <div class="col-xs-5">
                                        <a href="images/portfolio6-xl.jpg" class="btn btn-green mp-gallery" title="Project6 Desctiption">View More</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- Portfolio Item -->
                    <li class="h caption-2">
                        <figure><img src="http://railsfactory.com/assets/portfolio/portfolio_7.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="caption-box">
                                    <div class="col-xs-7">
                                        <p class="m-b-0">Project7</p>
                                        <p class="small m-t-0"></p> 
                                    </div>
                                    <div class="col-xs-5">
                                        <a href="images/portfolio1-xl.jpg" class="btn btn-green mp-gallery" title="Project7 Description">View More</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    <!-- Portfolio Item -->
                    <li class="h caption-2">
                        <figure><img src="http://railsfactory.com/assets/portfolio/portfolio_8.jpg" class="img-responsive" alt="">
                            <figcaption>
                                <div class="caption-box">
                                    <div class="col-xs-7">
                                        <p class="m-b-0">Project8</p>
                                        <p class="small m-t-0"></p> 
                                    </div>
                                    <div class="col-xs-5">
                                        <a href="images/portfolio1-xl.jpg" class="btn btn-green mp-gallery" title="Project8 Description">View More</a>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ul><!-- /End Portfolio Grid -->
            </div><!-- /End Container -->           
        </section><!-- =========================
             QUOTE FORM
        ============================== -->
        <section id="contact2-1" class="p-y-lg contact bg-edit">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                            <h2>Get in touch</h2>
                            <p class="lead">We're always standing by and eager to help. Fill out the Project Inquiry form below with some information about your project. Please allow a couple of hours for us to respond.</p>    
                        </div>
                    </div>
                </div>
                
                <div class="row c2">
                    <!-- Contact Info -->
                    <div class="col-md-6 col-md-push-6 center-md">
                            <h4 class="f-w-900">Talk with us for your project</h4>
                            <p>Flies manufacturers, the body. Drive us to greater things, the reason he gave for choosing a great result can be extremely flattering desire to know, which is by all.</p>
                            <p class="m-b-md">The desire of the righteous man of blessed Repudiandae any laborious to elect is in pain, often pain a lot of the soul, which are of the truth, anyone know that he hates. Life and troubles, no exercise of the duties.</p>
                            <ul class="contact-info">
                                <li class="text-edit">
                                    <div style='float:left;height:80px'><i class="icon-map-marker"></i></div>
                                    <div>RailsFactory Inc,<br/>Plug and Play Tech Center,<br/>440 N. Wolfe Rd,<br/>Sunnyvale, CA 94085<br/><strong>USA</strong></div>

                                </li>
                                <li class="text-edit">
                                    <div style='float:left;height:80px'><i class="icon-map-marker"></i></div>
                                    <div>Sedin Technologies Private Limited<br/># A1/1, 49th Street,<br/>7th Avenue, Ashok Nagar,<br/>Chennai, TN, 600083.<br/><strong>INDIA</strong></div>
                                </li>
                                <!-- <li class="text-edit"><i class="icon-clock"></i></li> -->
                                <li class="text-edit"><i class="icon-call"></i>Skype: kishore.vaishnav</li>
                                <li class="text-edit"><i class="icon-envelope"></i><a href="mailto:kishore@sedin.co.in">kishore@sedin.co.in</a></li>
                            </ul>
                    </div>
                    <!-- Contact Form -->
                    <div class="col-md-6 col-md-pull-6">
                        <form class="form-horizontal" id="quoteForm">
                            <!-- Notifications -->
                            <p class="success qf text-center"><i class="fa fa-check"></i> <strong>Your quote has successfully been sent.</strong></p>
                            <p class="failed qf text-center"><i class="fa fa-exclamation-circle"></i><strong> Something went wrong!</strong></p>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="qName" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="qEmail" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="qPhone" placeholder="Phone Number" required="">
                            </div>
                            <div class="form-group">
                                <textarea id="qMessage" rows="5" class="form-control" placeholder="Details" required=""></textarea>
                            </div> 
                            <div class="form-group m-b-0">
                                <button type="submit" class="btn btn-shadow btn-green">CONTACT US</button>
                            </div>
                        </form>
                    </div><!-- /End Contact Form Col -->
                </div><!-- /End Row -->

            </div><!-- /End Container -->
        </section><!-- =========================
             FOOTER
        ============================== -->
        <footer id="footer6-1" class="footer f6 p-y-md bg-edit bg-grey">                
            <div class="container">
                <div class="row">
                    <!-- Footer Logo and Text -->
                    <div class="col-md-11">
                        <img src="images/just_logo.png" height=50 width=180 alt="">
                        <p class="m-t">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At rerum odio eum. Tempore eum provident consectetur unde, iure. Unde nemo culpa nulla.</p>
                        <div class="footer-social social-btn m-t-md inverse">
                            <a href="#" class="sb-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="sb-google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="sb-instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <!-- Footer Links -->
                    <div class="col-md-1">
                        <p><strong><a href="#page">Go Top</a></strong></p>
<!--                         <ul class="footer-links m-t">
                            <li class="m-b"><a href="#" class="edit">Press</a></li>
                            <li class="m-b"><a href="#" class="edit">Terms of service</a></li>
                            <li class="m-b"><a href="#" class="edit">About</a></li>
                            <li class="m-b"><a href="#" class="edit">Contact</a></li>
                        </ul>
 -->                    </div>
                    <!-- Footer Links -->
                    <div class="col-md-2">
                        <!-- <p><strong><a href="">About</a></strong></p> -->
<!--                         <p><strong>Section Footer 2</strong></p>
                        <ul class="footer-links m-t">
                            <li class="m-b"><a href="#" class="edit">Other Link</a></li>
                            <li class="m-b"><a href="#" class="edit">Awesome Link</a></li>
                            <li class="m-b"><a href="#" class="edit">Link Wonderful</a></li>
                            <li class="m-b"><a href="#" class="edit">Gorgeous Link</a></li>
                        </ul>
 -->                    </div>
                    <!-- Footer Links -->
<!--                     <div class="col-md-2">
                        <p><strong>Section Footer 3</strong></p>
                        <ul class="footer-links m-t">
                            <li class="m-b"><a href="#" class="edit">Link Lovely</a></li>
                            <li class="m-b"><a href="#" class="edit">Other Link</a></li>
                            <li class="m-b"><a href="#" class="edit">Pretty Link</a></li>
                            <li class="m-b"><a href="#" class="edit">Link Smart</a></li>
                        </ul>
                    </div> -->
                </div><!--end of row-->
            </div><!--end of container-->
        </footer></div><!-- /End Main Container -->

    <!-- Back to Top Button -->
    <!--
    <a href="#" class="top">Top</a>
    -->


    <!-- =========================
         SCRIPTS 
    ============================== -->
    <script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script><script src="js/plugins/jquery1.11.2.min.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/jquery.easing.1.3.min.js"></script>
    <script src="js/plugins/jquery.countTo.js"></script>
    <script src="js/plugins/jquery.formchimp.min.js"></script>
    <script src="js/plugins/jquery.jCounter-0.1.4.js"></script>
    <script src="js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins/jquery.vide.min.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
    <script src="js/plugins/twitterFetcher_min.js"></script>
    <script src="js/plugins/wow.min.js"></script>
    <script src="js/plugins/picker.js"></script>
    <script src="js/plugins/picker.date.js"></script>
    <!-- Custom Script -->
    <script src="js/custom.js"></script>

    

<iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;" title="Twitter analytics iframe"></iframe></body></html>