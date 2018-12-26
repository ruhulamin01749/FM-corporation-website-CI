<section id="sliderSection">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- Set up your HTML -->
          <div class="slick_slider">
<!-- Start WOWSlider.com BODY section -->

<div id="wowslider-container1">
<div class="ws_images"><ul>
        <?php 
            foreach ($slider_movie as $s_movie) {
                
        ?>
        <li><a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $s_movie->movie_id ?>"><img src="<?php echo base_url(); ?><?php echo $s_movie->movie_image ?>" alt="<?php echo $s_movie->movie_name ?>" title="<?php echo $s_movie->movie_name ?>" id="wows1_0"/></a></li>
        <?php } ?>
    </ul></div>
    <div class="ws_bullets"><div>
    <?php  
        foreach ($slider_movie as $s_movie) {
            
    ?>
        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $s_movie->movie_id ?>" title="<?php echo $s_movie->movie_name ?>"><span><img src="<?php echo base_url(); ?><?php echo $s_movie->movie_image ?>" alt="<?php echo $s_movie->movie_name ?>"/>1</span></a>
        <?php } ?>
 
    </div></div>
<script type="text/javascript" src="<?php echo base_url(); ?>engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
</div>
</div>
</div>
</section>