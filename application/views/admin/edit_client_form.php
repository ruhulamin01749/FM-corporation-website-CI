<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Client here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_client_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_client" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Clients name</label>
                        <input type="text" name="client_name" class="form-control" id="exampleInputEmail1" placeholder="Clients Name........." value="<?php echo $client_info->client_name;?>">
                        <input type="hidden" name="client_id" value="<?php echo $client_info->client_id;?>">
                    </div>
                    

                    
                   <div class="form-group">
                        <label for="exampleInputEmail1">Clients  Images</label>
                        <input data-no-uniform="true" type="file" name="client_image" id="file_upload" value="<?php echo $client_info->client_image;?>">
                    </div>
                    

                    <div class="form-group">
                        <label for="exampleInputPassword1">Clients  Discription</label>
                        <textarea class="form-control" id="exampleInputPassword1" name="client_desc"><?php echo $client_info->client_desc;?></textarea>
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
                    <button type="submit" class="btn btn-default" name="submit">Update Clients </button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<script type="text/javascript">
    document.forms['edit_client_form'].elements['publication_status'].value='<?php echo $client_info->publication_status;?>';
    
</script>









 <?php  require_once 'admin_footer.php'; ?>