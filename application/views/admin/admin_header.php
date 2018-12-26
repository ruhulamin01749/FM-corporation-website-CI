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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <link href="<?php echo base_url(); ?>css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url(); ?>bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?><?php echo base_url(); ?>img/favicon.ico">

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
            <a class="navbar-brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo base_url(); ?>img/logo20.png" class="hidden-xs"/>
                <span>FM </span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs">
                    <?php echo $this->session->userdata('name'); ?></span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url(); ?>super_admin/add_admin">Add user</a></li>
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
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/logo"><i class="glyphicon glyphicon-eye-open"></i><span> Manage Logo</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/slider"><i class="glyphicon glyphicon-eye-open"></i><span> Manage Slider</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_welcome"><i class="glyphicon glyphicon-eye-open"></i><span> Manage_welcome</span></a>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Service</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_service"><i class="glyphicon glyphicon-eye-open"></i><span> Add service</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_service"><i class="glyphicon glyphicon-font"></i><span> Manage Services</span></a>
                        </li>
                            </ul>
                        </li> 
                        
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Client</span></a>
                            <ul class="nav nav-pills nav-stacked">
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_client"><i class="glyphicon glyphicon-eye-open"></i><span> Add client</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_client"><i class="glyphicon glyphicon-edit"></i><span> Manage client</span></a></li>
                        </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Project</span></a>
                            <ul class="nav nav-pills nav-stacked">
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_project"><i class="glyphicon glyphicon-list-alt"></i><span> Add Project</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_project"><i class="glyphicon glyphicon-list-alt"></i><span> Manage Project</span></a>
                        </li>
                        </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Admin</span></a>
                            <ul class="nav nav-pills nav-stacked">
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/add_admin"><i class="glyphicon glyphicon-list-alt"></i><span> Add Admin</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>super_admin/manage_admin"><i class="glyphicon glyphicon-list-alt"></i><span> Manage admin</span></a>
                        </li>
                        </ul>
                        </li>
                        
                       
                      
                       
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