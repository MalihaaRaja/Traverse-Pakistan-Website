 <?php
// Connects to your Database
        session_start();
        if (isset($_POST['submit']))
        {
               

         $imgData =addslashes(file_get_contents($_FILES['photo']['tmp_name']));


        $username = $_POST["username"];
        $password = $_POST["password"];
        $email=$_POST["email"];
        $contact=$_POST["contact_no"];
        $about_you=$_POST["about_you"];

        $confirm_password=$_POST["password_confirm"];
        $profile_pic=$imgData;
       
        if( $password==$confirm_password)
        {
            
            $category="user";
            
        
            $_SESSION["user"] = "$email";
            unset($_SESSION["invalid"]);

          // header( 'Location: http://localhost:8080/index.php' );
            $database = "traversepakistan";
            $db_handle = mysql_connect("127.0.0.1", "root", "usbw");
            $db_found = mysql_select_db($database, $db_handle);

//query to add product
$sql = "INSERT INTO person "."(userName, password,userDisplayName,contact_no,email,profile_pic,category,about_you)"." VALUES('$username', '$password','$username','$contact' ,'$email','$profile_pic','$category','$about_you')";
echo count($_FILES);
//die("I am here");
//check on query and responce on query
if ( mysql_query($sql) ) {
header('Location:http://localhost:8080/registrationbtn.php');
} 
else {

echo mysql_error();
$_SESSION["invalid"] = "true";
}
}
}
    
?>


<!DOCTYPE html>
 
<html lang="en">
<head>
    <script type="text/javascript">
    <script>
function check() {
    document.getElementById("contact_no").innerHTML ="";
}
</script>
<script type="text/javascript">

function vvv()
{
   var input= document.getElementById("contact_no").value();
   document.write(input);
   if(input!=11)
   {
    document.getElementById("k").innerHTML()="contact no is not valid";
   }
}
    </script>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration </title>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="contact-us.php">Contact</a></li>

                   
                    
                    
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
                        <li class="active">Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container" >
        <form class="center" role="form" action="" method="post" enctype="multipart/form-data">
            <fieldset class="registration-form">
                <div class="form-group">
                    <input type="text" id="username" name="username" placeholder="Username" class="form-control" required="">
                </div>
                <div class="form-group">
                    <input type="text" id="email" name="email" placeholder="E-mail" class="form-control" required="">
                </div>
                 <div class="form-group">
                    <input type="userDisplayName" id="userDisplayName" name="userDisplayName" placeholder="userDisplayName" class="form-control" required="">
                </div>
                 
                <div class="form-group">
                    <input  id="contact_no" name="contact_no" placeholder="5555-5555555" onblur="check()" class="form-control" >
                    <p id="k"></p>
                </div>
                
                  <div class="form-group">
                    <textarea type="about_you" id="about_you" name="about_you" placeholder="About You...." class="form-control" required=""></textarea>
                </div>
                 
<div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password " class="form-control" required="">
                    </div>
                <div class="form-group">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="Password (Confirm)" class="form-control" required=""  >
                 <p class=error id="error_field">passwords donot match</p>
                </div>
                <div class="form-group" style="margin:40px;padding-left:40px;margin:0px">
      <label for="inputfile" style="padding:0px"></label>
      <input type="file" id="inputfile" name="photo" accept="image/x-png, image/gif, image/jpeg">
      <p class="help-block">Select Profile pic</p>
   </div>

                <div class="form-group">
                    <button class="btn btn-success btn-md btn-block" name="submit" type="submit">Register</button>
                </div>

            </fieldset>
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