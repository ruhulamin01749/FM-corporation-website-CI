<?php 
include "header.php";
 ?>


<section id="contentSection">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="left_content">
            <div class="single_page">
              <h1><?php echo $movie_detail->movie_name ?></h1>
              <div class="post_commentbox">
                <span><i class="fa fa-calendar"></i><b>Publish Date</b> : <?php echo $movie_detail->date ?></span>
                <span><i class="fa fa-user"></i><b>Views</b> : <?php echo $movie_detail->hit_count ?></span>
               <!--  <a href="#"><i class="fa fa-tags"></i>Technology</a> -->
              </div>
              <div class="single_page_content">
                <img class="img-center" src="<?php echo base_url(); ?><?php echo $movie_detail->movie_image ?>" alt="img">
               
<!--facebook plugins area-->
               
               <div class="fb-like" data-href="<?php echo current_url(); ?>" data-width="200px" data-layout="button_count" data-action="like" data-show-faces="true"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <div class="fb-share-button" data-href="<?php echo current_url(); ?>" data-layout="button_count"></div>
               

             



 <!--End facebook plugins area-->
               <br><br><br><br>
                <ul>
                  <?php 
                  if($movie_detail->realese_date ){

                 ?>
                  <li><b>Realese Date</b> : <?php echo $movie_detail->realese_date ?></li>
                  <?php } 
                  
                  if($movie_detail->director ){

                 ?>
                  <li><b>Director</b> : <?php echo $movie_detail->director ?></li>
                   <?php 
                 } 
                  if($movie_detail->cast ){

                 ?>
                  <li><b>Cast</b> : <?php echo $movie_detail->cast ?></li>
                  
                  <?php } ?>
                  
                 
<br><br><br>

                </ul>
                <center><a href="<?php echo $movie_detail->movie_link ?>"><button class="btn btn-green">Download Now</button></a></center>
                <br><br><br>
              </div>

            </div> 
            <h4 style="color:#2AAA2A;font-weight:bold;" >Related Movies</h4><br>
            <div class="single_post_content">

             
             
              <ul class="photograph_nav  wow fadeInDown"> 
              <?php 
                    foreach ($related as $related_movie) {

                   ?>               
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                    <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $related_movie->movie_id ?>"title="">
                    <img src="<?php echo base_url(); ?><?php echo $related_movie->movie_image ?>" alt=""/></a> 
                             
                    </figure>
                  </div>
                  <figure class="bssmall_fig">
          <figcaption>
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $related_movie->movie_id ?>">
<?php echo $related_movie->movie_name ?></a><br>
                        <p>Publish Date : <?php echo $related_movie->date ?> , Views : <?php echo $related_movie->hit_count; ?></p>
          </figcaption>
          </figure>


                </li>
               <?php } ?>
                             
               
              </ul>            
            </div>           
          </div>
           <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-width="100%" data-numposts="8"></div>
        </div>
       
       <?php include"sidebar.php";  ?>
    </section>


<?php 
include "footer.php"; 
 ?>