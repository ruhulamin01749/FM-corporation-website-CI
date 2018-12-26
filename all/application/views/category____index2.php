 <!--  Start single post for tv_series movies      -->     

           <div class="single_post_content">
              <h2><span>TV Series</span></h2>
              <div class="single_post_content_left">
                <ul class="business_catgnav  wow fadeInDown">
                  <li>
                  <?php 
                    foreach ($show_tv_series_first_movie as $tv_series) {

                   ?>
                    <figure class="bsbig_fig">
                      <a href="<?php echo $tv_series->movie_link ?>" target="blank" class="featured_img">
                          <img alt="img" src="<?php echo base_url();?><?php echo $tv_series->movie_image ?>">
                          <span class="overlay"></span>
                      </a>
                      <figcaption>
                        <a href="<?php echo $tv_series->movie_link ?>" target="blank"><?php echo $tv_series->movie_name ?></a>
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
                      <a href="<?php echo $tv_series->movie_link ?>" target="_blank" class="media-left">
                        <img alt="img" src="<?php echo base_url();?><?php echo $show_tv_series_movie->movie_image ?>">
                      </a>
                      <div class="media-body">
                        <a href="<?php echo $tv_series->movie_link ?>" target="_blank" class="catg_title"><?php echo $show_tv_series_movie->movie_name ?></a>                        
                      </div>
                    </div>
                  </li>
                 
                  <?php } ?>
                  
                </ul>
              </div>
            </div>
           <!--  End single post for tv_series movies      --> 


              public function show_tv_series_first_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=4 ORDER BY movie_id DESC LIMIT 0,1";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
  
}
  public function show_tv_series_movie_info(){
    $sql = "SELECT * FROM movies WHERE movie_category=4 ORDER BY movie_id DESC LIMIT 1,3";
    $query_result = $this->db->query($sql);
    $result = $query_result->result();
    return $result;
}

    $data['show_tv_series_first_movie'] = $this->welcome_model->show_tv_series_first_movie_info();
    $data['show_tv_series_movie'] = $this->welcome_model->show_tv_series_movie_info();