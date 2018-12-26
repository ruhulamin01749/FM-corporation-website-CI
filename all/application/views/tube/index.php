<?php 

include "header.php";
include "sidebar.php";

 ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="top-grids">
					<div class="recommended-info">
						<h3>RECENT VIDEOS</h3>
					</div>
					<?php 

						foreach ($recent_video as $recent_video) {
							
					 ?>
					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-img recommended-grid-img">
							<a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $recent_video->video_id  ?>"><img style="height:250px;" src="<?php echo base_url(); ?><?php echo $recent_video->video_image; ?>" alt="" /></a>
							<div class="time">
								<p><?php echo $recent_video->video_duration; ?></p>
							</div>
							
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $recent_video->video_id  ?>" class="title title-info"><?php echo $recent_video->video_name; ?></a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author"><?php echo $recent_video->publisher_name ?></a></p></li>
								<li class="right-list"><p class="views views-info"><?php echo $recent_video->hit_count ?> views</p></li>
							</ul>
						</div>
					</div>
					<?php } ?>
					
					
					<div class="clearfix"> </div>
				</div>
				<div class="recommended">
					<div class="recommended-grids">
						<div class="recommended-info">
							<h3>POPULAR VIDEOS</h3>
						</div>
						<script src="<?php echo base_url(); ?>kachajal_tube/js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider3">
								<li>
									<div class="animated-grids">
										<?php  
											foreach ($popular_video_1 as $p_video_1) {
										?>

										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $p_video_1->video_id ?>"><img src="<?php echo base_url(); ?><?php echo $p_video_1->video_image ?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p><?php echo $p_video_1->video_duration ?></p>
												</div>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $p_video_1->video_id ?>" class="title"><?php echo $p_video_1->video_name ?></a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $p_video_1->publisher_name ?></a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info"><?php echo $p_video_1->hit_count ?> views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<?php } ?>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="animated-grids">
										
										<?php  
											foreach ($popular_video_2 as $p_video_2) {
										?>

										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $p_video_2->video_id ?>"><img src="<?php echo base_url(); ?><?php echo $p_video_2->video_image ?>" alt="" /></a>
												<div class="time small-time slider-time">
													<p><?php echo $p_video_2->video_duration ?></p>
												</div>
												
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $p_video_2->video_id ?>" class="title"><?php echo $p_video_2->video_name ?></a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="#" class="author"><?php echo $p_video_2->publisher_name ?></a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info"><?php echo $p_video_2->hit_count ?> views</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
										<?php } ?>

										<div class="clearfix"> </div>

									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="recommended">
					<div class="recommended-grids">
						<div class="recommended-info">
							<h3>ALL VIDEOS</h3>
						</div>
					<?php 

						foreach ($all_video as $all_video) {
							
					 ?>
						
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $all_video['video_id']  ?>"><img style="height:150px;" src="<?php echo base_url(); ?><?php echo $all_video['video_image']; ?>" alt="" /></a>
								<div class="time small-time">
									<p><?php echo $all_video['video_duration']; ?></p>
								</div>
								<!-- <div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div> -->
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="<?php echo base_url(); ?>tube/video_detail/?php echo $all_video->video_id; ?>" class="title"><?php echo $all_video['video_name']; ?></a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author"><?php echo $all_video['publisher_name']; ?></a></p></li>
									<li class="right-list"><p class="views views-info"><?php echo $all_video['hit_count']; ?> views</p></li>
								</ul>
							</div>
						</div>
						<?php } ?>
						
						<div class="clearfix"> </div>
						<?php echo $this->pagination->create_links();?>  
					</div>
					
				</div>
			
			</div>
			<?php include "footer.php"; ?>