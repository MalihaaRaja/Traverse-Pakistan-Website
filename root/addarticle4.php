 <?php
// Connects to your Database
        session_start();

if(!($_SESSION['user']))
{
header("Location: login.html");
}

         if(isset($_POST['logout']))
        {
            $_SESSION["invalid"] = "true";
             unset($_SESSION["user"]);
            session_unset();
            unset($_SESSION['login']);
            session_destroy();
            echo "<h1>im unset</h1>";

        }
        else{
            $a=$_POST['logout'];
            echo "$a";
        }

        if (isset($_POST['addarticle']))
        {
        $title = $_POST["title"];
        $body = $_POST["body"];
        $photo=$_POST["photo"];
          // header( 'Location: http://localhost:8080/index.php' );
            $database = "traversepakistan";
            $db_handle = mysql_connect("127.0.0.1", "root", "usbw");
            $db_found = mysql_select_db($database, $db_handle);
            $email= $_SESSION["user"];
            //echo "the email is",$email;
            $query = "SELECT id,userName,password,userDisplayName,contact_no,email FROM person   WHERE email='$email'";

            $result= mysql_query($query);
            while ( $db_field = mysql_fetch_assoc($result) ) {
            $person_id=  $db_field["id"] ;
            echo $person_id;
            
        }
           

//query to add product
$sql = "INSERT INTO articles "."(title,body,photo,person_id)"." VALUES('$title', '$body','$photo' ,' $person_id')";

//check on query and responce on query
if ( mysql_query($sql) ) 
{

echo "<script></script>";
} 
else
 {
   echo mysql_error();
    $_SESSION["invalid"] = "true";
}
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
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                       <li><a href="blog.php">Blog</a></li> 
                    <li><a href="contact-us.php">Contact</a></li>
                     <li class="dropdown active" >
                        <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown">Profile <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="myevents.php">My Events</a></li>
                            <li><a href="myarticles.php">My Articles</a></li>
                            <li><a href="mycomments.php">Comments</a></li>
                            <li><a name="logout" id="logout" href="">Logout</a></li>

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
                        <li><a href="index.html">Home</a></li>
                        <li class="active">article</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container" >
 <form class="form-horizontal" role="form" action="" method="post">
   <div class="form-group">
      <label for="event_name" class="col-sm-2 control-label">Title</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" name="title" id="title" 
            placeholder="" required="">
      </div>
   </div>
   



  </div>
      <div class="form-group">
      <label for="body" class="col-sm-2 control-label">body</label>
      <div class="col-sm-5">
         <textarea rows="30" class="form-control" id="body" name="body"
            placeholder="" required="" style="padding:1px">
        </textarea>
      </div>
      </div>

<div class="form-group" >
      <label for="select_place" class="col-sm-2 control-label" style="margin-right:25px">Place</label>
      <div style="padding:4px;padding-left:10px">
      <select class="form-group" style="padding:4px" required="">
<option >mountains</option>
<option >valleys</option>
<option >lakes</option>
<option >coastal areas</option>
<option >deserts</option>
</select >
</div>
      </div>
      </div>

         <div class="form-group" >
      <label for="inputfile" class="col-sm-2 control-label">Add Media</label>
      <div class="col-sm-4">
      <input type="file" id="inputfile" name="photo" required="">
      <p class="help-block">photo</p>
  </div>
   </div>
  
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
         <button type="submit" name="addarticle" class="btn btn-success">Publish Article</button>
      </div>
   </div>
</form>
       
    </section><!--/#registration-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                    <p>Pellentesque habitant morbi tristique senectus.</p>
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
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 17 Aug 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 13 Sep 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                                <small class="muted">Posted 11 Jul 2013</small>
                            </div>
                        </div>
                    </div>  
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Address</h4>
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
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

   
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>