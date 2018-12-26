<?php 
	include "header.php";
	include  "sidebar.php";
 ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="recommended">
					<div class="recommended-grids english-grid">
						<div class="recommended-info">
							
								<h3><?php echo $category_name->tube_category_name; ?></h3>
							
							
							<div class="clearfix"> </div>
						</div>

						<?php 
							foreach ($show_video_by_category_id as $category_video) {
						 ?>
						<div class="col-md-3 resent-grid recommended-grid sports-recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $category_video['video_id']; ?>"><img src="<?php echo base_url(); ?><?php echo $category_video['video_image']; ?>" alt="" /></a>
								<div class="time small-time sports-tome">
									<p><?php echo $category_video['video_duration']; ?></p>
								</div>
								
							</div>
							<div class="resent-grid-info recommended-grid-info">
								<h5><a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $category_video['video_id']; ?>" class="title"><?php echo $category_video['video_name']; ?></a></h5>
								<ul>
								<li><p class="author"><a href="#" class="author"><?php echo $category_video['publisher_name']; ?></a></p></li>
								<li class="right-list"><p class="views"><?php echo $category_video['hit_count']; ?> views</p></li>
								</ul>
							</div>
						</div>
						<?php } ?>

						<div class="clearfix"> </div>
						<?php echo $this->pagination->create_links();?>    
					</div>
				</div>
				
				
			</div>
		<?php 
	include "footer.php";
	
 ?>