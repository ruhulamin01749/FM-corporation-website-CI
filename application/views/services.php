<?php include "header.php"; ?>

   <div style="border-top:1px solid silver;" class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="<?php echo base_url(); ?>">Home</a> &nbsp;/&nbsp; <span>Services</span>
            </div>

            <div class="row-fluid">
            
            <?php require_once 'sidebar.php';  ?>
            <!--Edit Main Content Area here-->
                <div class="span8" id="divMain">

                    <h2 style="color:#8282FF;">Our services</h2>
                    <hr>
                    <p style="text-align:justify;"><strong class="text-error">Content on this page is for presentation purposes only.</strong>  Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida 
					lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend 
					nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. 
					Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. 
					Nunc posuere consequat consequat. Aenean ullamcorper pharetra libero sed suscipit. Fusce sit amet gravida neque. 
					Cras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim.
                    </p>			
					
                    <br />                  
                    <br />                                    



    <?php  
        foreach ($view_services as $show_services) {
         
    ?>


   <div style="margin-left:0px; margin-right:2.1%;" class="span5">
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
		<hr>
        <br>

                </div>
				<!--End Main Content here-->
 
            </div>

            <?php include"footer.php"; ?>