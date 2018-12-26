
    <?php

    include "header.php";
    include "slider.php";
    ?>

 
    <section id="contentSection">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="left_content">


            <div class="single_post_content">
              <h2><a href="http://fs.1netbd.com/welcome/category_movie/1"><span> Hollywood Movie</span></a></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav  wow fadeInDown">
                  <li>
                  <?php 
                    foreach ($show_hollywood_first_movie as $Hollywood) {

                   ?>
                    <figure class="bsbig_fig">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $Hollywood->movie_id ?>" class="featured_img">
                          <img alt="img" src="<?php echo base_url();?><?php echo $Hollywood->movie_image ?>">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $Hollywood->movie_id ?>"><?php echo $Hollywood->movie_name ?></a><br>
                        <p>Publish Date : <?php echo $Hollywood->date ?> , Views : <?php echo $Hollywood->hit_count ?> </p>
                      </figcaption>
                        
                    </figure>
                    <?php } ?>
                  </li>
                </ul>
              </div>
              <div class="single_post_content_right">
                <ul class="spost_nav">
<?php  
  foreach ($show_hollywood_movie as $show_hollywood_movie) {
?>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_hollywood_movie->movie_id ?>" class="media-left">
                        <img alt="img" src="<?php echo base_url();?><?php echo $show_hollywood_movie->movie_image ?>">
                      </a>
                      <div class="media-body">
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_hollywood_movie->movie_id ?>" class="catg_title"><?php echo $show_hollywood_movie->movie_name ?></a> <br><br>
                         <p>Publish Date : <?php echo $show_hollywood_movie->date ?> , Views : <?php echo $show_hollywood_movie->hit_count ?></p>


                      </div>
                    </div>
                  </li>
                 
                  <?php } ?>
                  
                </ul>
              </div>
            </div>

             <!--  Start single post for bollywood movies      -->     

          <div class="single_post_content">
              <h2><a href="http://fs.1netbd.com/welcome/category_movie/3"><span>Bollywood Movie</span></a></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav  wow fadeInDown">
                  <li>
                  <?php 
                    foreach ($show_bollywood_first_movie as $bollywood) {

                   ?>
                    <figure class="bsbig_fig">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $bollywood->movie_id ?>" class="featured_img">
                          <img alt="img" src="<?php echo base_url();?><?php echo $bollywood->movie_image ?>">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $bollywood->movie_id ?>"><?php echo $bollywood->movie_name ?></a><br>
                        <p>Publish Date : <?php echo $bollywood->date ?> , Views : <?php echo $bollywood->hit_count ?> </p>
                      </figcaption>
                        
                    </figure>
                    <?php } ?>
                  </li>
                </ul>
              </div>
              <div class="single_post_content_right">
                <ul class="spost_nav">
<?php  
  foreach ($show_bollywood_movie as $show_bollywood_movie) {
?>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_bollywood_movie->movie_id ?>" class="media-left">
                        <img alt="img" src="<?php echo base_url();?><?php echo $show_bollywood_movie->movie_image ?>">
                      </a>
                      <div class="media-body">
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_bollywood_movie->movie_id ?>" class="catg_title"><?php echo $show_bollywood_movie->movie_name ?></a> <br><br>
                         <p>Publish Date : <?php echo $show_bollywood_movie->date ?> , Views : <?php echo $show_bollywood_movie->hit_count ?></p>


                      </div>
                    </div>
                  </li>
                 
                  <?php } ?>
                  
                </ul>
              </div>
            </div>
           <!--  End single post for bollywood movies      -->  

            <!--  Start single post for timil_telegu movies      -->     

          <div class="single_post_content">
              <h2><a href="http://fs.1netbd.com/welcome/category_movie/6"><span>Timil , Telegu and Mally Movie</span></a></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav  wow fadeInDown">
                  <li>
                  <?php 
                    foreach ($show_timil_telegu_first_movie as $timil_telegu) {

                   ?>
                    <figure class="bsbig_fig">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $timil_telegu->movie_id ?>" class="featured_img">
                          <img alt="img" src="<?php echo base_url();?><?php echo $timil_telegu->movie_image ?>">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $timil_telegu->movie_id ?>"><?php echo $timil_telegu->movie_name ?></a><br>
                        <p>Publish Date : <?php echo $timil_telegu->date ?> , Views : <?php echo $timil_telegu->hit_count ?> </p>
                      </figcaption>
                        
                    </figure>
                    <?php } ?>
                  </li>
                </ul>
              </div>
              <div class="single_post_content_right">
                <ul class="spost_nav">
