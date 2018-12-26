       
<?php  require_once 'admin_header.php'; ?>
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
       
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> If you want to edit , delete and customaiz any software data, Please check here</h2>

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
    <th>software Id</th>
        <th>software Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    
<?php  
    foreach ($view_softwer as $show_softwer) 
    {
    ?>
    <tr>
        <td class="center"><?php echo $show_softwer->softwer_id;?></td>
        <td><?php echo $show_softwer->softwer_name;?></td>
        

        <td class="center">
            <a class="btn btn-info" href="<?php echo base_url();?>/super_admin/edit_softwer/<?php echo $show_softwer->softwer_id;?>" title="Edit">
                <i class="glyphicon glyphicon-edit icon-white"></i>
               
            </a>
            <a class="btn btn-danger" href="<?php echo base_url();?>/super_admin/delete_softwer/<?php echo $show_softwer->softwer_id;?>" title="Delete" onclick="return confirm('Are you sure want to delete ???')">
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