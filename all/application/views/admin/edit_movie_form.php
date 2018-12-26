<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
           



<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit movies here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_movie_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_movie" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Movie name</label>
                        <input type="text" name="movie_name" class="form-control" id="exampleInputEmail1" placeholder="Movie Name........." value="<?php echo $movie_info->movie_name;?>" required>
                        <input type="hidden" name="movie_id" value="<?php echo $movie_info->movie_id;?>">
                    </div>
                    

                   <div class="form-group">
                        <label for="exampleInputEmail1">Movie  Images</label>
                        <input data-no-uniform="true" type="file" name="" id="file_upload" value="">
                        <input data-no-uniform="true" type="file" name="movie_image" id="file_upload" value="<?php echo $movie_info->movie_image;?>">
                    </div>

                    

                   <div class="control-group">
                    <label class="control-label" for="selectError">Movie category</label>

                    <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="movie_category" required>
                            <option>Select category....</option>

                             <?php
                  foreach ($publish_category as $s_category) {
                  
                  ?>
                    <option value="<?php echo $s_category->category_id; ?>"><?php echo $s_category->category_name; ?></option>

                    <?php } ?>
                    
                    
                  </ul>
                </div>
    
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Realese Date</label>
                        <input type="text" name="realese_date" class="form-control" id="exampleInputEmail1" placeholder="Realese Date........." value="<?php echo $movie_info->realese_date;?>" r>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Director</label>
                        <input type="text" name="director" class="form-control" id="exampleInputEmail1" placeholder="Director........." value="<?php echo $movie_info->director;?>" >
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cast</label>
                        <input type="text" name="cast" class="form-control" id="exampleInputEmail1" placeholder="Cast........." value="<?php echo $movie_info->cast;?>" required>
                        
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Movie Link</label>
                        <input type="text" name="movie_link" class="form-control" id="exampleInputEmail1" placeholder="Movie link........." value="<?php echo $movie_info->movie_link;?>" required>
                        <input type="hidden" name="date" class="form-control" id="exampleInputEmail1" value="<?php echo $movie_info->date;?>">
                    </div>
                    

                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update Movies </button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<script type="text/javascript">
    document.forms['edit_movie_form'].elements['movie_category'].value='<?php echo $movie_info->movie_category; ?>';
</script>


 <?php  require_once 'admin_footer.php'; ?>