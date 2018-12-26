<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit secret_software here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_secret_softwer_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_secret_softwer" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">secret_software name</label>
                        <input type="text" name="secret_softwer_name" class="form-control" id="exampleInputEmail1" placeholder="secret_software Name........." value="<?php echo $secret_softwer_info->secret_softwer_name;?>" required>
                        <input type="hidden" name="secret_softwer_id" value="<?php echo $secret_softwer_info->secret_softwer_id;?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">secret_software Discription</label>
                        <input type="text" name="secret_softwer_desc" class="form-control" id="exampleInputEmail1" placeholder="secret_software_desc........." value="<?php echo $secret_softwer_info->secret_softwer_desc;?>" required>
                        
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">secret_software Link</label>
                        <input type="text" name="secret_softwer_link" class="form-control" id="exampleInputEmail1" placeholder="secret_software link........." value="<?php echo $secret_softwer_info->secret_softwer_link;?>" required>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">secret_software Size</label>
                        <input type="text" name="secret_softwer_size" class="form-control" id="exampleInputEmail1" placeholder="secret_software size........." value="<?php echo $secret_softwer_info->secret_softwer_size;?>" required>
                       
                    </div>
                    

                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update secret_software </button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<script type="text/javascript">
    document.forms['edit_secret_softwer_form'].elements['secret_softwer_category'].value='<?php echo $secret_softwer_info->secret_softwer_category; ?>';
</script>


 <?php  require_once 'admin_footer.php'; ?>