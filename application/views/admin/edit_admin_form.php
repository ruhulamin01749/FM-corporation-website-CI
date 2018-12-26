<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Admin here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_admin_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_admin" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admins name</label>
                        <input type="text" name="admin_name" class="form-control" id="exampleInputEmail1" placeholder="admins Name........." value="<?php echo $admin_info->name;?>">
                        <input type="hidden" name="admin_id" value="<?php echo $admin_info->id;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admins email</label>
                        <input type="text" name="admin_email" class="form-control" id="exampleInputEmail1" placeholder="admins email........." value="<?php echo $admin_info->email;?>">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admins Password</label>
                        <input type="password" name="admin_password" class="form-control" id="exampleInputEmail1" placeholder="New password........." value="<?php echo $admin_info->password;?>">
                       
                    </div>

                    <div class="control-group">
                    <label class="control-label" for="selectError">Active status</label>

                    <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="publication_status">
                            <option>Select publication status</option>
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                            
                        </select>
                    </div>
                </div>
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update Admins </button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<script type="text/javascript">
    document.forms['edit_admin_form'].elements['publication_status'].value='<?php echo $admin_info->publication_status;?>';
    
</script>









 <?php  require_once 'admin_footer.php'; ?>