<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

       

        Copyright 2015 Ruhul Amin
        
        ===
    -->
    <meta charset="utf-8">
    <title>Admin_panel | <?php echo $title; ?></title>

    <meta name="author" content="Md.Ruhul Amin">

    <!-- The styles -->
    <link href="<?php echo base_url(); ?>style/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>style/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url(); ?>bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>style/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>style/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>style/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>style/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>style/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>style/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>style/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?><?php echo base_url(); ?>images/favicon.png">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>super_admin">"> <img alt="Charisma Logo" src="<?php echo base_url(); ?>images/logo20.png" class="hidden-xs"/>
                <span>OneNet </span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">
                    <?php echo $this->session->userdata('name'); ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                <?php  
                $current_user = $this->session->userdata('name');
                $main_user = 'OneNet';
                if($current_user == $main_user){
                   ?>
<li><a href="<?php echo base_url(); ?>super_admin/add_admin">Add user</a></li>
                <?php }
                 ?>


           
                    
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url(); ?>/super_admin/logout">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            

           
        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Category</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_category"><i class="glyphicon glyphicon-eye-open"></i><span> Add Category</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_category"><i class="glyphicon glyphicon-font"></i><span> Manage Category</span></a>
                        </li>
                            </ul>
                        </li> 

                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Movies</span></a>
                            <ul class="nav nav-pills nav-stacked">
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_movie"><i class="glyphicon glyphicon-list-alt"></i><span> Add Movies</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_movie"><i class="glyphicon glyphicon-list-alt"></i><span> Manage Movies</span></a>
                        </li>
                        </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Softwer</span></a>
                            <ul class="nav nav-pills nav-stacked">
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_softwer"><i class="glyphicon glyphicon-list-alt"></i><span> Add Softwer</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_softwer"><i class="glyphicon glyphicon-list-alt"></i><span> Manage Softwer</span></a>
                        </li>
                        </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Secret Softwer</span></a>
                            <ul class="nav nav-pills nav-stacked">
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_secret_softwer"><i class="glyphicon glyphicon-list-alt"></i><span> Add Softwer</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_secret_softwer"><i class="glyphicon glyphicon-list-alt"></i><span> Manage secret Softwer</span></a>
                        </li>
                        </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Tube Category</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_tube_category"><i class="glyphicon glyphicon-list-alt"></i><span> Add Tube Category</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_tube_category"><i class="glyphicon glyphicon-list-alt"></i><span> Manage Tube Category</span></a>
                        </li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Tube Videos</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_tube_video"><i class="glyphicon glyphicon-list-alt"></i><span> Add Tube video</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_tube_video"><i class="glyphicon glyphicon-list-alt"></i><span> Manage Tube video</span></a>
                        </li>
                            </ul>
                        </li>
                        <?php  
                $current_user = $this->session->userdata('name');
                $main_user = 'OneNet';
                if($current_user == $main_user){
                   ?>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Admin</span></a>
                            <ul class="nav nav-pills nav-stacked">
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_admin"><i class="glyphicon glyphicon-list-alt"></i><span> Add Admin</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_admin"><i class="glyphicon glyphicon-list-alt"></i><span> Manage admin</span></a>
                        </li>
                        </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> User</span></a>
                            <ul class="nav nav-pills nav-stacked">
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_user"><i class="glyphicon glyphicon-list-alt"></i><span> Add user</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_user"><i class="glyphicon glyphicon-list-alt"></i><span> Manage user</span></a>
                        </li>
                        </ul>
                        </li>
                        <?php } ?>
                       
                      
                       
                    </ul>
                    
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>