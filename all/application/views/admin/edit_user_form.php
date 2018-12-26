<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit user here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_user_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_user" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">users name</label>
                        <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" placeholder="users Name........." value="<?php echo $user_info->name;?>" required>
                        <input type="hidden" name="user_id" value="<?php echo $user_info->id;?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">users email</label>
                        <input type="text" name="user_email" class="form-control" id="exampleInputEmail1" placeholder="users email........." value="<?php echo $user_info->email;?>" required>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">users Password</label>
                        <input type="password" name="user_password" class="form-control" id="exampleInputEmail1" placeholder="New password........." value="" >
                       
                    </div>

                    <div class="control-group">
                    <label class="control-label" for="selectError">Active status</label>

                    <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="publication_status" required>
                            <option>Select publication status</option>
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                            
                        </select>
                    </div>
                </div>
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update users </button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<script type="text/javascript">
    document.forms['edit_user_form'].elements['publication_status'].value='<?php echo $user_info->publication_status;?>';
    
</script>









 <?php  require_once 'admin_footer.php'; ?>