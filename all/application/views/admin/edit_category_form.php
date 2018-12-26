<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Category here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_service_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_category" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category name</label>
                        <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Category Name........." value="<?php echo $category_info->category_name;?>" required>
                        <input type="hidden" name="category_id" value="<?php echo $category_info->category_id;?>" required>

                        

                    </div>
                
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update Category</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>


 <?php  require_once 'admin_footer.php'; ?>