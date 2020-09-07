 
<?php
    session_start();


   echo "  <script type='text/javascript'>
    function abc(id)
      {
 
 

window.location = 'http://localhost:8080/blog-item.php?event_id='+id;
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
    <title>Events</title>
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
                    <li><a href="userindex.php">Home</a></li>
                     <li class="active"><a href="events.php">Events</a></li>
                    
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="forums.php">Forums</a></li>
                       <li ><a href="blog.php">Blog</a></li> 
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
                        <li class="active">Events</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    

                 

              


                
            <?php       
            $database = "traversepakistan";
    $db_handle = mysql_connect("127.0.0.1", "root", "usbw");
    $db_found = mysql_select_db($database, $db_handle);
   
    //echo $email;
  
    
    $query = "SELECT * FROM events ORDER BY post_date DESC";
    $result = mysql_query($query);
    
    while ( $db_field = mysql_fetch_assoc($result) ){
          $eventname= $db_field['event_name'] ;

         $post_date= $db_field['post_date'] ;
         $expire_date= $db_field['expire_date'] ;
         $cost= $db_field['cost'] ;
         $description= $db_field['descrip'] ;
         $person_id= $db_field['person_id'] ;



    $query1 = "SELECT id,userName,password,userDisplayName,contact_no,email,profile_pic FROM person   WHERE id='$person_id'";
    $result1 = mysql_query($query1);
    while ( $db_field1 = mysql_fetch_assoc($result1) ){
    $person=$db_field1["userName"];
}


echo "
 <div id='a'   class='left' class='col-sm-4 col-sm style='background-color:red;float:left;margin:0px;padding:0px;'>
   <div id='mydiv' style='color:black;width:700px;background:white;padding-left:30px;margin-left:100px;margin-top:25px;margin-bottom:20px;margin-bottom:20px;padding-left:20px;padding-top:10px;padding-bottom:10px;padding-right:20px;border-radius: 20px;'  onmouseover='this.style.background='gray';' onmouseout='this.style.background='white';'>
        
                           <img class='img-responsive img-blog' src='images/blog/blog1.jpg' width='100%' alt='' />
       
                                         

                            <a style='color:black' href='blog-item.php'><h3>$eventname</h3></a>
                            <div class=.phpentry-meta' style='color:black;'>
                              
                                <span><i class='icon-user'></i> <a style='color:black' href='#'> $person</a></span>
                                <span><i class='icon-calendar'> </i> <a style='color:black' href='#'>Post Date:$post_date</a></span>
                                 <span><i class='icon-calendar'> </i> <a style='color:black' href='#'>Expire Date:$expire_date</a></span>
                                <span><i class='icon-dollar'></i> <a style='color:black' href='#'>$cost</a></span>

                            </div>
                            <br>
                            <h4>Description</h4>
                            <p>$description</p>
                            <button type='button' class='btn btn-success' class='k' id='".$db_field['id']."' onclick='abc(".$db_field['id'].")' class='btn btn-success'>Read More <i class='icon-angle-right'></i></button>
                    
                    
                    <BR><br>
                    </div>";
                 
                
                
    
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