       
<?php  require_once 'admin_header.php'; ?>
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
       
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> If you want to edit , delete and customaiz any Admin data, Please check here</h2>

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
    <th>Admin Id</th>
        <th>Admin Name</th>
        <th>Active status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    
<?php  
    foreach ($view_admin as $show_admin) 
    {
    ?>
    <tr>
        <td class="center"><?php echo $show_admin->id;?></td>
        <td><?php echo $show_admin->name;?></td>
        
       
        <td class="center">
            <span class="label-warning label label-default"><?php 

             $admin_status = $show_admin->publication_status;
             if($admin_status==0){

                echo "Deactive";

             }
             elseif ($admin_status==1) {
                echo "Active";
             }


             ?>



             </span>
        </td>
        <td class="center">
        <?php 
        if($show_admin->publication_status==1){

         ?>
            <a class="btn btn-danger" href="<?php echo base_url();?>/super_admin/unpublished_admin/<?php echo $show_admin->id;?>">
                <i class="glyphicon glyphicon-arrow-down icon-white"></i>
        <?php
        }
        else{

        ?>
         <a class="btn btn-success" href="<?php echo base_url();?>/super_admin/published_admin/<?php echo $show_admin->id;?>">
                <i class="glyphicon glyphicon-arrow-up icon-white"></i>
                <?php  

                    }
                ?>
                
            </a>
            <a class="btn btn-info" href="<?php echo base_url();?>/super_admin/edit_admin/<?php echo $show_admin->id;?>" title="Edit">
                <i class="glyphicon glyphicon-edit icon-white"></i>
               
            </a>
            <a class="btn btn-danger" href="<?php echo base_url();?>/super_admin/delete_admin/<?php echo $show_admin->id;?>" title="Delete">
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