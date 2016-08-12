<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BnP Love Story</title>
    <!-- Bootstrap 3.2 -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <!-- Font Awesome 4.2.0 -->
    <link href="{{url('css/font-awesome-4.2.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- ilove Font 1.0 -->
    <link href="{{url('css/ilove/font-ilove.css')}}" rel="stylesheet">   
    <!-- Animate -->
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <!-- Magnific popup -->
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.css')}}">
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner">
          <div class="rect1"></div>
          <div class="rect2"></div>
          <div class="rect3"></div>
          <div class="rect4"></div>
          <div class="rect5"></div>
        </div>
    </div>
   
    <!--Carousel-->
    <div id="myCarousel" class="carousel slide carousel-fade">  

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div id="progressbar"></div>
            <!-- Wrapper for slides -->           
            <div class="carousel-inner">
                <div class="messages">
                        <h1 class="slideInDown wow animated" data-wow-delay="0.5s">B <span class="heart pulsing fa fa-heart"></span> P</h1>
                        <div id="time"></div>
                        <h4 class="fadeIn wow animated" data-wow-delay="1.2s">Are you ready to find out my gift for you?</h4>
                        <div class="btn-special slideInUp wow animated page-scroll" data-wow-delay="0.7s">
                            <a href="#about"><span>Discover</span></a>
                        </div>          
                </div>
                <div class="item active">
                    <div class="carousel-img" style="background-image:url(images/carousel-1.jpg)"></div> 
                    <audio autoplay="true" src="{{url('music/motnha.mp3')}}">                            
                </div> 
                <div class="item">
                    <div class="carousel-img" style="background-image:url(images/carousel-2.jpg)"></div> 
                </div>
                <div class="item">
                    <div class="carousel-img" style="background-image:url(images/carousel-3.jpg)"></div> 
                </div>                                              
            </div>
            <div class="overlay2"></div>                
            <div id="geo" class="geo">
               <div id="output" class="geo">
               </div>
            </div>             
    </div>
    
    <div id="about"></div>    
    <!--Navbar-->
    <div class="topbar-nav">        
        <nav class="navbar navbar-default navbar-custom" role="navigation">
            <div class="container">        
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button> 
                    <a class="navbar-brand" href="#page-top">
                        <img src="images/logo.png" alt="logo">
                    </a>                              
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from Adam & Eve link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>                                               
                        <li class="page-scroll">
                            <a href="#about">B & P</a>
                        </li>
                        <li class="page-scroll dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#moments">Big Moments</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#favourites">Favorite List</a>                           
                        </li>  
                        <li class="page-scroll dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#blog">Our Blog</a>
                        </li>                                                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            
            </div>
        </nav>
    </div>   
    
    <!--Adam & EVE Section-->
    <section id="aboutthem" class="white">
        <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 class="wow fadeInUp underline padtop50" data-wow-delay="0.5s">Welcome My Everything</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.7s">
                            Welcome to our new site. Discover and answer all the question below, and finnaly , you will found my secret message
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6">
                        <ul class="ch-grid man wow flipInX" data-wow-delay="0.5s">
                            <li>
                                <div class="ch-item ch-img-1">
                                    <div class="ch-info">
                                        <h3>This is B</h3>
                                        <p>B is handsome <br> B has beatyful skin <br> B always smile <br> Be like B</p>
                                    </div>
                                </div>
                            </li>
                        </ul>   
                    </div>
                    <div class="and">&amp;</div> 
                    <div class="col-md-6">
                        <ul class="ch-grid woman wow flipInX" data-wow-delay="0.5s">
                            <li>
                                <div class="ch-item ch-img-2">
                                    <div class="ch-info">
                                        <h3>This is P</h3>
                                        <p>P is ugly <br> P has acnes<br> P always yelling <br> Don't like P</p>
                                    </div>
                                </div>
                            </li>
                        </ul>   
                    </div>              
                </div>
            </div>
        </div>        
        <!--Loveline-->
        <div class="container">                    
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 class="wow fadeInUp underline padtop50" data-wow-delay="0.5s">Our Loveline</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.7s">
                            <strong>Love Moments</strong> are special and it deserve to be recorded and to be always remembered!  our loveline is just summerize some of our important and happy moments.
                        </p>
                    </div>                
                    <ul class="timeline"> 
                        <li class="timeline-question" > 
                            <div class="timeline-badge wow fadeInUp" data-wow-delay="0.5s"><i class="icon icolove-lips"></i></div> 
                            <div class="timeline-panel wow fadeInLeft" data-wow-delay="0.7s"> 
                                <div class="timeline-heading"> 
                                    <h4 class="timeline-title">Our First Meet</h4>
                                </div> 
                                <div class="timeline-body"> 
                                    <p>
                                        It wasn't that long, and it certainly wasn't the kind of kiss you see in movies these days, but it was wonderful in its own way, and all I can remember about the moment is that when our lips touched, I knew the memory would last forever.
                                        Question: Minh quen nhau nam nao
                                    </p>
                                    <input type="text" id="q1" placeholder="Ex:2015"> 
                                    <a onclick="validateQuestion(1)">Submit</a>
                                </div> 
                            </div> 
                        </li>
                        <li class="timeline-inverted negative100" style="display:none" id="li_tl1"> 
                            <div class="timeline-badge wow fadeInUp" data-wow-delay="0.5s"><i class="icon icolove-lips"></i></div> 
                            <div class="timeline-panel wow fadeInLeft" data-wow-delay="0.7s"> 
                                <div class="timeline-heading"> 
                                    <h4 class="timeline-title">Our First Kiss</h4>
                                </div> 
                                <div class="timeline-body"> 
                                    <p>
                                        It wasn't that long, and it certainly wasn't the kind of kiss you see in movies these days, but it was wonderful in its own way, and all I can remember about the moment is that when our lips touched, I knew the memory would last forever.
                                        Question: Ngay first kiss la ngay nao
                                    </p>
                                    <input type="text" id="q2" placeholder="Ex:26/03/2015"> 
                                    <a onclick="validateQuestion(2)">Submit</a>
                                </div> 
                            </div> 
                        </li>
                         
                        <li class=class="negative75" style="display:none" id="li_tl2"> 
                            <div class="timeline-badge time wow fadeInUp" data-wow-delay="0.5s"><i class="icon icolove-ring"></i></div> 
                            <div class="timeline-panel wow fadeInRight" data-wow-delay="0.7s"> 
                                <div class="timeline-heading"> 
                                    <h4 class="timeline-title">Date again</h4>
                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 20 Dec 2010 - By Eve</small></p> 
                                </div> 
                                <div class="timeline-body"> 
                                    <p>
                                        Her boyfriend gives her a Mercedes, [her friends] say, 'Oh, that's nice.' But her boyfriend gives her a diamond, they say, 'Oh, he's serious.' It's not just the gift of love-it's the gift of commitment. She's not jumping up and down because she got a diamond ring but because she got a guy!
                                        Question: Ngay len fortess la ngay nao
                                    </p>      
                                    <input type="text" id="q3" placeholder="Ex:26/03/2015"> 
                                    <a onclick="validateQuestion(3)">Submit</a>                                
                                </div> 
                            </div> 
                        </li>
                        
                        <li class="timeline-inverted negative50" style="display:none" id="li_tl3"> 
                            <div class="timeline-badge wow fadeInUp" data-wow-delay="0.5s"><i class="icon icolove-married"></i></div> 
                            <div class="timeline-panel wow fadeInLeft" data-wow-delay="0.7s"> 
                                <div class="timeline-heading"> 
                                    <h4 class="timeline-title">Official</h4>
                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 24 May 2011 - By Adam</small></p> 
                                </div> 
                                <div class="timeline-body"> 
                                    <p>
                                        Marriage has made me a lot happier and I'm deeply in love with my wife, and I thank God for her every day.
                                        Question: Ngay len chinh thuc la ngay nao
                                    </p>
                                    <input type="text" id="q4" placeholder="Ex:26/03/2015"> 
                                    <a onclick="validateQuestion(4)">Submit</a>  
                                </div> 
                            </div> 
                        </li>
                        
                        <li class="negative75" style="display:none" id="li_tl4"> 
                            <div class="timeline-badge time wow fadeInUp" data-wow-delay="0.5s"><i class="icon icolove-married"></i></div> 
                            <div class="timeline-panel wow fadeInRight" data-wow-delay="0.7s"> 
                                <div class="timeline-heading"> 
                                    <h4 class="timeline-title">I'm Pregnant</h4>
                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 12 Jan 2012 - By Eve</small></p> 
                                </div> 
                                <div class="timeline-body"> 
                                    <p>
                                        Of course I can do this. I'm pregnant, not brain-damaged. My condition doesn't change my personality.
                                        Question: Bao nam nua cuoi
                                    </p>  
                                    <input type="text" id="q5" placeholder="Ex:9"> 
                                    <a onclick="validateQuestion(5)">Submit</a>                                      
                                </div> 
                            </div> 
                        </li>
                    </ul>
                </div>
            </div>                               
        </div>
        <div class="separator"></div>       
    </section>

    <!--Family Section-->
    <section id="family" class="white" >
        <div class="container" id="li_tl5">    
            <div class="row">     
                <!--Our Family-->           
                <div class="col-md-12">
                    <!--Fun Facts-->
                    <div id="startcounting" class="row count">
                        <div class="col-md-12">
                            <div class="heading wow fadeInUp" data-wow-delay="0.5s">
                                <h2 class="wow fadeIn underline padtop50">Fun Facts</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.7s">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            </div>                                                   
                            <div class="counting col-ms-12 col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.7s">
                                <div class="fun-facts ico"><span class="icon icolove-movie"></span></div>
                                <span class="counts" data-from="0" data-to="300" data-speed="5000" data-refresh-interval="50">0</span>
                                <h5>Movies Watched</h5>
                            </div>
                            <div class="counting col-ms-12 col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.7s">
                                <div class="fun-facts ico"><span class="icon icolove-coffee"></span></div>
                                <span class="counts" data-from="0" data-to="550" data-speed="5000" data-refresh-interval="50">0</span>
                                <h5>Cup of Coffee</h5>
                            </div>                
                            <div class="counting col-ms-12 col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.7s">
                                <div class="fun-facts ico"><span class="icon icolove-party"></span></div>
                                <span class="counts" data-from="0" data-to="150" data-speed="5000" data-refresh-interval="50">0</span>
                                <h5>Fun Parties</h5>
                            </div>
                            <div class="counting col-ms-12 col-sm-6 col-md-3 wow flipInY" data-wow-delay="0.7s">
                                <div class="fun-facts ico"><span class="icon icolove-gamepad"></span></div>
                                <span class="counts" data-from="0" data-to="410" data-speed="5000" data-refresh-interval="50">0</span>
                                <h5>Game Played</h5>
                            </div>                                                
                        </div>
                    </div>                       
                                         
                </div>
            </div>
        </div>
    </section>
    
    <!--Big Moments-->
    <section id="moments">
        <div class="container-fluid">
            <div class="row">
                <div class="padtop75 white"></div>
                <div class="col-lg-12 video-parallax">          
                    <div class="overlay"></div>
                    <video id="bgvideo" preload="auto" autoplay loop muted="muted">
                       <source src="video/wedding.webm" type="video/webm">
                       <source src="video/wedding.mp4" type="video/mp4">
                       <source src="video/wedding.ogg" type="video/ogg">
                       Your browser does not support the video element.
                    </video>            
                    <div class="col-md-12 playvid">
                        <a class="fa fa-play-circle popup-vimeo wow zoomInDown" data-wow-duration="1s" data-wow-delay="0.9s" href="http://vimeo.com/54428266"></a>                    
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid white">         
            <!--Moments to remember-->
            <div class="container">           
                <div class="row">            
                    <div class="col-md-12">
                        <div class="heading">
                            <h2 class="wow fadeInUp underline padtop50" data-wow-delay="0.5s">Moments to Remember</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.7s">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="bigmoments">
                <div id="owl-moments" class="owl-carousel">
                   <div class="col-xs-12 col-sm-6 col-md-3 owl-item">
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g1.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g1.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-photo fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g5.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g5.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-photo fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                   </div>
                   
                   <div class="col-xs-12 col-sm-6 col-md-3 owl-item">
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g2.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g2.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-video-camera fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g6.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g6.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-video-camera fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                   </div>
                   
                   <div class="col-xs-12 col-sm-6 col-md-3 owl-item">
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g3.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g3.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-photo fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>   
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g7.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g7.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-photo fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>   
                   </div>
                   
                   <div class="col-xs-12 col-sm-6 col-md-3 owl-item">
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g4.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g4.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-video-camera fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g8.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g8.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-video-camera fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                   </div>
                   <div class="col-xs-12 col-sm-6 col-md-3 owl-item">
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g1.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g1.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-photo fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g5.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g5.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-photo fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                   </div>
                   
                   <div class="col-xs-12 col-sm-6 col-md-3 owl-item">
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g2.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g2.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-video-camera fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g6.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g6.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-video-camera fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                   </div>
                   
                   <div class="col-xs-12 col-sm-6 col-md-3 owl-item">
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g3.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g3.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-photo fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>   
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g7.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g7.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-photo fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>   
                   </div>
                   
                   <div class="col-xs-12 col-sm-6 col-md-3 owl-item">
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g4.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g4.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-video-camera fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                        <ul class="grid cs-style-3">
                            <li>
                                <figure>
                                    <img src="images/g8.jpg" class="img-responsive" alt="portfolio">
                                    <a href="images/g8.jpg" class="popup-image" data-effect="mfp-zoom-in"><span class="fa fa-video-camera fa-2x"></span></a>
                                    <figcaption>
                                        <h4>Portfolio</h4>
                                        <span>by Jacob Cummings</span>    
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                   </div>                        
                </div>
             </div>
            <!--Special Events-->
            <div class="container">                           
                <div class="row">            
                    <div class="col-md-12">
                        <div class="heading">
                            <h2 class="wow fadeInUp underline padtop50" data-wow-delay="0.5s">Special Events</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.7s">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="event wow flipInX" data-wow-delay="0.5s">
                            <i class="icon icolove-home"></i>
                            <h4 class="text-uppercase">Moved to our new home</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus, leo at pretium commodo</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="event alternative wow flipInX" data-wow-delay="0.5s">
                            <i class="icon icolove-plane"></i>
                            <h4 class="text-uppercase">Malaysia Trip</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus, leo at pretium commodo</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="event wow flipInX" data-wow-delay="0.5s">
                            <i class="icon icolove-car"></i>
                            <h4 class="text-uppercase">Got Our New Car</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus, leo at pretium commodo</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="event alternative wow flipInX" data-wow-delay="0.5s">
                            <i class="icon icolove-like"></i>
                            <h4 class="text-uppercase">Adam Got His Dream Job</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus, leo at pretium commodo</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="event wow flipInX" data-wow-delay="0.5s">
                            <i class="icon icolove-graduate"></i>
                            <h4 class="text-uppercase">EVE honored her PhD</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus, leo at pretium commodo</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="event alternative wow flipInX" data-wow-delay="0.5s">
                            <i class="icon icolove-football"></i>
                            <h4 class="text-uppercase">Attended Brazil Worldcup</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam rhoncus, leo at pretium commodo</p>
                        </div>
                    </div>

                </div>
            </div>                                                  
            <div class="separator"></div>
        
        </div>
    </section>
    
    <!--Favourites List-->
    <section id="favourites" class="white">       
        <div class="container">
            <div class="row">               
                <div class="col-md-12">
                    <div class="heading">
                        <h2 class="wow fadeIn underline padtop50" data-wow-delay="0.5s">Our Favourites</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.7s">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>                         
                </div>
                <div class="col-md-12 favlist">             
                    <img src="images/couple.jpg" alt="couple">
                    <div class="favlist-title">
                        <div class="favlist-name">Adam</div>
                        <div class="favlist-name">Eve</div>
                    </div>
                    
                    <ul class="timeline">
                        <li>
                            
                            <div class="timeline-badge tooltips wow fadeIn" data-wow-delay="0.5s" data-toggle="tooltip" data-placement="top" title="Favourite Meal"><i class="icon icolove-meal"></i></div> 
                            <div class="timeline-left wow fadeInLeft" data-wow-delay="0.7s">
                                <h4 class="timeline-title">Pasta White Sause</h4>
                                <p>Sed ut perspiciatis unde omn iste natus error sit voluptatem accusantium </p>
                            </div>
                            <div class="timeline-right wow fadeInRight" data-wow-delay="0.7s">
                                <h4 class="timeline-title">Pizza Peproni</h4>
                                <p>Sed ut perspiciatis unde omn iste natus error sit voluptatem accusantium </p>
                            </div>                        
                            
                            
                        </li>
                        
                        <li>
                            
                            <div class="timeline-badge tooltips wow fadeIn" data-wow-delay="0.5s" data-toggle="tooltip" data-placement="top" title="Favourite Movie"><i class="icon icolove-film"></i></div> 
                            <div class="timeline-left wow fadeInLeft" data-wow-delay="0.7s">
                                <h4 class="timeline-title">Twilight Saga</h4>
                                <p>Sed ut perspiciatis unde omn iste natus error sit voluptatem accusantium </p>
                            </div>
                            <div class="timeline-right wow fadeInRight" data-wow-delay="0.7s">
                                <h4 class="timeline-title">Transformers</h4>
                                <p>Sed ut perspiciatis unde omn iste natus error sit voluptatem accusantium </p>
                            </div>                        
                            
                            
                        </li>
                        
                        <li>
                            
                            <div class="timeline-badge tooltips wow fadeIn" data-wow-delay="0.5s" data-toggle="tooltip" data-placement="top" title="Favourite Color"><i class="icon icolove-palette"></i></div> 
                            <div class="timeline-left wow fadeInLeft" data-wow-delay="0.7s">
                                <h4 class="timeline-title">Blue</h4>
                                <p>Sed ut perspiciatis unde omn iste natus error sit voluptatem accusantium </p>
                            </div>
                            <div class="timeline-right wow fadeInRight" data-wow-delay="0.7s">
                                <h4 class="timeline-title">Pink</h4>
                                <p>Sed ut perspiciatis unde omn iste natus error sit voluptatem accusantium </p>
                            </div>                        
                            
                            
                        </li>
                        
                        <li>
                            
                            <div class="timeline-badge tooltips wow fadeIn" data-wow-delay="0.5s" data-toggle="tooltip" data-placement="top" title="Favourite Pet"><i class="icon icolove-pet"></i></div> 
                            <div class="timeline-left wow fadeInLeft" data-wow-delay="0.7s">
                                <h4 class="timeline-title">Dogs</h4>
                                <p>Sed ut perspiciatis unde omn iste natus error sit voluptatem accusantium </p>
                            </div>
                            <div class="timeline-right wow fadeInRight" data-wow-delay="0.7s">
                                <h4 class="timeline-title">Cats</h4>
                                <p>Sed ut perspiciatis unde omn iste natus error sit voluptatem accusantium </p>
                            </div>                        
                            
                            
                        </li>
                    </ul>
                                
                </div>
                
            </div>            
        </div>       
        <!--common Favorites Parallax-->
        <div class="container-fluid commonfav">
            <div class="row">
                <div class="col-lg-12 parallax-section common-parallax">
                    <div class="overlay"></div>
                    <div class="col-md-12">
                        <h2 class="underline2 wow fadeIn" data-wow-delay="0.5s">Common Favorites</h2>
                        <div id="owl-common" class="owl-carousel wow fadeInUp" data-wow-delay="0.7s">
                            <div class="owl-item">
                                <div class="common">
                                    <div class="icon icolove-place common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Place"></div>
                                    <h4>Maldive Islands</h4>
                                </div>
                                <div class="common">
                                    <div class="icon icolove-book common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Book"></div>
                                    <h4>Pride and Prejudice</h4>
                                </div>                                                       
                            </div> 
                            
                            <div class="owl-item">
                                <div class="common">
                                    <div class="icon icolove-weather common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Season"></div>
                                    <h4>Winter & Spring</h4>
                                </div>
                                <div class="common">
                                    <div class="icon icolove-music common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Song"></div>
                                    <h4>Your Song - Elton John</h4>
                                </div>                                                       
                            </div>
                            
                            <div class="owl-item">
                                <div class="common">
                                    <div class="icon icolove-mic common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Singer"></div>
                                    <h4>Frank Sinatra</h4>
                                </div>
                                <div class="common">
                                    <div class="icon icolove-clothes common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Brand"></div>
                                    <h4>Dolce and Gabbana</h4>
                                </div>                                                       
                            </div> 
                            
                            <div class="owl-item">
                                <div class="common">
                                    <div class="icon icolove-place common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Place"></div>
                                    <h4>Maldive Islands</h4>
                                </div>
                                <div class="common">
                                    <div class="icon icolove-book common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Book"></div>
                                    <h4>Pride and Prejudice</h4>
                                </div>                                                       
                            </div> 
                            
                            <div class="owl-item">
                                <div class="common">
                                    <div class="icon icolove-weather common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Season"></div>
                                    <h4>Winter & Spring</h4>
                                </div>
                                <div class="common">
                                    <div class="icon icolove-music common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Song"></div>
                                    <h4>Your Song - Elton John</h4>
                                </div>                                                       
                            </div>
                            
                            <div class="owl-item">
                                <div class="common">
                                    <div class="icon icolove-mic common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Singer"></div>
                                    <h4>Frank Sinatra</h4>
                                </div>
                                <div class="common">
                                    <div class="icon icolove-clothes common-icon tooltips" data-toggle="tooltip" data-placement="top" title="Favourite Brand"></div>
                                    <h4>Dolce and Gabbana</h4>
                                </div>                                                       
                            </div>                                                                                                                                                      
                        </div>

                    </div>
                </div> 
            </div>
        </div>
        
    </section>
    
    <!--Blog Section-->
    <section id="blog" class="white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2 class="wow fadeInUp underline padtop50" data-wow-delay="0.5s">Our Blog</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div> 
                    <div class="fa fa-times blog-close-content"></div>
                    <div id="blog-ajax-content"></div>           
                    <div id="blogs" class="wow fadeInUp" data-wow-delay="0.5s">
                      <div class="blog cs-style-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#blog1" class="blog-more">
                            <figure>
                                <img src="images/blog/1.jpg" class="img-responsive" alt="blog">
                            </figure>
                        </a>
                        <div class="date">25 Jan</div>
                        <div class="year">2014</div>
                        <h4><a href="#">Tourist Taking Photos</a></h4>
                        <p>Attribution not required but appreciated, you can share our website with your friends to offer you more quality photos.</p>
                        <div class="stats">By : <a href="#">Webyzona</a> | <a href="#">0 Comments</a></div>
                      </div>
    
                      <div class="blog cs-style-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#blog2" class="blog-more">
                            <figure>
                                <img src="images/blog/2.jpg" class="img-responsive" alt="blog">
                            </figure>
                        </a>
                        <div class="date">18 Feb</div>
                        <div class="year">2014</div>
                        <h4><a href="#">Tourist Taking Photos</a></h4>
                        <p>Attribution not required but appreciated, you can share our website with your friends to offer you more quality photos.</p>
                        <div class="stats">By : <a href="#">Webyzona</a> | <a href="#">0 Comments</a></div>
                      </div>
                      
                      <div class="blog cs-style-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#blog3" class="blog-more">
                            <figure>
                                <img src="images/blog/3.jpg" class="img-responsive" alt="blog">
                            </figure>
                        </a>
                        <div class="date">11 Dec</div>
                        <div class="year">2014</div>
                        <h4><a href="#">Tourist Taking Photos</a></h4>
                        <p>Attribution not required but appreciated, you can share our website with your friends to offer you more quality photos.</p>
                        <div class="stats">By : <a href="#">Webyzona</a> | <a href="#">0 Comments</a></div>
                      </div>
                                        
                      <div class="blog cs-style-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#blog4" class="blog-more">
                            <figure>
                                <img src="images/blog/4.jpg" class="img-responsive" alt="blog">
                            </figure>
                        </a>
                        <div class="date">1 Feb</div>
                        <div class="year">2013</div>
                        <h4><a href="#">Tourist Taking Photos</a></h4>
                        <p>Attribution not required but appreciated, you can share our website with your friends to offer you more quality photos.</p>
                        <div class="stats">By : <a href="#">Webyzona</a> | <a href="#">0 Comments</a></div>
                      </div>
                      
                      <div class="blog cs-style-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#blog5" class="blog-more">
                            <figure>
                                <img src="images/blog/5.jpg" class="img-responsive" alt="blog">
                            </figure>
                        </a>
                        <div class="date">18 Sep</div>
                        <div class="year">2013</div>
                        <h4><a href="#">Tourist Taking Photos</a></h4>
                        <p>Attribution not required but appreciated, you can share our website with your friends to offer you more quality photos.</p>
                        <div class="stats">By : <a href="#">Webyzona</a> | <a href="#">0 Comments</a></div>
                      </div>   
                      
                      <div class="blog cs-style-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#blog6" class="blog-more">
                            <figure>
                                <img src="images/blog/6.jpg" class="img-responsive" alt="blog">
                            </figure>
                        </a>
                        <div class="date">28 Jan</div>
                        <div class="year">2013</div>
                        <h4><a href="#">Tourist Taking Photos</a></h4>
                        <p>Attribution not required but appreciated, you can share our website with your friends to offer you more quality photos.</p>
                        <div class="stats">By : <a href="#">Webyzona</a> | <a href="#">0 Comments</a></div>
                      </div>
                                        
                      <div class="blog cs-style-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#blog7" class="blog-more">
                            <figure>
                                <img src="images/blog/7.jpg" class="img-responsive" alt="blog">
                            </figure>
                        </a>
                        <div class="date">15 Jan</div>
                        <div class="year">2013</div>
                        <h4><a href="#">Tourist Taking Photos</a></h4>
                        <p>Attribution not required but appreciated, you can share our website with your friends to offer you more quality photos.</p>
                        <div class="stats">By : <a href="#">Webyzona</a> | <a href="#">0 Comments</a></div>
                      </div>
                      
                      <div class="blog cs-style-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#blog8" class="blog-more">
                            <figure>
                                <img src="images/blog/8.jpg" class="img-responsive" alt="blog">
                            </figure>
                        </a>
                        <div class="date">16 Apr</div>
                        <div class="year">2013</div>
                        <h4><a href="#">Tourist Taking Photos</a></h4>
                        <p>Attribution not required but appreciated, you can share our website with your friends to offer you more quality photos.</p>
                        <div class="stats">By : <a href="#">Webyzona</a> | <a href="#">0 Comments</a></div>
                      </div>
                      
                      <div class="blog cs-style-3 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="#blog9" class="blog-more">
                            <figure>
                                <img src="images/blog/9.jpg" class="img-responsive" alt="blog">
                            </figure>
                        </a>
                        <div class="date">24 Aug</div>
                        <div class="year">2013</div>
                        <h4><a href="#">Tourist Taking Photos</a></h4>
                        <p>Attribution not required but appreciated, you can share our website with your friends to offer you more quality photos.</p>
                        <div class="stats">By : <a href="#">Webyzona</a> | <a href="#">0 Comments</a></div>
                      </div>
                                                                          
                    </div>            
                </div>
            </div>
        </div>
        <div class="separator"></div>
    </section>     
    
    <!--Footer Section-->
    <section class="footer">    
        <!--Footer Two-->
        <div class="container-fluid dark footer2">
            <div class="container">
                <div class="row">           
                <div class="col-md-12">
                    <!--<img src="images/logo-grey.png" alt="logo"> -->                  
                    <p>© Webyzona 2014 - All Rights Reserved. Made With Love For You Only</p>
                    <div class="social-icons">
                        <ul>
                            <li class="twitter">
                            <a href="http://www.twitter.com" target="_blank">Twitter</a>
                            </li>
                            
                            <li class="facebook">
                            <a href="http://www.facebook.com" target="_blank">Facebook</a>
                            </li>
                            
                            <li class="youtube">
                            <a href="http://www.youtube.com" target="_blank">YouTube</a>
                            </li>
                            
                            <li class="googleplus">
                            <a href="http://www.plus.google.com" target="_blank">Google +r</a>
                            </li>
                            
                            <li class="pinterest">
                            <a href="http://www.pinterest.com/" target="_blank">Pinterest</a>
                            </li>   

                            <li class="linkedin">
                            <a href="http://www.linkedin.com" target="_blank">Linkedin</a>
                            </li>                                                                                                                                               
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>            

    <!-- Al JS Plugins -->
    <script src="{{url('js/modernizr.custom.js')}}"></script>
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/jquery-ui.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery.easing.min.js')}}"></script>
    <script src="{{url('js/jquery.sticky.js')}}"></script>
    <script src="{{url('js/jquery.parallax.js')}}"></script>
    <script src="{{url('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{url('js/annyang.min.js')}}"></script>
    <script src="{{url('js/wow.min.js')}}"></script>
    <script src="{{url('js/waypoints.min.js')}}"></script>
    <script src="{{url('js/smoothscrolling.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>    
    <script src="{{url('js/fss.js')}}"></script>      
    <script src="{{url('js/geo.js')}}"></script>      
    <script src="{{url('js/jquery.countTo.js')}}"></script>
    <script src="{{url('js/jquery.mixitup.min.js')}}"></script>
    <script src="{{url('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('js/slide-fade-content.js')}}"></script>
    <script src="{{url('js/twitter/jquery.tweet.js')}}"></script>
    <script src="{{url('js/prefixfree.js')}}"></script>
    <script src="{{url('js/countup.js')}}"></script>
    <script src="{{url('js/modernizr.hover.js')}}"></script>
    <script>
        function validateQuestion(id)
        {
            var question_id = '#q'+id;
            var ans = $(question_id).val();
            switch(id){
                case 1:
                    if (ans == '2005') $('#li_tl'+id).show();
                    else $(question_id).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
                    break;
                case 2:
                    if (ans == '20/02/2010') $('#li_tl'+id).show();
                    else $(question_id).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
                    break;
                case 3:
                    if (ans == '02/04/2015') $('#li_tl'+id).show();
                    else $(question_id).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
                    break;
                case 4:
                    if (ans == '29/04/2015') $('#li_tl'+id).show();
                    else $(question_id).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
                    break;
                case 5:
                    if (ans == '3') $('#li_tl'+id).show();
                    else $(question_id).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
                    break;
            }
        }
    </script>
  </body>
</html>

