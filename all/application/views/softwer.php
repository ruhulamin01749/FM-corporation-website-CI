<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kachajal | <?php echo $title ?></title>
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
<div id="templatemo_top"> <a href="<?php echo base_url(); ?>welcome/softwer">Home</a> | <a href="http://fs.1netbd.com/" target="_parent">Back to Media server</a> | 


</div>
  <div id="templatemo_header">
      <div id="inner_header">
        <div id="templatemo_site_title">Download needy Software</div><br>

     <form id="searchForm" method="post" action="<?php echo base_url(); ?>welcome/search_softwer">
       
            <input type="text" name="search" placeholder="Search software here...." />

            <input type="submit" value="Search" name="Submit" />
 
    </form>
         
      </div>
  </div>
  
      <div id="templatemo_left_column">
 		 <div class="datagrid">
     <table>
<thead>
  <tr>
    <th style="width:300px;"><center>Download</center></th>
    <th style="width:450px;" ><center>Discription</center></th>
    <th style="width:70px;"><center>Size</center></th>
    
  </tr>
</thead>
<tfoot>
  <tr>
    <td colspan="4">
  </tr>
</tfoot>
<tbody>
<?php 
    
  foreach ($show_softwer as $show_softwer) {
   
 ?>
  <tr style="border-bottom:1px solid #00557F;">
    <td style="width:300px; border-right:1px solid #00557F;" ><a href="<?php echo $show_softwer->softwer_link ?>"> <?php echo $show_softwer->softwer_name ?></a></td>
    <td style="width:450px; border-right:1px solid #00557F; font-weight:normal; text-align:justify; " ><?php echo $show_softwer->softwer_desc ?></td>
    <td style="width:70px;" ><?php echo $show_softwer->softwer_size ?></td>
  </tr>
    <?php } ?>
</tbody>
</table>
</div>
      </div>
    
    	
	<div id="templatemo_footer">
    Copyright © 2016 kachjal <a href="http://www.fs.1netbd.com" target="_parent">
    </div>
        
</div>

</html>