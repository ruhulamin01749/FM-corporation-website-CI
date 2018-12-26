   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kachajal | <?php echo $title ?></title>
    <!-- Bootstrap -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
<link rel="shortcut icon" href="<?php echo base_url();?>images/ico/favicon.ico">


    <link href="<?php echo base_url();?>style/bootstrap.min.css" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="<?php echo base_url();?>style/font-awesome.min.css" rel="stylesheet">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="<?php echo base_url();?>style/animate.css">
    <!-- google fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>   
    <!-- for news ticker css file -->
     <link href="<?php echo base_url();?>style/li-scroller.css" rel="stylesheet">
     <!-- slick slider css file -->
    <link href="<?php echo base_url();?>style/slick.css" rel="stylesheet">
    <!-- for fancybox slider -->
     <link href="<?php echo base_url();?>style/jquery.fancybox.css" rel="stylesheet">    
    <!-- website theme file -->
    <!-- <link href="<?php echo base_url();?>style/theme-red.css" rel="stylesheet"> -->
 
     <link href="<?php echo base_url();?>style/theme.css" rel="stylesheet">
    <!-- main site css file -->    
    <link href="<?php echo base_url();?>style.css" rel="stylesheet">
 

  
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>engine1/style.css" />
<script type="text/javascript" src="<?php echo base_url();?>engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->


  </head>
<body>
<!--Facebook code  -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 
  
  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- end Facebook code  -->

  <div class="container">
    <!-- start header section -->
    <header id="header">    
      <div class="row">
        
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="header_bottom">
            <div class="logo_area">
              
              <!-- for your text logo format -->
               <a href="<?php echo base_url();?>" class="logo">
               <img src="<?php echo base_url();?>images/logo_2.png" alt="logo" height="60px" width="200px">
              </a> 
            </div>
             <div class="add_banner">

				<br><br>
              <div style="width:70%;" class="col-md-4 col-md-offset-3">
            <form action="<?php echo base_url(); ?>welcome/search" class="search-form" method="post" enctype >
                <div class="form-group has-feedback">
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" class="form-control" name="search" id="search" placeholder="Search movies here">

                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            </form>
            
        </div>
		
				
                         </div>  
          </div>
        </div>
      </div>  
    </header><!-- End header section --> 
    <!-- start nav section --> 

    <section id="navArea">
      <!-- Start navbar -->
      <nav class="navbar navbar-inverse" role="navigation">      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url(); ?>"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Movie Server <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://10.100.100.10:888/" target="_blank">Kachajal</a></li>
                                <li><a href="http://172.27.27.234/" target="_blank">U-Turn</a></li>
                                <li><a href="http://172.27.27.221/" target="_blank">Spark</a></li>
                                <li><a href="http://172.27.27.248/" target="_blank">Cue Club</a></li>
                                <li><a href="http://172.27.27.249/home/" target="_blank">Dhaka Download</a></li>
                                <li><a href="http://172.27.27.251/" target="_blank">Match Net</a></li>
                                <li><a href="http://172.27.27.252/" target="_blank">Classic Network</a></li>
                                <li><a href="http://103.3.226.206/" target="_blank">Tomato</a></li>
                                <li><a href="http://pegleg.it/" target="_blank">Pegleg</a></li>

                            </ul>
                        </li>
                       
                       <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Torrent <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://10.100.100.130/" target="_blank">Kachajal Torrent</a></li>
                                <li><a href="http://172.27.27.5/" target="_blank">Dhaka Torrent </a></li> 
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tube <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                              <li><a href="<?php echo base_url(); ?>tube" target="_blank">Kachajal tube</a></li> 
                                <li><a href="http://tube.dfnbd.net/" target="_blank">Dfn Tube </a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gemes <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://172.27.27.253/" target="_blank">Online Gaming Dhaka </a></li>
                                <li><a href="http://games.ksnetworkbd.com/ks/" target="_blank">Online Gaming</a></li>
                            </ul>
                        </li>
                        

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Live TV <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://10.100.100.130:82/" target="_blank">Live TV</a></li>
                                <li><a href="http://172.27.27.5/tv/" target="_blank">TV Channel 2 </a></li>
                                <li><a href="http://www.jagobd.com/" target="_blank">Jago BD </a></li>
                                <li><a href="http://watchliveall.com/" target="_blank">BD channel HD </a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">BDIX <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://www.crazyhd.com/" target="_blank">Crazy HD</a></li>
                                <li><a href="http://winghd.com/" target="_blank">Wing</a></li>
                                <li><a href="http://www.torrentbd.com/" target="_blank">Torrent BD</a></li>
                                <li><a href="http://www.paitara.com/login.php?returnto=%2F" target="_blank">Paitara</a></li>
                                <li><a href="http://torrent.dfnbd.net/" target="_blank">Tarchira </a></li>
                                <li><a href="http://freetorrentbd.com/" target="_blank">Free Torrent BD</a></li>
                                <li><a href="http://download.tetrasoftbd.com/" target="_blank">Tetrasoft </a></li>
                                <li><a href="http://bioscopeblog.net/" target="_blank">Bioscope Blog </a></li>

                            </ul>
                        </li> 
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://www.bdallmedia.com/" target="_blank">All Media</a></li>
                                
                            </ul>
                        </li>

                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Online Radio <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            <?php  
                            foreach ($fm as $s_fm) {
                              
                            ?>
                                <li><a href="<?php echo base_url(); ?>welcome/fm_detail/<?php echo $s_fm->fm_id ?>"><?php echo $s_fm->fm_name ?></a></li>
                                <?php } ?>
                                
                            </ul>
                        </li>
                         <li><a href="<?php echo base_url(); ?>welcome/softwer" target="_blank">Software</a></li> 
						 
        
                                         
                    </ul>
        </div><!--/.nav-collapse -->  
        <div class="social_area">
              <ul class="social_nav">
                <li class="facebook"><a href="https://www.facebook.com/Kachajal-1637849453144819/" target="_blank"></a></li>
                <li class="twitter"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
                <li class="mail"><a href="mailto:info@smartnews.com"></a></li>
              </ul>
            </div>     
      </nav>
    </section><!-- End nav section -->
  