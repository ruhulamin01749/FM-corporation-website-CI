<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Services here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_service_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_service" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Services name</label>
                        <input type="text" name="service_name" class="form-control" id="exampleInputEmail1" placeholder="Service Name........." value="<?php echo $service_info->service_name;?>">
                        <input type="hidden" name="service_id" value="<?php echo $service_info->service_id;?>">
                    </div>
                    

                    
                   <div class="form-group">
                        <label for="exampleInputEmail1">Services Images</label>
                        <input data-no-uniform="true" type="file" name="service_image" id="file_upload" value="<?php echo $service_info->service_image;?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Services Icon</label>
                        <input type="text" name="service_icon" class="form-control" id="exampleInputEmail1" placeholder="Service Icon........." value="<?php echo $service_info->service_icon;?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Service Discription</label>
                        <textarea class="form-control" id="exampleInputPassword1" name="service_desc"><?php echo $service_info->service_desc;?></textarea>
                    </div>

                    <div class="control-group">
                    <label class="control-label" for="selectError">Publication status</label>

                    <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="publication_status">
                            <option>Select publication status</option>
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                            
                        </select>
                    </div>
                </div>
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update service</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<script type="text/javascript">
    document.forms['edit_service_form'].elements['publication_status'].value='<?php echo $service_info->publication_status;?>';
    
</script>









 <?php  require_once 'admin_footer.php'; ?>