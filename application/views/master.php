
                       
<?php
 require_once 'header.php'; 
 require_once 'slider.php';



?>


    <div class="contentArea">

        <div class="divPanel notop page-content">
            

            <div class="row-fluid">
            <!--Edit Main Content Area here-->
                <div class="span12" id="divMain">
                    <h2 style="color:#8282FF;">Welcome to FM Corporation</h2>

                
                                    
                    <p style="text-align:justify;"><strong><?php echo $welcome->welcome_title; ?></strong><?php echo $welcome->welcome_desc; ?></p>

                                  
                                   
<h3 style="color:#8282FF;">Our services</h3>
  <br />   
    <div class="row-fluid">
    <?php  
        foreach ($view_services_with_limit as $show_services) {
         
    ?>


   <div class="span3">
            <div class="box">
               <i class="<?php echo $show_services->service_icon; ?>"></i> 
                <h4 class="title"><?php echo $show_services->service_name; ?></h4> <hr/>
                <p>
                    <?php echo substr("$show_services->service_desc",0,300); ?>
                </p>
                <p><a href="<?php echo base_url(); ?>welcome/service_detail/<?php echo $show_services->service_id; ?>" class="btn btn-info" style="margin:5px 0px 15px;">Learn more</a></p>
            </div>
    </div> 

    <?php

        }
    ?>
    
   

    </div> 




      </div>
     <div class="row-fluid">
            <div class="learn_more">
               <a href="<?php echo base_url(); ?>welcome/services"><i class="icon-plus"></i>
Show more</a>
            </div>
    </div> 
                  
<h3 style="color:#8282FF;">Our projects</h3>
    <div class="row-fluid">
    <?php 
    foreach ($view_project_with_limit as $v_project) {
        

    ?>
            <div class="span3">
                    <a href="<?php echo base_url(); ?>welcome/project_detail/<?php echo $v_project->project_id; ?>">
                    <img src="<?php echo base_url(); ?><?php echo $v_project->project_image; ?>" class="img-polaroid" style="margin:5px 0px 15px; width:100%;height:150px;" alt="">
                    </a>                
                    
            </div>
    <?php } ?>
            
    </div>  
    <div class="row-fluid">
            <div class="learn_more">
               <a href="<?php echo base_url(); ?>welcome/project"><i class="icon-plus"></i>
Show more</a>
            </div>
    </div>  
 

 <h3 style="color:#8282FF;">Our clients</h3>
    <div class="row-fluid">
    <?php 
    foreach ($view_client_with_limit as $v_client) {
        

    ?>
            <div class="span3">
            <h4 class="title"><?php echo $v_client->client_name; ?></h4>
                    <a href="<?php echo base_url(); ?>welcome/client">
                    <img src="<?php echo base_url(); ?><?php echo $v_client->client_image; ?>" class="img-polaroid" style="margin:5px 0px 15px; width:100%;height:150px;" alt="">
                    </a>                
                    
            </div>
    <?php } ?>
            
    </div>  
    <div class="row-fluid">
            <div class="learn_more">
               <a href="<?php echo base_url(); ?>welcome/client"><i class="icon-plus"></i>
Show more</a>
            </div>
    </div> 
    

                </div>
            <!--End Main Content-->
            
            <?php 
             require_once 'footer.php'; 
            ?>
            </div>
            </div>
