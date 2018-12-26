<div class="col-lg-4 col-md-4 col-sm-4">
          <div class="latest_post">
            <h2><span>Popular Movies</span></h2>
            <div class="latest_post_container">
              <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
              <ul class="latest_postnav">
              <?php 
foreach ($popular_movie as $new_movie) {
  ?>
                <li>
                  <div class="media">
                    <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $new_movie->movie_id ?>" class="media-left">
                      <img alt="img" src="<?php echo base_url();?><?php echo $new_movie->movie_image; ?>">
                    </a>
                    <div class="media-body">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $new_movie->movie_id ?>" class="catg_title"> <?php echo $new_movie->movie_name; ?></a><br><br>
                         <p>Publish Date : <?php echo $new_movie->date ?> , Views : <?php echo $new_movie->hit_count ?></p>                        
                    </div>
                  </div>
                </li>
                <?php  } ?>
                
              </ul>
             <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
            </div>
          </div>
        </div> 


        <div style="float:right;" class="col-lg-4 col-md-4 col-sm-4">
          <aside class="right_content">

          <div class="single_sidebar">
              
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>      
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="category">
                  <ul>
                  <?php
                  foreach ($publish_catagory as $p_category) {
                   
                 

                  ?>
                    <li class="cat-item"><a href="<?php echo base_url(); ?>welcome/category_movie/<?php echo $p_category->category_id; ?>"><?php echo $p_category->category_name ;  ?></a></li>
                    <?php } ?>
       
         
                    
                  </ul>
                </div>
                
                
              </div>            
            </div> 
         
            <div class="single_sidebar">
              <h2><a href="http://fs.1netbd.com/welcome/category_movie/10"><span style="color:white;">Music Videos</span></a></h2>
              <ul class="spost_nav">
                <li>
                 <?php 
                    foreach ($music_video as $m_video) {

                   ?>
                  <div class="media wow fadeInDown">
                    <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $m_video->movie_id ?>" class="media-left">
                      <img alt="img" src="<?php echo base_url();?><?php echo $m_video->movie_image ?>">
                    </a>
                    <div class="media-body">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $m_video->movie_id ?>" class="catg_title"> <?php echo $m_video->movie_name ?></a><br><br>
                      <p> Publish Date : <?php echo $m_video->date; ?> , Views : <?php echo $m_video->hit_count; ?></p>                        
                    </div>
                  </div>
                </li>
                <?php } ?> 
              </ul>
            </div>
         
          
            
            <!-- start tab section -->
            
           
        
            <div class="single_sidebar wow fadeInDown">
              <h2><span>Like Us On Facebook</span></h2>
             <div class="fb-page" data-href="https://www.facebook.com/kachajal/" data-tabs="timeline" data-width="350" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"></div>
            </div>
          
             <!-- Category Archive -->
            <!-- <div class="single_sidebar wow fadeInDown">
              <h2><span>Category Archive</span></h2>
              <select class="catgArchive">
                <option>Select Category</option>
                <option>Life styles</option>
                <option>Sports</option>
                <option>Technology</option>
                <option>Treads</option>
              </select>
            </div> -->
            <!-- End category Archive -->
              <!-- sponsor add -->
           
            <!-- End sponsor add -->

          </aside>
        </div>