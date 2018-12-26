<?php  
	include "header.php";
	include "sidebar.php";
?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-8 single-left">
					
						<div class="song-info">
							<h3><?php echo $single_video->video_name ?></h3>
							<br>
							<script type="text/javascript">
								var vid = document.getElementById("myVideo");
vid.onseeking = function() {
    alert("Seek operation began!");
};
							</script>

	<video controls autoplay id="sampleMovie" width="100%" height="auto" preload controls>
	<source src="<?php echo $single_video->video_link ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
	<source src="HTML5Sample_Ogg.ogv" type='video/ogg; codecs="theora, vorbis"' />
	<source src="HTML5Sample_WebM.webm" type='video/webm; codecs="vp8, vorbis"' />
</video> 	

  						</div>
				
					<div class="clearfix"> </div>
					<div class="fb-like" data-href="<?php echo current_url(); ?>" data-width="200px" data-layout="button_count" data-action="like" data-show-faces="true"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <div class="fb-share-button" data-href="<?php echo current_url(); ?>" data-layout="button_count"></div>
              
					<div class="published">
						<script src="jquery.min.js"></script>
							<script>
								$(document).ready(function () {
									size_li = $("#myList li").size();
									x=1;
									$('#myList li:lt('+x+')').show();
									$('#loadMore').click(function () {
										x= (x+1 <= size_li) ? x+1 : size_li;
										$('#myList li:lt('+x+')').show();
									});
									$('#showLess').click(function () {
										x=(x-1<0) ? 1 : x-1;
										$('#myList li').not(':lt('+x+')').hide();
									});
								});
							</script>
							<div class="load_more">	
								<ul id="myList">
									<li>
										<h4 style="float:left;">Publish Date  : <?php echo $single_video->publish_date ?></h4>
										<p style="float:right;"><?php echo $single_video->hit_count ?> Views</p>
										<br><br><br>	
										<p><?php echo $single_video->video_desc ?></p>
									</li>
									
								</ul>
							</div>
					</div>
					<div class="all-comments">
						<div class="all-comments-info">
							<h5>Comment Here</h5>
							<div class="box">
								<form action="<?php echo base_url(); ?>tube/save_comment" method="post">
									<input type="hidden" name="video_id" value="<?php echo $single_video->video_id ?>">
									<input type="text" name="name" placeholder="Name......" required=" ">	
									<input type="text" name="email" placeholder="Email......" required=" ">
									<textarea placeholder="Message......" name="message" required=" "></textarea>
									<input type="submit" value="SUBMIT COMMENT">
									<div class="clearfix"> </div>
								</form>
							</div>
							
							
						</div>

						<div class="media-grids">
						<h4>Total Comments (0<?php echo $total_rows_comment ?>)</h4>
					 <?php 
					  foreach ($comment as $comment) {
					 	
					 ?>
							<div class="media">
								<h5><?php echo $comment->name ?></h5>
								
								<div class="media-body">
									<p><?php echo $comment->message ?></p>
									
								</div>
							</div>
						<?php } ?>	
							
							
							
							
						</div> 
						 <div class="all-comments-buttons">
								<div class="fb-comments" data-href="<?php echo current_url(); ?>" data-width="100%" data-numposts="10"></div>
							</div> 
					</div>
				</div>
				<div class="col-md-4 single-right">
					<h3>Up Next</h3>
					<div class="single-grid-right">
					<?php 
						foreach ($upnext_video as $upnext_video) {
					 ?>
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $upnext_video->video_id ?>"><img style="height:70px;" src="<?php echo base_url(); ?><?php echo $upnext_video->video_image ?>" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="<?php echo base_url(); ?>tube/video_detail/<?php echo $upnext_video->video_id ?>" class="title"> <?php echo $upnext_video->video_name ?></a>
								<p class="author"><a href="#" class="author"><?php echo $upnext_video->publisher_name ?></a></p>
								<p class="views"><?php echo $upnext_video->hit_count ?> Views</p>
							</div>
							<div class="clearfix"> </div>
						</div>

						<?php } ?>


					</div>
				</div>
				<div class="clearfix"> </div>

			</div>
			<?php include "footer.php"; ?>