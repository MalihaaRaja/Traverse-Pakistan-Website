
 <?php
// Connects to your Database
        
      session_start();

        if(!($_SESSION['user']))
{
            header('Location:http://localhost:8080/login.php');
}
else{
    $email=  $_SESSION["user"];
    }
if(isset($_GET['logout']))
        {
            $_SESSION["invalid"] = "true";
             unset($_SESSION["user"]);
            session_unset();
            unset($_SESSION['login']);
            session_destroy();
            
        }
      
      if(isset($_POST['submit_comment']))
      {



        
        if(!($_SESSION['user']))
{
            header('Location:http://localhost:8080/login.php');
}
        date_default_timezone_set('Africa/Lagos');
         $event_id=$_GET["event_id"];
         $comment_post_date=date("Y/m/d");
         $database = "traversepakistan";
        $db_handle = mysql_connect("127.0.0.1", "root", "usbw");
        $db_found = mysql_select_db($database, $db_handle);
          $query = "SELECT id FROM person   WHERE email='$email'";
            $result = mysql_query($query);
        while ( $db_field = mysql_fetch_assoc($result) )
    {
        $p_id=$db_field["id"];

        $comment_name=$_POST["comment_name"];
        $comment_email=$_POST["comment_email"];
        $comment_details=$_POST["comment_details"];
       
        $sql = "INSERT INTO comments "."(name, email,details,event_id,post_date,person_id)"." VALUES('$comment_name', '$comment_email','$comment_details','$event_id',' $comment_post_date','$p_id')";
          //die("I am here");
    
//check on query and responce on query
        if ( mysql_query($sql) ) {

               } 
else {

//echo mysql_error();
//$_SESSION["invalid"] = "true";
}
}

      }
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Item | Traverse Pakistan</title>
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
</head><!--/head-->
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=144716315690681";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

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
                    <li><a href="userindex.php">Home</a></li>
                     <li ><a href="events.php">Events</a></li>
                    
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="forums.php">Forums</a></li>
                       <li ><a href="blog.php">Blog</a></li> 
                       <li><a href="about-us.php">About Us</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                   
                   
                </ul>
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
                        <li><a href="#">Pages</a></li>
                        <li class="active">Blog Item</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="blog" class="container">
        <div class="row">
            <aside class="col-sm-4 col-sm-push-8">
                <div class="widget search">
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button"><i class="icon-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div><!--/.search-->

                <div class="widget ads">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#"><img class="img-responsive img-rounded" src="images/ads/ad1.png" alt=""></a>
                        </div>

                        <div class="col-xs-6">
                            <a href="#"><img class="img-responsive img-rounded" src="images/ads/ad2.png" alt=""></a>
                        </div>
                    </div>
                    <p> </p>
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#"><img class="img-responsive img-rounded" src="images/ads/ad3.png" alt=""></a>
                        </div>

                        <div class="col-xs-6">
                            <a href="#"><img class="img-responsive img-rounded" src="images/ads/ad4.png" alt=""></a>
                        </div>
                    </div>
                </div><!--/.ads-->     

                <div class="widget categories">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="arrow">
                                <li><a href="#">Tourism</a></li>
                                <li><a href="#">History</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Villages</a></li>
                                <li><a href="#">Cities</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="arrow">
                                <li><a href="#">Landscapes</a></li>
                                <li><a href="#">Valleys</a></li>
                                <li><a href="#">Mountains</a></li>
                                <li><a href="#">Lakes</a></li>
                                <li><a href="#">Indus</a></li>
                            </ul>
                        </div>
                    </div>                     
                </div><!--/.categories-->
               <div class="widget tags">
                    <h3>Tag Cloud</h3>
                    <ul class="tag-cloud">
                        <li><a class="btn btn-xs btn-success" href="#">Pakistan tourism minitry</a></li>
                        <li><a class="btn btn-xs btn-success" href="#">Karachi</a></li>
                        <li><a class="btn btn-xs btn-success" href="#">Lahore</a></li>
                        <li><a class="btn btn-xs btn-success" href="#">Peshawar</a></li>
                        <li><a class="btn btn-xs btn-success" href="#">Kohat</a></li>
                        <li><a class="btn btn-xs btn-success" href="#">pakistan</a></li>
                        
                    </ul>
                </div><!--/.tags-->


                <div class="widget facebook-fanpage">
                    <h3>Facebook Fanpage</h3>
                    <div class="widget-content">
                        <div class="fb-like-box" data-href="https://www.facebook.com/shapebootstrap" data-width="292" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                    </div>
                </div>
            </aside>
            <div class="col-sm-8 col-sm-pull-4">
                <div class="blog">
            <?php
  

    $database = "traversepakistan";
    $db_handle = mysql_connect("127.0.0.1", "root", "usbw");
    $db_found = mysql_select_db($database, $db_handle);

    $event_id=$_GET["event_id"];

    
    $query= "SELECT id,event_name,post_date,expire_date,cost,descrip,person_id,photo FROM events where id = $event_id";
    $result = mysql_query($query);
    
    while ( $db_field = mysql_fetch_assoc($result) )
    {
        $image="";

         $eventname= $db_field['event_name'] ;
         $person_id= $db_field['person_id'];
         $post_date= $db_field['post_date'] ;
         $expire_date= $db_field['expire_date'] ;
         $cost= $db_field['cost'] ;
         $description= $db_field['descrip'] ;
         $image=$db_field['photo'];


    $query1 = "SELECT id,userName,password,userDisplayName,contact_no,email,profile_pic,about_you FROM person   WHERE id='$person_id'";
    $result1 = mysql_query($query1);
    while ( $db_field1 = mysql_fetch_assoc($result1) )
    {
    $person=$db_field1["userName"];
        $about_you=$db_field1["about_you"];

     }

   
    $query3 = "SELECT id,name,email,details,post_date FROM comments   WHERE id='$event_id'";
    $result3 = mysql_query($query3);
  $a=sizeof($result3);
        echo   " <div class='blog-item'>
                        <img class='img-responsive img-blog' src='images/blog/blog2.jpg' width='100%' alt='' />
                        <div class='blog-content'>
                            <h3 style='padding-left:20px'> $eventname</h3>
                            <div class='entry-meta'>";
                             echo '<img  style="margin-left:15px;width="100px"" src="data:image/x-png;base64,'.base64_encode($image).'" width="100px" height="100px"/><br><br>';

                            echo "
                                <span><i class='icon-user'></i> <a href='#'>By  $person</a></span>
                                <span><i class='icon-calendar'></i>Post Date $post_date</span>
                                <span><i class='icon-calendar'></i>Expiry Date $expire_date</span>

                            </div>
                            <p class='lead'> $description</p>
                            <hr>

                           

                            <p>&nbsp;</p>

                            <div class='author well'>
                                <div class='media'>
                                    <div class='pull-left'>
                                        <img class='avatar img-thumbnail' src='images/blog/avatar.jpg' alt=''>
                                    </div>
                                    <div class='media-body'>
                                        <div class='media-heading'>
                                            <strong>$person</strong>
                                        </div>
                                        <p>$about_you</p>
                                    </div>";
                                }
                            

            ?>        
            
                
                    
                                </div>
                            </div><!--/.author-->

                           <div id="comments">
                                <div id="comments-list">
                                    <?php
                                    $database = "traversepakistan";
    $db_handle = mysql_connect("127.0.0.1", "root", "usbw");
    $db_found = mysql_select_db($database, $db_handle);

    $query2 = "SELECT id,name,email,details,post_date FROM comments   WHERE event_id='$event_id'";
    $result2 = mysql_query($query2);
    if( $result2<1)
    {
        echo "No comments yet!";
    }
    else{
    while ( $db_field2 = mysql_fetch_assoc($result2) )
    {
        $comment_name=$db_field2['name'];
        $comment_email=$db_field2['email'];
        $comment_details=$db_field2['details'];
        $comment_date=$db_field2['post_date'];
        $size=sizeof($result2);
    


                                    echo"
                                    
                                    <div class='media'>
                                        <div class='pull-left'>
                                            <img class='avatar img-circle' src='images/blog/avatar1.png' alt=''>
                                        </div>
                                        <div class='media-body'>
                                            <div class='well'>
                                                <div class='media-heading'>
                                                    <strong> $comment_name</strong>&nbsp; <small>$comment_date</small>
                                                    <a class='pull-right' href='#'><i class='icon-repeat'></i> Reply</a>
                                                </div>
                                                <p> $comment_details</p>
                                            </div>
                                    </div><!--/.media-->";


                                }
                            }
                                    ?>
                                </div><!--/#comments-list-->  

                               <div id="comment-form">
                                    <h3>Leave a comment</h3>
                                    <form class="form-horizontal" role="form" action="" method="post">
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" placeholder="Name" name="comment_name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" placeholder="Email" name="comment_email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <textarea rows="8" class="form-control" placeholder="Comment" name="comment_details"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit_comment" class="btn btn-danger btn-lg">Submit Comment</button>
                                    </form>
                                </div><!--/#comment-form-->
                            </div><!--/#comments-->
                        </div>
                    </div><!--/.blog-item-->
                </div>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </section><!--/#blog-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>About Us</h4>
                                       <p>We are a non profit organization working in collaboration with Pakistani government for the development of Tourism</p>

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
                                <span class="media-heading"><a href="#">                                                <p>Pkaistan is a eautiul country with awsome landscapes </p>
</a></span>
                                <small class="muted">Posted 17 Aug 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">                                                <p>Pkaistan is a eautiul country with awsome landscapes </p>
</a></span>
                                <small class="muted">Posted 13 Sep 2013</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/blog/thumb3.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">                                                <p>Pkaistan is a eautiul country with awsome landscapes </p>
</a></span>
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

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>