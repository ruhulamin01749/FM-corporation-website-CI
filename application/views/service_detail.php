<?php
 require_once 'header.php'; 
 


?>
    <div style="border-top:1px solid silver;" class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="<?php echo base_url(); ?>">Home</a> &nbsp;/&nbsp; <span>Service detail</span>
            </div>

            <div class="row-fluid">

            <?php require_once 'sidebar.php';  ?>


             
            <!--Edit Main Content Area here-->
                <div class="span8" id="divMain">

                     <h3 style="color:#8282FF;"><?php echo $view_service_detail->service_name; ?></h3>
                    <hr>
                    <img style="width:100%;height:300px;float:left;margin-bottom:1.5%;border:1px solid silver;" src="<?php echo base_url(); ?><?php echo $view_service_detail->service_image; ?>">
                    <p style="text-align:justify;"><?php echo $view_service_detail->service_desc; ?>
                    </p>            
                    
                    <br />                  
                    <br />   
             
                </div>
                <!--End Main Content Area here-->
                
                <!--Edit Sidebar Content here-->
               
                <!--End Sidebar Content here-->
            </div>
            </div>

          <?php require_once 'footer.php';  ?>
          </div>