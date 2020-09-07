 <?php
// Connects to your Database
        session_start();
          if(!($_SESSION['user']))
{
            header('Location:http://localhost:8080/login.php');
}

         if(isset($_POST['logout']))
        {
            $_SESSION["invalid"] = "true";
             $_SESSION["user"] = "";
            session_unset();
            session_destroy();
        }

        if (isset($_POST['addevent']))
        {
         $imgData =addslashes(file_get_contents($_FILES['photo']['tmp_name']));
date_default_timezone_set('Africa/Lagos');
        $post_date=date("Y/m/d");
        $event_name = $_POST["event_name"];
       // $post_date = $_POST["post_date"];
        $expire_date = $_POST["expire_date"];
        $cost=$_POST["cost"];
        $description=$_POST["desc"];
       
            
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
            //echo $person_id;
            
        }
           

//query to add product
$sql = "INSERT INTO events "."(event_name, post_date,expire_date,cost,descrip,photo,person_id)"." VALUES('$event_name', '$post_date','$expire_date','$cost' ,'$description','$imgData',' $person_id')";

//check on query and responce on query
if ( mysql_query($sql) ) 
{

header('Location:addeventbtn.php');

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

     <script >
     function show()
     {
      
         document.write("abc");
         document.getElementById('a').innerHTML='Event Added';
      
       
     }
  
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Event </title>
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
.visible
{
  visibility: show;
}
#a{
  background-color: transparent;
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
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li ><a href="events.php">Events</a></li>
                    <li  class="active"><a href="addevent.php">Add Event</a></li>

                    <li ><a href="addarticle.php">Publish Article</a></li>

                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="forums.php">Forums</a></li>
                    <li ><a href="about-us.php">About Us</a></li>
                   
                    <li ><a href="blog.php">Blog</a></li> 
                    <li><a href="contact-us.php">Contact</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.php">My Profile</a></li>
                             <li><a href="myevents.php">My Events</a></li>
                            <li><a href="myarticles.php">My Articles</a></li>
                            <li><a href="mycomments.php">Comments</a></li>
                            <li><a name="logout" id="logout" href="logout.php?logout='log'">Logout</a></li>
                            
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
                        <li class="active">Add Event</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container" >
 <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
   <div class="form-group">
      <label for="event_name" class="col-sm-2 control-label">Event Name</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" name="event_name" id="event_name" 
            placeholder="Enter Event Name" required="">
      </div>
   </div>
 

<div class="form-group">
    <label for="expire_date" class="col-sm-2 control-label">Expire Date</label>
      <div class="col-sm-4">
         <input type="date" class="form-control" id="expire_date" type="date" name="expire_date"
            placeholder="YY/MM/DD" required="">
      </div>
  </div>
   </div>
    <div class="form-group">
      <label for="cost" class="col-sm-2 control-label">Cost</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" id="cost" name="cost"
            placeholder="2000" required="">
      </div>
  </div>
      <div class="form-group">
      <label for="description" class="col-sm-2 control-label">Descrption</label>
      <div class="col-sm-4">
         <textarea rows="3" class="form-control" id="desc" name="desc"
            placeholder="the event is about" required="">
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
      <label for="inputfile" class="col-sm-2 control-label">Event Pic</label>
      <div class="col-sm-4">
      <input type="file" id="inputfile" name="photo" required="">
      <p class="help-block">Event photo here.</p>
  </div>
   </div>
 
   <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="addevent"id="addevent" class="btn btn-success" >Add Event</button>
         
      </div>
   </div>
  
</form>
        <div><h4 id="a"></h4></div>
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