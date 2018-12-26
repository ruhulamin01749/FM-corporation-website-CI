<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Tube Category here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_service_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_tube_category" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tube Category Name</label>
                        <input type="text" name="tube_category_name" class="form-control" id="exampleInputEmail1" placeholder="tube_category Name........." value="<?php echo $tube_category_info->tube_category_name;?>" required>
                        <input type="hidden" name="tube_category_id" value="<?php echo $tube_category_info->tube_category_id;?>" required>

                        

                    </div>
                
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update Tube Category</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>


 <?php  require_once 'admin_footer.php'; ?>