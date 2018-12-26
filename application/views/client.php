<?php include "header.php"; ?>

   <div style="border-top:1px solid silver;" class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="<?php echo base_url(); ?>">Home</a> &nbsp;/&nbsp; <span>Our clients</span>
            </div>

            <div class="row-fluid">
            
            <?php require_once 'sidebar.php';  ?>
            <!--Edit Main Content Area here-->
                <div class="span8" id="divMain">

                    <h2 style="color:#8282FF;">Our Clients</h2>
                    <hr>
                           
                    
                                                      



 <?php 
foreach ($view_client as $v_client) {
    

  ?>

   <div style="margin-left:0px; margin-right:2.1%;" class="span5">
            <div class="box">
               <h5 class="text-info"><?php echo $v_client->client_name; ?></h5>
                    <img src="<?php echo base_url(); ?><?php echo $v_client->client_image; ?>" class="img-polaroid" style="margin:5px 0px 15px;height:170px; width:100%; " alt="<?php echo $v_client->client_name; ?>">  
                    <p><?php echo substr("$v_client->client_desc",0,300); ?><br /></p>
            </div>
    </div> 
    <?php } ?>
   
    </div> 
        <hr>
        <br>

                </div>
                <!--End Main Content here-->
 
            </div>

            <?php include"footer.php"; ?>