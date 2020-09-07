<!DOCTYPE html>
 <?php
// Connects to your Database
 session_start();
if(!($_SESSION['user']))
{
            header('Location:http://localhost:8080/login.php');
}
 
  if(isset($_GET['logout']))
        {
            $_SESSION["invalid"] = "true";
             unset($_SESSION["user"]);
            session_unset();
            unset($_SESSION['login']);
            session_destroy();
                      header('Location:http://localhost:8080/index.php');

            
        }
  if(isset($SESSION['user']))
        {
          header('Location:http://localhost:8080/index.php');
        }
?> 

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Treverse Pakistan</title>

    <!-- voyage -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <script src="js/jquery.min.js"></script>
    <!---script---->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />
    <script src="js/jquery.bxslider.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                auto: true,
                autoControls: true,
                minSlides: 4,
                maxSlides: 4,
                slideWidth:450,
                slideMargin: 10
            });
        });
    </script>
    <!---//script---->
    <!---smoth-scrlling---->
    <script type="text/javascript">
        $(document).ready(function(){

  $("#login").click(function(){
    $(location).attr('href','login.php');
   
            $('a[href^="#"]').on('click',function (e) {
                e.preventDefault();
                var target = this.hash,
                        $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 1000, 'swing', function () {
                    window.location.hash = target;
                });
            });
        });
    </script>
    <!---//smoth-scrlling---->
    <!----start-top-nav-script---->
    <script type="text/javascript" src="js/flexy-menu.js"></script>
    <script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
    <!----//End-top-nav-script---->
    <!---webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!---webfonts---->
    <!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
    <!--end slider -->
    <!-- /voyage-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://www.google.com/fonts#UsePlace:use/Collection:PT+Sans" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/modifications.css">
</head><!--/head-->

<body>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="topmenu">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Places <i class="icon-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                <a href="coastalareas.php"  >Coastal Areas  <i ></i></a>
                                <ul class="dropdown-menu">
                                </ul>
                                    <div class="collapse in">
                                            <ul>

                                                <li><a href="gawadar.php"> Gawadar</a></li>
                                                <li><a href="jiwani.php"> Jiwani </a></li>
                                                 <li><a href="kundimallir.php"> Kund Mallir</a></li>
                                                <li><a href="makran.php"> Makran Cooastal Highway </a></li>
                                                 <li><a href="ormara.php"> Ormara</a></li>
                                               
                                            </ul>
                                        </div>


                                   
                                     <li class="dropdown">
                                <a href="lakes.php"  >Lakes  <i ></i></a>
                                <ul class="dropdown-menu">
                                </ul>
                                    <div class="collapse in">
                                            <ul>

                                                <li><a href="snow_lake.php"> Snow Lake</a></li>
                                                <li><a href="rush_lake.php"> Rush Lake </a></li>
                                                 <li><a href="ratigali_lake.php"> Rati Gali lake</a></li>
                                               
                                            </ul>
                                        </div>

                                     <li class="dropdown">
                                <a href="mountains.php"  >Mountains  <i ></i></a>
                                <ul class="dropdown-menu">
                                </ul>
                                    <div class="collapse in">
                                            <ul>

                                                <li><a href="k2.php"> K2</a></li>
                                                <li><a href="nangaparbat.php"> Nanga Parbat </a></li>
                                                 
                                            </ul>
                                        </div>

                                     <li class="dropdown">
                                <a href="deserts.php"  >Deserts  <i ></i></a>
                                <ul class="dropdown-menu">
                                </ul>
                                    <div class="collapse in">
                                            <ul>

                                                <li><a href="indusvalleydesert.php"> Indus Valley Desert</a></li>
                                                <li><a href="thaldesert.php"> Thal Desert </a></li>
                                                 <li><a href="thardesert.php"> Thar Desert</a></li>
                                                
                                            </ul>
                                        </div>
 <li class="dropdown">
                                <a href="valleys.php"  >Valleys  <i ></i></a>
                                <ul class="dropdown-menu">
                                </ul>
                                    <div class="collapse in">
                                            <ul>

                                                <li><a href="neelumvalley.php"> Neelum Valley</a></li>
                                                <li><a href="hunzavalley.php"> Hunza Valley </a></li>
                                              
                                            </ul>
                                        </div>
                                        <li><a href="deosaiplains.php"> Deosai Plains</a></li>

                                    <li class="divider">
                                    <div id="top-bar" class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <ul class="nav" style="z-index:1;"></ul>
    </div>
  </div>
  <div class="navbar-inner">
    <div class="container">
      <ul class="nav" style="padding-right:0px;margin-right:0px"></ul>
    </div>
  </div>
</div></li>
                                </ul>
                            </li>
                            <li><a href="events.php">Events</a></li>
                            
                             <li><a href="gallery.php">Gallery</a></li>
                             <li><a href="forums.php">Forums</a></li>
                            <li><a href="blog.php">Blogs</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="addevent.php">Add Event</a></li>
                           <li> <a id="logout"href="#" class="dropdown-toggle" data-toggle="dropdown">Account <i class="icon-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php">My Profile</a></li>
                                 <li><a href="myevents.php">My Events</a></li>
                            <li><a href="myarticles.php">My Articles</a></li>
                            <li><a href="mycomments.php">Comments</a></li>
                            <li><a name="logout" id="logout" href="logout.php?logout='log'">Logout</a></li>
                                   
                                </ul>
                            </li>
                                   
            </header>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/slider1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Neelum valley</h2>
                                    <p class="animation animated-item-2">Kashmir and blabla</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/slider4.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="boxed animation animated-item-1">bara pahar</h2>
                                    <p class="boxed animation animated-item-2">snow and bablabla</p>
                                    <br>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/slider3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">pahar pe asy charty hain</h2>
                                    <p class="animation animated-item-2">pahar pe asy charty hain and blabla</p>
                                    <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="centered">
                                    <div class="embed-container">
                                        <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->
    <!----start-offers---->
    <div class="offers" id="offers">
    <div class="offers-head">
        <div class="row">
            <div class="templatemo-line-header" style="margin-top: 0px;" >
                <div class="text-center">
                    <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey" style="color: #2ecc71">OUR MOST LIKED COLLECTIONS</span>
                    <hr class="team_hr team_hr_right hr_gray" />
                </div>
            </div>
            <br class="clearfix"/>
        </div>
    </div>
    <!-- start content_slider -->
    <!-- FlexSlider -->
    <!-- jQuery -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(function(){
            SyntaxHighlighter.all();
        });
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                animationLoop: true,
                itemWidth:250,
                itemMargin: 5,
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- Place somewhere in the <body> of your page -->
    <section class="slider">
    <div class="flexslider carousel">
    <ul class="slides">
    <li onclick="location.href='#';">
        <img src="images/k2/img01.jpg" />
        <!----place-caption-info---->
        <div class="caption-info">
            <div class="caption-info-head">
                <div class="caption-info-head-left">
                    <h4><a href="#">K2</a></h4>
                    <span>Bonus Extras!</span>
                </div>
                <div class="caption-info-head-right">
                    <span> </span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//place-caption-info---->
    </li>
    <li onclick="location.href='#';">
        <img src="images/g2/img02.jpg" />
        <!----place-caption-info---->
        <div class="caption-info">
            <div class="caption-info-head">
                <div class="caption-info-head-left">
                    <h4><a href="#">Gahserbrum 2</a></h4>
                    <span>Bonus Extras!</span>
                </div>
                <div class="caption-info-head-right">
                    <span> </span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//place-caption-info---->
    </li>
    <li onclick="location.href='#';">
        <img src="images/makran/img02.jpg" />
        <!----place-caption-info---->
        <div class="caption-info">
            <div class="caption-info-head">
                <div class="caption-info-head-left">
                    <h4><a href="#">Makrak Costal Highway</a></h4>
                    <span>Bonus Extras!</span>
                </div>
                <div class="caption-info-head-right">
                    <span> </span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//place-caption-info---->
    </li>
    <li onclick="location.href='#';">
        <img src="images/wildlife/img02.jpg" />
        <!----place-caption-info---->
        <div class="caption-info">
            <div class="caption-info-head">
                <div class="caption-info-head-left">
                    <h4><a href="#">Wildlife in Pakistan</a></h4>
                    <span>Bonus Extras!</span>
                </div>
                <div class="caption-info-head-right">
                    <span> </span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//place-caption-info---->
    </li>
    <li onclick="location.href='#';">
        <img src="images/baltoro/img06.jpg" />
        <!----place-caption-info---->
        <div class="caption-info">
            <div class="caption-info-head">
                <div class="caption-info-head-left">
                    <h4><a href="#">Baltoro Glacire</a></h4>
                    <span>Bonus Extras!</span>
                </div>
                <div class="caption-info-head-right">
                    <span> </span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//place-caption-info---->
    </li>
    <li onclick="location.href='#';">
        <img src="images/concordia/img01.jpg" />
        <!----place-caption-info---->
        <div class="caption-info">
            <div class="caption-info-head">
                <div class="caption-info-head-left">
                    <h4><a href="#">Concordia: K2 Base Camp</a></h4>
                    <span>Bonus Extras!</span>
                </div>
                <div class="caption-info-head-right">
                    <span> </span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//place-caption-info---->
    </li>
    <li onclick="location.href='#';">
        <img src="images/deosai/img05.jpg" />
        <!----place-caption-info---->
        <div class="caption-info">
            <div class="caption-info-head">
                <div class="caption-info-head-left">
                    <h4><a href="#">Deosai planes</a></h4>
                    <span>Bonus Extras!</span>
                </div>
                <div class="caption-info-head-right">
                    <span> </span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//place-caption-info---->
    </li>
    <li onclick="location.href='#';">
        <img src="images/lailapeak/img03.jpg" />
        <!----place-caption-info---->
        <div class="caption-info">
            <div class="caption-info-head">
                <div class="caption-info-head-left">
                    <h4><a href="#">Laila Peak</a></h4>
                    <span>Bonus Extras!</span>
                </div>
                <div class="caption-info-head-right">
                    <span> </span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//place-caption-info---->
    </li>
    <li onclick="location.href='#';">
        <img src="images/nayserbrakk/img03.jpg" />
        <!----place-caption-info---->
        <div class="caption-info">
            <div class="caption-info-head">
                <div class="caption-info-head-left">
                    <h4><a href="#">Nayser Brakk</a></h4>
                    <span>Bonus Extras!</span>
                </div>
                <div class="caption-info-head-right">
                    <span> </span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//place-caption-info---->
    </li>
    <li onclick="location.href='#';">
        <img src="images/spantik/img02.JPG" />
        <!----place-caption-info---->
        <div class="caption-info">
            <div class="caption-info-head">
                <div class="caption-info-head-left">
                    <h4><a href="#">Spantik: The Golden Peak</a></h4>
                    <span>Bonus Extras!</span>
                </div>
                <div class="caption-info-head-right">
                    <span> </span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//place-caption-info---->
    </li>
    <li onclick="location.href='#';">
        <img src="images/trangotowers/img01.jpg" />
        <!----place-caption-info---->
        <div class="caption-info">
            <div class="caption-info-head">
                <div class="caption-info-head-left">
                    <h4><a href="#">Trango Towers</a></h4>
                    <span>Bonus Extras!</span>
                </div>
                <div class="caption-info-head-right">
                    <span> </span>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <!----//place-caption-info---->
    </li>
    </ul>
    </div>
    </section>
    <!-- //End content_slider -->
    <!-- /offers -->
    </div>

    <!-- updates -->
    <section id="updates">
        <div id="blogs">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey"><a href="#"> BLOG POSTS</a></span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                        <br class="clearfix"/>
                    </div>
                </div>
                <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                            <ul class="list-inline">
                                <li class="col-md-4">
                                    <a href="#">
                                        <img class="img-responsive" src="images/blogs/img01.jpg" alt="gallery 1" />
                                    </a>
                                </li>
                                <li  class="col-md-8">
                                    <div class="pull-left">
                                        <span class="blog_header">GRAPHIC DESIGN</span><br/>
                                        <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Tracy</span></a></span>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" role="button">18 January 2084</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                    <p class="blog_text">
                                        Aliquam auctor felis vulputate id. Proin a enim eu libero ornare malesuada. Sed iaculis fringilla lacinia. Sed laoreet lectus vitae [...]
                                    </p>
                                </li>
                            </ul>
                        </div> <!-- /.blog_post 1 -->

                    <div class="col-sm-5 col-md-6 blog_post">
                            <ul class="list-inline">
                                <li class="col-md-4"><a href="#">
                                    <img class="img-responsive" src="images/blogs/img02.jpg" alt="gallery 2" /></a>
                                </li>
                                <li class="col-md-8">
                                    <div class="pull-left">
                                        <span class="blog_header">WEBSITE TEMPLATE</span><br/>
                                        <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Mary</span></a></span>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" role="button">16 January 2084</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                    <p class="blog_text">
                                        Quisque id turpis tristique, venenatis erat sit amet, venenatis turpis. Ut tellus ipsum, posuere bibendum [...]
                                    </p>
                                </li>
                            </ul>
                        </div><!-- /.blog_post 2 -->

                    <div class="templatemo_clear"></div>

                    <div class="col-sm-5 col-md-6 blog_post">
                            <ul class="list-inline">
                                <li class="col-md-4"><a href="#">
                                    <img class="img-responsive" src="images/blogs/img03.jpg" alt="gallery 3" /></a>
                                </li>
                                <li class="col-md-8">
                                    <div class="pull-left">
                                        <span class="blog_header">WEB DEVELOPMENT</span><br/>
                                        <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Julia</span></a></span>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" role="button">12 January 2084</a>
                                    </div>
                                    <div class="clearfix"> </div>
                                    <p class="blog_text">
                                        Fusce vitae lacinia ante interdum sit amet. Praesent eget varius diam, ac tempor est. Mauris at scelerisque magna [...]
                                    </p>
                                </li>
                            </ul>
                        </div><!-- /.blog_post 3 -->

                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <a href="#">
                                    <img class="img-responsive" src="images/blogs/img04.jpg"  alt="gallery 4" />
                                </a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">NEW FLUID LAYOUT</span><br/>
                                    <span>Posted by : <a class="link_orange" href="#"><span class="txt_orange">Linda</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a  href="#" role="button">10 January 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    In enim ante aliquet mauris, scelerisque congue magna neque ac purus. Aliquam facilisis volutpat odio [...]
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 4 -->
                </div>
            </div>
        </div>
        <!--/blogs-->
        <!--events -->
        <div id="events" style="margin-top: 4em;">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey"><a href="#"> Events & News </a></span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <br class="clearfix"/>
                </div>

                <div class="blog_box">
                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <a href="#">
                                    <img class="img-responsive" src="images/blogs/img01.jpg" alt="gallery 1" />
                                </a>
                            </li>
                            <li  class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">GRAPHIC DESIGN</span><br/>
                                    <span>Location : <a class="link_orange" href="#"><span class="txt_orange">Islamabad</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a href="#" role="button">18 January 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    Aliquam auctor felis vulputate id. Proin a enim eu libero ornare malesuada. Sed iaculis fringilla lacinia. Sed laoreet lectus vitae [...]
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 1 -->

                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4"><a href="#">
                                <img class="img-responsive" src="images/blogs/img02.jpg" alt="gallery 2" /></a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">WEBSITE TEMPLATE</span><br/>
                                    <span>Location : <a class="link_orange" href="#"><span class="txt_orange">Islamabad</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a href="#" role="button">16 January 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    Morbi Quisque id turpis tristique, venenatis erat sit amet, venenatis turpis. Ut tellus ipsum, posuere bibendum [...]
                                </p>
                            </li>
                        </ul>
                    </div><!-- /.blog_post 2 -->

                    <div class="templatemo_clear"></div>

                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4"><a href="#">
                                <img class="img-responsive" src="images/blogs/img03.jpg" alt="gallery 3" /></a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">WEB DEVELOPMENT</span><br/>
                                    <span>Location : <a class="link_orange" href="#"><span class="txt_orange">Islamabad</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a href="#" role="button">12 January 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    Fusce sapien sapien, vitae lacinia ante interdum sit amet. Praesent eget varius diam, ac tempor est. Mauris at scelerisque magna [...]
                                </p>
                            </li>
                        </ul>
                    </div><!-- /.blog_post 3 -->

                    <div class="col-sm-5 col-md-6 blog_post">
                        <ul class="list-inline">
                            <li class="col-md-4">
                                <a href="#">
                                    <img class="img-responsive" src="images/blogs/img04.jpg"  alt="gallery 4" />
                                </a>
                            </li>
                            <li class="col-md-8">
                                <div class="pull-left">
                                    <span class="blog_header">NEW FLUID LAYOUT</span><br/>
                                    <span>Location : <a class="link_orange" href="#"><span class="txt_orange">Islamabad</span></a></span>
                                </div>
                                <div class="pull-right">
                                    <a  href="#" role="button">10 January 2084</a>
                                </div>
                                <div class="clearfix"> </div>
                                <p class="blog_text">
                                    In enim ante aliquet mauris, scelerisque congue magna neque ac purus. Aliquam facilisis volutpat odio [...]
                                </p>
                            </li>
                        </ul>
                    </div> <!-- /.blog_post 4 -->

                </div>
            </div>
        </div>
    <!--/events-->
    </section>
    <!--/updates -->

    <!-- connections -->
    <section id="services" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <a href="#">
                            <div class="pull-left">
                                <i class="icon-twitter icon-md"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">@treversePakistan</h3>
                                <p>Follow for updates and News</p>
                            </div>
                        </a>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <a href="#">
                            <div class="pull-left">
                                <i class="icon-facebook icon-md"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">fb/treversePaksitan</h3>
                                <p>Events and updates</p>
                            </div>
                        </a>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <a href="#">
                            <div class="pull-left">
                                <i class="icon-google-plus icon-md" ></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">/treversePaksitan</h3>
                            <p>Contecting our team</p>
                            </div>
                        </a>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#services-->
    <!--/connections -->

     <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4> <ul>About Us</ul></h4>
                    <p>
                        <li>Basic information about Pakistan </li>
<li>Flag of Pakistan</li>
<li> Map of Pakistan</li>
<li>Maps of Pakistan</li>
<li>History of Pakistan </li>
<li>Mountains of Pakistan</li></p>
                    <p></p>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Company</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">The Company</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Our Partners</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Conatct Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Copyright</a></li>
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Latest Blog</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Hunza Valley or Skardu?</a></span>
                                <small class="muted">Posted 17 Aug 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">postonfroumtesting</a></span>
                                <small class="muted">Posted 13 Sep 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Can we go to ratti gali in winter</a></span>
                                <small class="muted">Posted 11 Jul 2013</small>
                            </div>
                        </div>
                    </div>  
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Address</h4>
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        NUST- SEECS,44000<br>
                        H-12 ISLAMABAD<br>
                        <abbr title="Phone">Pakistan:</abbr> 
                    </address>
                    <h4>Newsletter</h4>
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button">Go!</button>
                            </span>
                        </div>
                    </form>
                </div> <!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>