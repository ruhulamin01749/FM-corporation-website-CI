<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
   
</div>

<h4 style="color:blue">
    
    <?php 
    $msg = $this->session->userdata('message');
    if($msg){
        echo $msg;
        $this->session->unset_userdata('message');

    }

     ?>
</h4>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add Movies here</h2>

                
            </div>
            <div class="box-content">
                <form role="form" action="<?php echo base_url(); ?>/super_admin/save_movie" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Movie name</label>
                        <input type="text" name="movie_name" class="form-control" id="exampleInputEmail1" placeholder="movies Name........." required>
                    </div>
                   
                        <label>Movie Cover</label>
                        <input data-no-uniform="true" type="file" name="" id="file_upload" value="">
                     <input data-no-uniform="true" type="file" name="movie_image" id="file_upload"required>

                    <div class="control-group">
                    <label class="control-label" for="selectError">Movie category</label>

                    <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="movie_category" required>
                            <option>Select category....</option>

                             <?php
                  foreach ($publish_category as $b_category) {
                  
                  ?>
                    <option value="<?php echo $b_category->category_id; ?>"><?php echo $b_category->category_name; ?></option>
                    <?php } ?>
                    
                  </ul>
                </div>
               

                           
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Realese Date</label>
                        <input type="text" name="realese_date" class="form-control" id="exampleInputEmail1" placeholder="Realese Date........." >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Director</label>
                        <input type="text" name="director" class="form-control" id="exampleInputEmail1" placeholder="Director........." >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cast</label>
                        <input type="text" name="cast" class="form-control" id="exampleInputEmail1" placeholder="Cast........." >
                    </div>
                    

                    <div class="form-group">
                        <label for="exampleInputPassword1">Movie Link</label>
                         <input type="text" name="movie_link" class="form-control" id="exampleInputEmail1" placeholder="movie link.........">
                        
                     <input type="hidden" name="date" class="form-control" id="exampleInputEmail1" value="  <?php
echo date('d-M-Y');
?>">
                    </div>

                   
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Add Movies</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>










 <?php  require_once 'admin_footer.php'; ?>