<?php  
  foreach ($show_timil_telegu_movie as $show_timil_telegu_movie) {
?>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_timil_telegu_movie->movie_id ?>" class="media-left">
                        <img alt="img" src="<?php echo base_url();?><?php echo $show_timil_telegu_movie->movie_image ?>">
                      </a>
                      <div class="media-body">
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_timil_telegu_movie->movie_id ?>" class="catg_title"><?php echo $show_timil_telegu_movie->movie_name ?></a> <br><br>
                         <p>Publish Date : <?php echo $show_timil_telegu_movie->date ?> , Views : <?php echo $show_timil_telegu_movie->hit_count ?></p>


                      </div>
                    </div>
                  </li>
                 
                  <?php } ?>
                  
                </ul>
              </div>
            </div>
           <!--  End single post for timil_telegu movies      --> 
           <!--  Start single post for bangla movies      -->     

           <div class="single_post_content">
              <h2><a href="http://fs.1netbd.com/welcome/category_movie/7"><span>Bangla Movie</span></a></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav  wow fadeInDown">
                  <li>
                  <?php 
                    foreach ($show_bangla_first_movie as $bangla) {

                   ?>
                    <figure class="bsbig_fig">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $bangla->movie_id ?>" class="featured_img">
                          <img alt="img" src="<?php echo base_url();?><?php echo $bangla->movie_image ?>">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $bangla->movie_id ?>"><?php echo $bangla->movie_name ?></a><br>
                        <p>Publish Date : <?php echo $bangla->date ?> , Views : <?php echo $bangla->hit_count ?> </p>
                      </figcaption>
                        
                    </figure>
                    <?php } ?>
                  </li>
                </ul>
              </div>
              <div class="single_post_content_right">
                <ul class="spost_nav">
<?php  
  foreach ($show_bangla_movie as $show_bangla_movie) {
?>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_bangla_movie->movie_id ?>" class="media-left">
                        <img alt="img" src="<?php echo base_url();?><?php echo $show_bangla_movie->movie_image ?>">
                      </a>
                      <div class="media-body">
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_bangla_movie->movie_id ?>" class="catg_title"><?php echo $show_bangla_movie->movie_name ?></a> <br><br>
                         <p>Publish Date : <?php echo $show_bangla_movie->date ?> , Views : <?php echo $show_bangla_movie->hit_count ?></p>

                      </div>
                    </div>
                  </li>
                 
                  <?php } ?>
                  
                </ul>
              </div>
            </div>
           <!--  End single post for bangla movies      --> 
             <!--  Start single post for bangla_n movies      -->     

           <div class="single_post_content">
              <h2><a href="http://fs.1netbd.com/welcome/category_movie/8"><span>Bangla Natok</span></a></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav  wow fadeInDown">
                  <li>
                  <?php 
                    foreach ($show_bangla_n_first_movie as $bangla_n) {

                   ?>
                    <figure class="bsbig_fig">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $bangla_n->movie_id ?>" class="featured_img">
                          <img alt="img" src="<?php echo base_url();?><?php echo $bangla_n->movie_image ?>">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $bangla_n->movie_id ?>"><?php echo $bangla_n->movie_name ?></a><br>
                        <p>Publish Date : <?php echo $bangla_n->date ?> , Views : <?php echo $bangla_n->hit_count ?> </p>
                      </figcaption>
                        
                    </figure>
                    <?php } ?>
                  </li>
                </ul>
              </div>
              <div class="single_post_content_right">
                <ul class="spost_nav">
<?php  
  foreach ($show_bangla_n_movie as $show_bangla_n_movie) {
?>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_bangla_n_movie->movie_id ?>" class="media-left">
                        <img alt="img" src="<?php echo base_url();?><?php echo $show_bangla_n_movie->movie_image ?>">
                      </a>
                      <div class="media-body">
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_bangla_n_movie->movie_id ?>" class="catg_title"><?php echo $show_bangla_n_movie->movie_name ?></a> <br><br>
                         <p>Publish Date : <?php echo $show_bangla_n_movie->date ?> , Views : <?php echo $show_bangla_n_movie->hit_count ?></p>


                      </div>
                    </div>
                  </li>
                 
                  <?php } ?>
                  
                </ul>
              </div>
            </div>
           <!--  End single post for bangla_n movies      --> 
           <!--  Start single post for Chinese movies      -->     

           <div class="single_post_content">
              <h2><a href="http://fs.1netbd.com/welcome/category_movie/4"><span>Chinese Movie</span></a></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav  wow fadeInDown">
                  <li>
                  <?php 
                    foreach ($show_chinese_first_movie as $chinese) {

                   ?>
                    <figure class="bsbig_fig">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $chinese->movie_id ?>" class="featured_img">
                          <img alt="img" src="<?php echo base_url();?><?php echo $chinese->movie_image ?>">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $chinese->movie_id ?>"><?php echo $chinese->movie_name ?></a><br>
                        <p>Publish Date : <?php echo $chinese->date ?> , Views : <?php echo $chinese->hit_count ?> </p>
                      </figcaption>
                        
                    </figure>
                    <?php } ?>
                  </li>
                </ul>
              </div>
              <div class="single_post_content_right">
                <ul class="spost_nav">
