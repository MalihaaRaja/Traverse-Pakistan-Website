 <?php
// Connects to your Database
        session_start();
        if(isset( $_SESSION["user"]))
        { 
          $email=  $_SESSION["user"];
        }
       else
        {
            //header( 'Location: http://localhost:8080/index.php' );
         }

       
         if(isset($_POST['logout']))
        {
            $_SESSION["invalid"] = "true";
            unset($_SESSION["user"]);
            session_destroy();
        }
      
    
?>


<!DOCTYPE html>
 
<html lang="en">
<head>
     <script src="js/jquery.js">
  $(document).ready(function(){
  $("#password_confirm").blur(function(){
    $("#error_field").show();
  });
  
});
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Profile </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
<style type="text/css">
.error{
    visibility: hidden;
    color: red;
}
</style>
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
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
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                     <ul class="nav navbar-nav navbar-right">
                    <li><a href="userindex.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="forums.php">Add Event</a></li>
                     <li><a href="addarticle.php">Publish Article</a></li>

                    <li><a href="forums.php">Forums</a></li>
                  <li><a href="about-us.php">About Us</a></li>

                       <li><a href="blog.php">Blog</a></li> 
                    <li><a href="contact-us.php">Contact</a></li>
                     <li class="dropdown active" >
                        <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                         
                            <li><a href="myevents.php">My Events</a></li>
                            <li><a href="myarticles.php">My Articles</a></li>
                            <li><a href="mycomments.php">Comments</a></li>
                            <li><a id="logout" href="index.php">Logout</a></li>

                        </ul>
                    </li>
                           
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                   
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container" >

 <table>
 <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
 <?php
 if(isset( $_SESSION["user"]))
 {
   $email=  $_SESSION["user"];
                        
    $database = "traversepakistan";
    $db_handle = mysql_connect("127.0.0.1", "root", "usbw");
    $db_found = mysql_select_db($database, $db_handle);
    
    $query = "SELECT id,userName,password,userDisplayName,contact_no,email,profile_pic,about_you FROM person   WHERE email='$email'";
    $result = mysql_query($query);
    while ( $db_field = mysql_fetch_assoc($result) ) {
                        
                          $image=$db_field['profile_pic'];
     
    
                            

                            echo "<tr>";
                            echo "<form method='post' action='' class='form-horizontal' role='form' enctype='multipart/form-data'>
                            <table class='container'>
                            <tr>
                             <div class='form-group'>
                             <label for='user_name' class='col-sm-2 control-label'>User Name</label>
                             <div class='col-sm-4'>
                             <input type='text' class='form-control' name='username' id='event_name' placeholder='Enter User Name' value=" . $db_field["userName"] . ">
                             </div>
                             </div>
                             <br>
                              <br>
                           </tr>
                           <tr>
                           <div class='form-group'>
                             <label for='password' class='col-sm-2 control-label'>Password</label>
                             <div class='col-sm-4'>
                             <input type='text' class='form-control' name='password' id='password' placeholder='Enter password' value=" . $db_field["password"] . ">
                             </div>
                             </div>
                           </tr>
                        <br>
                         <br>
                            <div class='form-group'>
                             <label for='display_name' class='col-sm-2 control-label'>Display Name</label>
                             <div class='col-sm-4'>
                             <input type='text' class='form-control' name='diaplay_name' id='display_name' placeholder='Enter Display Name' value=" . $db_field["userDisplayName"] . ">
                             </div>
                             </div>
                           </tr>
                           <br>
                           <br>

                            <div class='form-group'>
                             <label for='email' class='col-sm-2 control-label'>Email</label>
                             <div class='col-sm-4'>
                             <input type='email' class='form-control' name='email' id='event_name' placeholder='abc@def.com' value=" . $db_field["email"] .  ">
                             </div>
                             </div>
                           </tr>
                           <br>
                           <br>
                           <div class='form-group'>
                             <label for='contact_no' class='col-sm-2 control-label'>Contact No.</label>
                             <div class='col-sm-4'>
                             <input type='text' class='form-control' name='contact_no' id='contact_no'  value=" . $db_field["contact_no"] .  ">
                             </div>
                             </div>
                           </tr>
                           <br>
                           <br>
                            <div class='form-group'>
                             <label for='about_us' class='col-sm-2 control-label'>About Us</label>
                             <div class='col-sm-4'>
                             <textarea type='text' class='form-control' name='about_us' id='event_name' placeholder='' value=" . $db_field["about_you"] .  ">". $db_field["about_you"] ."</textarea>
                             </div>
                             </div>
                           </tr>
                           <br>
                           <br>
                           <tr>
                           <br>
                           <br>
                           <div class='form-group'>
                            <label for='profile_pic' class='col-sm-2 control-label'>Profile Pic.</label>";
                            echo '<img  style="margin-left:15px" src="data:image/x-png;base64,'.base64_encode($image).'" width="200px" height="200px"/>';
                            echo "
                           </div>
                           </tr>
                            </table>
                            </form>";   
                          }
                      }
                      
                     ?>
                </table>


   
   <div class="form-group">
      
   </div>
</form>
       
    </section><!--/#registration-->

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