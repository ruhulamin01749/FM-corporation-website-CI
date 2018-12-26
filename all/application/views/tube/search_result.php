<?php 
	include "header.php";
	include  "sidebar.php";
 ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="recommended">
					<div class="recommended-grids english-grid">
						<div class="recommended-info">
							<div class="heading">
								<h3>SEARCH RESULTS</h3>
							</div>
							
							<div class="clearfix"> </div>
						</div>

						<?php 
							foreach ($search_result as $search_result) {
						 ?>
						<div class="col-md-2 resent-grid recommended-grid sports-recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $search_result->video_id; ?>"><img src="<?php echo base_url(); ?><?php echo $search_result->video_image; ?>" alt="" /></a>
								<div class="time small-time sports-tome">
									<p><?php echo $search_result->video_duration; ?></p>
								</div>
								
							</div>
							<div class="resent-grid-info recommended-grid-info">
								<h5><a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $search_result->video_id; ?>" class="title"><?php echo $search_result->video_name; ?></a></h5>
								<p class="author"><a href="#" class="author"><?php echo $search_result->publisher_name; ?></a></p>
								<p class="views"><?php echo $search_result->hit_count; ?> views</p>
							</div>
						</div>
						<?php } ?>

						<div class="clearfix"> </div>
					</div>
				</div>
				
				
			</div>
		<?php 
	include "footer.php";
	
 ?>