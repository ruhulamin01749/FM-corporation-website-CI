<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OneNet | <?php echo $title ?></title>
<meta name="keywords" content="free website templates, CSS templates, download HTML page, templatemo.com" />
<meta name="description" content="templatemo 004 - free CSS website template" />
<link href="<?php echo base_url(); ?>templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo base_url();?>images/ico/favicon.ico">
</head>
<body>
<!--
This is a free CSS template provided by templatemo.com
-->
<div id="templatemo_container_wrapper">
	<div class="templatemo_spacer"></div>
<div id="templatemo_container">
<div id="templatemo_top"> <a href="<?php echo base_url(); ?>welcome/secret_softwer">Home</a> | <a href="http://fs.1netbd.com/" target="_parent">Back to Media server</a> | 

<?php
          $user_data = $this->session->userdata('user_id');
          if($user_data != NULL){
          ?>
        <a href="<?php echo base_url();?>welcome/logout">Log out (<?php echo $user_data = $this->session->userdata('user_name'); ?>)</a>
          <?php
        }
           ?>


</div>
  <div id="templatemo_header">
      <div id="inner_header">
        <div id="templatemo_site_title">Download secret Software</div><br>

     <form id="searchForm" method="post" action="<?php echo base_url(); ?>welcome/search_secret_softwer">
       
            <input type="text" name="search" placeholder="Search Software here...." />

            <input type="submit" value="Search" name="Submit" />
 
    </form>
         
      </div>
  </div>