 <?php
// Connects to your Database
     




        session_start();
        if(isset( $_SESSION["user"]))
        { 
          $email=  $_SESSION["user"];
        }
       else
                      {
                           header( 'Location: http://localhost:8080/login.php' );
                      }

        if(isset($_SESSION["logout"]))
        {
            $_SESSION["invalid"] = "true";
            unset($_SESSION["user"]);
        }
       
      
echo "  <script type='text/javascript'>
    function abc(id)
      {

 

window.location = 'http://localhost:8080/blog-article.php?article_id='+id;
    }
  
  </script>"
      
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My Articles</title>
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
                <a class="navbar-brand" href="index.php"><img src="images/logo_t.png" ></a>
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
                        <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown">Accoumt <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                         <li><a href="profile.php">My Profile</a></li>
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
                        <li class="active">Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     
     <section id="blog" class="container">
<div class='col-sm-8 col-sm'>
    
  <?php
  if(isset( $_SESSION["user"]))
   {
   $email=  $_SESSION["user"];
   //echo $email;
    //echo $email;
    $database = "traversepakistan";
    $db_handle = mysql_connect("127.0.0.1", "root", "usbw");
    $db_found = mysql_select_db($database, $db_handle);
    
    $query = "SELECT id,userName,password,userDisplayName,contact_no,email,profile_pic FROM person   WHERE email='$email'";
    $result = mysql_query($query);
   
    while ( $db_field = mysql_fetch_assoc($result) )
     {
       
        $person= $db_field["userName"] ;
        $person_id= $db_field["id"] ;
        //echo $person_id;
        //echo $person;
        $query2= "SELECT id,title,body,person_id,likes,photo,place_id,post_date,preview_descrip FROM articles where person_id =  $person_id ORDER BY post_date ASC";

        $result2 = mysql_query($query2);
        if($result2==0)
        {
            echo "You have No articles!<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

        }

        else{
       while( $db_field2 = mysql_fetch_assoc($result2)){
         $image="";
        $size=sizeof($db_field2);
        //echo "The size is",$size;
         $image=$db_field2['photo'];
         $title= $db_field2['title'] ;
         $body= $db_field2['body'] ;
         $likes= $db_field2['likes'] ;
         $post_date=$db_field2['post_date'];
         $preview_descrip=$db_field2['preview_descrip'];


        echo "
                <div class='blog'>
                   
               
                     <div class='blog-item'>
                        <div class='blog-content'>";
                                 echo '<img  style="margin:15px;padding-right:20px" src="data:image/x-png;base64,'.base64_encode($image).'" width="680px" height="500px"/>';
                                 echo "

                            <a href='blog-item.php' ><h3 style='margin:15px;padding-right:20px'>$title</h3></a>
                            <div class='entry-meta'>
                                <span><i class='icon-user'></i> <a href='#'>By $person</a></span>
                                <span><i class='icon-folder-close'></i> <a href='#'></a></span>
                                <span><i class='icon-calendar'></i> $post_date</span>
                                <span><i class='icon-comment'></i> <a href='blog-item.php#comments'>3 Comments</a></span>
                            </div>
                            <p width=20px style='margin:15px;padding-right:20px'><p>$preview_descrip</p></p>
                            <button type='button' class='btn btn-success' class='k' id='".$db_field2['id']."' onclick='abc(".$db_field2['id'].")' class='btn btn-success'>Read More <i class='icon-angle-right'></i></button>
                        </div>
                    </div>
                    </div>
                    <!--/.blog-item-->

                    ";

                    
                }
                
    }
}
}

?>

                   </div>                    
     
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

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>