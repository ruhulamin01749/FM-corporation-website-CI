
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>FM CORPORATION | <?php echo $title; ?></title>
    <!---social plugins-->

    <!-- Remove this Robots Meta Tag, to allow indexing of site -->
<!---end social plugins-->
    <link href="<?php echo base_url(); ?>scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="<?php echo base_url(); ?>scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="<?php echo base_url(); ?>scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="<?php echo base_url(); ?>scripts/carousel/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">


    <link href="<?php echo base_url(); ?>styles/custom.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico" />

</head>
<body id="pageBody"><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>
<div class="divPanel notop nobottom">
            <div class="row-fluid">
            
   
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                    <?php 
                    if($logo !=NULL ){

                     ?>
                      <a href="<?php echo base_url(); ?>" id="divSiteTitle"><img style="height: 70px;
width: 100%;" src="<?php echo base_url(); ?><?php echo $logo->image_name; ?>"></a><br />
                        
                    <?php }
                    else{
                      ?>
                     <a href="<?php echo base_url(); ?>" id="divSiteTitle"><img style="height: 70px;
width: 100%;" src="<?php echo base_url(); ?>images/logo.png"></a><br />
                    <?php } ?>
                        <a href="<?php echo base_url(); ?>" id="divTagLine">THE DOOR TO INFINITY</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/about">About</a></li>
							<li class="dropdown">
                            <a href="<?php echo base_url(); ?>welcome/services" class="dropdown-toggle">Services  <b class="caret"></b> </a>
                             <ul class="dropdown-menu">

                             <?php 
                             foreach ($view_services as $service_menu) {

                             ?>

                            <li><a href="<?php echo base_url(); ?>welcome/service_detail/<?php echo $service_menu->service_id; ?>"><?php echo $service_menu->service_name; ?></a></li>
                            <?php
                             }
                            ?>
                            
							
                            </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>welcome/project">Project</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/client">Client</a></li>
						    <li><a href="<?php echo base_url(); ?>welcome/contact">Contact</a></li>
                            </ul>
                            </div>
                    </div>
                    </div>

                </div>
               
            </div>
                
            

            