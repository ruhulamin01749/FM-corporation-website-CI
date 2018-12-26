<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit Tube Videos here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_tube_video_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_tube_video" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tube Video name</label>
                        <input type="text" name="tube_video_name" class="form-control" id="exampleInputEmail1" placeholder="Tube Video Name........."  value="<?php echo $tube_video_info->video_name;?>" required>

                        <input type="hidden" name="tube_video_id" value="<?php echo $tube_video_info->video_id;?>">
                    </div>
                    

                   <div class="form-group">
                        <label for="exampleInputEmail1">Tube Video  Images</label>
                        <input data-no-uniform="true" type="file" name="" id="file_upload" value="">
                        <input data-no-uniform="true" type="file" name="tube_video_image" id="file_upload" value="<?php echo $tube_video_info->video_image;?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tube video Link</label>
                        <input type="text" name="tube_video_link" class="form-control" id="exampleInputEmail1" placeholder="tube_video link........." value="<?php echo $tube_video_info->video_link;?>" required>

                    

                   <div class="control-group">
                    <label class="control-label" for="selectError">Tube Video category</label>

                    <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="tube_video_category" required>
                            <option>Select category....</option>

                             <?php
                  foreach ($publish_tube_category as $category) {
                  
                  ?>
                    <option value="<?php echo $category->tube_category_id; ?>"><?php echo $category->tube_category_name; ?></option>

                    <?php } ?>
                    
                    
                  </ul>
                </div>
    
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tube Video Discription</label>
                        <input type="text" name="tube_video_desc" class="form-control" id="exampleInputEmail1" placeholder="Tube Video Discription........." value="<?php echo $tube_video_info->video_desc;?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tube Video Duration</label>
                        <input type="text" name="tube_video_duration" class="form-control" id="exampleInputEmail1" placeholder="Tube Video Duration........." value="<?php echo $tube_video_info->video_duration; ?>"  required>
                    </div>
               <div class="form-group">
                        <input type="hidden" name="publish_date" class="form-control" id="exampleInputEmail1" value="<?php echo $tube_video_info->publish_date;?>">
                        <input type="hidden" name="publisher_name" class="form-control" id="exampleInputEmail1" value="<?php echo $this->session->userdata('name'); ?>">
                    </div>
                    

                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update Tube </button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>




<script type="text/javascript">
    document.forms['edit_tube_video_form'].elements['tube_video_category'].value='<?php echo $tube_video_info->video_category; ?>';
</script>


 <?php  require_once 'admin_footer.php'; ?>