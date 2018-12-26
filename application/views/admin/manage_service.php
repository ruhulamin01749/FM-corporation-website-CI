       
<?php  require_once 'admin_header.php'; ?>
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
       
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> If you want to edit , delete and customaiz any Services, Please check here</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <div class="alert alert-info"> Please check your data table carefully</div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
    <th>Services Id</th>
        <th>Services Name</th>
        <th>Publication status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    
<?php  
    foreach ($view_service as $show_service) 
    {
    ?>
    <tr>
        <td class="center"><?php echo $show_service->service_id;?></td>
        <td><?php echo $show_service->service_name;?></td>
        
       
        <td class="center">
            <span class="label-warning label label-default"><?php 

             $service_status = $show_service->publication_status;
             if($service_status==0){

                echo "Unpublished";

             }
             elseif ($service_status==1) {
                echo "Published";
             }


             ?>



             </span>
        </td>
        <td class="center">
        <?php 
        if($show_service->publication_status==1){

         ?>
            <a class="btn btn-danger" href="<?php echo base_url();?>/super_admin/unpublished_service/<?php echo $show_service->service_id;?>">
                <i class="glyphicon glyphicon-arrow-down icon-white"></i>
        <?php
        }
        else{

        ?>
         <a class="btn btn-success" href="<?php echo base_url();?>/super_admin/published_service/<?php echo $show_service->service_id;?>">
                <i class="glyphicon glyphicon-arrow-up icon-white"></i>
                <?php  

                    }
                ?>
                
            </a>
            <a class="btn btn-info" href="<?php echo base_url();?>/super_admin/edit_service/<?php echo $show_service->service_id;?>" title="Edit">
                <i class="glyphicon glyphicon-edit icon-white"></i>
               
            </a>
            <a class="btn btn-danger" href="<?php echo base_url();?>/super_admin/delete_service/<?php echo $show_service->service_id;?>" title="Delete">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                
            </a>
        </td>
        
    </tr>
    <?php 

    }
        ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    
    <?php  require_once 'admin_footer.php'; ?>