<?php  
  foreach ($show_chinese_movie as $show_chinese_movie) {
?>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_chinese_movie->movie_id ?>" class="media-left">
                        <img alt="img" src="<?php echo base_url();?><?php echo $show_chinese_movie->movie_image ?>">
                      </a>
                      <div class="media-body">
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_chinese_movie->movie_id ?>" class="catg_title"><?php echo $show_chinese_movie->movie_name ?></a> <br><br>
                         <p>Publish Date : <?php echo $show_chinese_movie->date ?> , Views : <?php echo $show_chinese_movie->hit_count ?></p>


                      </div>
                    </div>
                  </li>
                 
                  <?php } ?>
                  
                </ul>
              </div>
            </div>
           <!--  End single post for Chinese movies      -->  
            <!-- Single post for Animation Movies -->
<div class="single_post_content">
              <h2><a href="http://fs.1netbd.com/welcome/category_movie/5"><span>Animation Movie</span></a></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav  wow fadeInDown">
                  <li>
                  <?php 
                    foreach ($show_animation_first_movie as $animation) {

                   ?>
                    <figure class="bsbig_fig">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $animation->movie_id ?>" class="featured_img">
                          <img alt="img" src="<?php echo base_url();?><?php echo $animation->movie_image ?>">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $animation->movie_id ?>"><?php echo $animation->movie_name ?></a><br>
                        <p>Publish Date : <?php echo $animation->date ?> , Views : <?php echo $animation->hit_count ?> </p>
                      </figcaption>
                        
                    </figure>
                    <?php } ?>
                  </li>
                </ul>
              </div>
              <div class="single_post_content_right">
                <ul class="spost_nav">
<?php  
  foreach ($show_animation_movie as $show_animation_movie) {
?>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_animation_movie->movie_id ?>" class="media-left">
                        <img alt="img" src="<?php echo base_url();?><?php echo $show_animation_movie->movie_image ?>">
                      </a>
                      <div class="media-body">
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_animation_movie->movie_id ?>" class="catg_title"><?php echo $show_animation_movie->movie_name ?></a> <br><br>
                         <p>Publish Date : <?php echo $show_animation_movie->date ?> , Views : <?php echo $show_animation_movie->hit_count ?></p>


                      </div>
                    </div>
                  </li>
                 
                  <?php } ?>
                  
                </ul>
              </div>
            </div>

           <!--  End single post for Animation movies      -->     
           
           
        
            <!--  Start single post for tv_series movies      -->     

          <div class="single_post_content">
              <h2><a href="http://fs.1netbd.com/welcome/category_movie/9"><span>TV Series </span></a></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav  wow fadeInDown">
                  <li>
                  <?php 
                    foreach ($show_tv_series_first_movie as $tv_series) {

                   ?>
                    <figure class="bsbig_fig">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $tv_series->movie_id ?>" class="featured_img">
                          <img alt="img" src="<?php echo base_url();?><?php echo $tv_series->movie_image ?>">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $tv_series->movie_id ?>"><?php echo $tv_series->movie_name ?></a><br>
                        <p>Publish Date : <?php echo $tv_series->date ?> , Views : <?php echo $tv_series->hit_count ?> </p>
                      </figcaption>
                        
                    </figure>
                    <?php } ?>
                  </li>
                </ul>
              </div>
              <div class="single_post_content_right">
                <ul class="spost_nav">
<?php  
  foreach ($show_tv_series_movie as $show_tv_series_movie) {
?>
                  <li>
                    <div class="media wow fadeInDown">
                      <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_tv_series_movie->movie_id ?>" class="media-left">
                        <img alt="img" src="<?php echo base_url();?><?php echo $show_tv_series_movie->movie_image ?>">
                      </a>
                      <div class="media-body">
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $show_tv_series_movie->movie_id ?>" class="catg_title"><?php echo $show_tv_series_movie->movie_name ?></a> <br><br>
                         <p>Publish Date : <?php echo $show_tv_series_movie->date ?> , Views : <?php echo $show_tv_series_movie->hit_count ?></p>


                      </div>
                    </div>
                  </li>
                 
                  <?php } ?>
                  
                </ul>
              </div>
            </div>
           <!--  End single post for tv_series movies      -->              
          </div>
        </div>


        <?php include "sidebar.php"; ?>


      </div>  
    </section>
    <!-- ==================End content body section=============== -->    
    <?php
    include "footer.php";
    ?>