<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit software here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_softwer_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_softwer" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">software name</label>
                        <input type="text" name="softwer_name" class="form-control" id="exampleInputEmail1" placeholder="Software Name........." value="<?php echo $softwer_info->softwer_name;?>" required>
                        <input type="hidden" name="softwer_id" value="<?php echo $softwer_info->softwer_id;?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">software Discription</label>
                        <input type="text" name="softwer_desc" class="form-control" id="exampleInputEmail1" placeholder="software_desc........." value="<?php echo $softwer_info->softwer_desc;?>" required>
                        
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">software Link</label>
                        <input type="text" name="softwer_link" class="form-control" id="exampleInputEmail1" placeholder="software link........." value="<?php echo $softwer_info->softwer_link;?>" required>
                       
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">software Size</label>
                        <input type="text" name="softwer_size" class="form-control" id="exampleInputEmail1" placeholder="software size........." value="<?php echo $softwer_info->softwer_size;?>" required>
                       
                    </div>
                    

                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update software </button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<script type="text/javascript">
    document.forms['edit_softwer_form'].elements['softwer_category'].value='<?php echo $softwer_info->softwer_category; ?>';
</script>


 <?php  require_once 'admin_footer.php'; ?>