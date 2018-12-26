<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Project here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_project_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_project" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Project name</label>
                        <input type="text" name="project_name" class="form-control" id="exampleInputEmail1" placeholder="projects Name........." value="<?php echo $project_info->project_name;?>">
                        <input type="hidden" name="project_id" value="<?php echo $project_info->project_id;?>">
                    </div>
                    

                    
                   <div class="form-group">
                        <label for="exampleInputEmail1">Project  Images</label>
                        <input data-no-uniform="true" type="file" name="project_image" id="file_upload" value="<?php echo $project_info->project_image;?>">
                    </div>
                    

                    <div class="form-group">
                        <label for="exampleInputPassword1">Project  Discription</label>
                        <textarea class="form-control" id="exampleInputPassword1" name="project_desc"><?php echo $project_info->project_desc;?></textarea>
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
                    <button type="submit" class="btn btn-default" name="submit">Update Project </button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<script type="text/javascript">
    document.forms['edit_project_form'].elements['publication_status'].value='<?php echo $project_info->publication_status;?>';
    
</script>









 <?php  require_once 'admin_footer.php'; ?>