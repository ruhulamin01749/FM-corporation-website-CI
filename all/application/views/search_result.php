
    <?php

    include "header.php";
    
    ?>

 
    <section id="contentSection">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="left_content">

<div class="single_post_content">

              <h2><span>Results for search........</span></h2>
             
              <ul class="photograph_nav  wow fadeInDown"> 
              <?php 
                    foreach ($search_result as $search_result) {

                   ?>               
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                    <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $search_result->movie_id ?>"title="">
                    <img src="<?php echo base_url(); ?><?php echo $search_result->movie_image ?>" alt=""/></a> 
                             
                    </figure>
                  </div>
                  <figure class="bssmall_fig">
          <figcaption>
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $search_result->movie_id ?>">
<?php echo $search_result->movie_name ?></a><br>
                        <p>Publish Date : <?php echo $search_result->date ?> , Views : <?php echo $search_result->hit_count; ?></p>
          </figcaption>
          </figure>


                </li>
               <?php } ?>
                             
               
              </ul>            
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