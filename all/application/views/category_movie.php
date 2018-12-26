
    <?php

    include "header.php";
    
    ?>

 
    <section id="contentSection">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="left_content">

<div class="single_post_content">

              <h2><span><?php echo $publish_catagory_name->category_name ?></span></h2>
             
              <ul class="photograph_nav  wow fadeInDown"> 
             <?php foreach ($category_movie as $category_movie): $segment++;?>             
                <li>
                  <div class="photo_grid">
                    <figure class="effect-layla">
                    <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $category_movie['movie_id']; ?>"  title="">
                    <img src="<?php echo base_url(); ?><?php echo $category_movie['movie_image']; ?>" alt=""/></a>          
                    </figure>
                  </div>
                  <figure class="bssmall_fig">
          <figcaption>
                        <a href="<?php echo base_url(); ?>welcome/movie_detail/<?php echo $category_movie['movie_id']; ?>"><?php echo $category_movie['movie_name']; ?></a><br>
                        <p>Publish Date : <?php echo $category_movie['date']; ?> , Views : <?php echo $category_movie['hit_count']; ?></p>
          </figcaption>
          </figure>
                </li>
             <?php endforeach; ?>
                             
               
              </ul>            
            </div>
           <!--  End single post for tv_series movies      -->     
                 <?php echo $this->pagination->create_links();?>    
          </div>
        </div>


        <?php include "sidebar.php"; ?>


      </div>  
    </section>
    <!-- ==================End content body section=============== -->    
    <?php
    include "footer.php";
    ?>