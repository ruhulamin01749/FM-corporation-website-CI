<?php include "header.php"; ?>

   <div style="border-top:1px solid silver;" class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="<?php echo base_url(); ?>">Home</a> &nbsp;/&nbsp; <span>Our project</span>
            </div>

            <div class="row-fluid">
            
            <?php require_once 'sidebar.php';  ?>
            <!--Edit Main Content Area here-->
                <div class="span8" id="divMain">

                    <h2 style="color:#8282FF;">Our projects</h2>
                    <hr>
                           
                    
                                                      



 <?php 
foreach ($view_project as $v_project) {
    

  ?>

   <div style="margin-left:0px; margin-right:2.1%;" class="span5">
            <div class="box">
               <h5 class="text-info"><?php echo $v_project->project_name; ?></h5>
                    <img src="<?php echo base_url(); ?><?php echo $v_project->project_image; ?>" class="img-polaroid" style="margin:5px 0px 15px;height:170px; width:100%; " alt="<?php echo $v_project->project_name; ?>">  
                    <p><?php echo substr("$v_project->project_desc",0,200); ?><br /></p>
                    <p><a href="<?php echo base_url(); ?>welcome/project_detail/<?php echo $v_project->project_id; ?>" class="btn btn-info" style="margin:5px 0px 15px;">Learn more</a></p>
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