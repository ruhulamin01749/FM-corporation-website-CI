<div class="col-sm-3 col-md-2 sidebar">
			<div class="top-navigation">
				<div class="t-menu">MENU</div>
				<div class="t-img">
					<img src="<?php echo base_url(); ?>kachajal_tube/images/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="drop-navigation drop-navigation">
				 
				<ul class="nav nav-sidebar">
					<li class="active"><a href="<?php echo base_url(); ?>tube" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>

					
					<li><a href="#" class="menu1"><span class="glyphicon glyphicon-music" aria-hidden="true"></span>Music Videos<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
						<ul class="cl-effect-2">
						<?php 
						foreach ($publish_tube_category as $category) {	
					?> 
							<li><a href="<?php echo base_url(); ?>tube/category_video/<?php echo $category->tube_category_id ?>"><?php echo $category->tube_category_name ?></a></li>                                             
							 <?php } ?>
						</ul>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu1" ).click(function() {
							$( "ul.cl-effect-2" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>

						<li><a href="#" class="menu"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>Multimedia<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
						<ul class="cl-effect-1">
						<?php 
						foreach ($publish_tube_category_2 as $category) {	
						?> 
							<li><a href="<?php echo base_url(); ?>tube/category_video/<?php echo $category->tube_category_id ?>"><?php echo $category->tube_category_name ?></a></li>                                             
						<?php } ?>	 
						</ul>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu" ).click(function() {
							$( "ul.cl-effect-1" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
					<!-- Main menu responsive dropdown -->
					<script>
							$( ".top-navigation" ).click(function() {
							$( ".drop-navigation" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
				  </ul>
				 
					 <div class="side-bottom">
						<div class="side-bottom-icons">
							<ul class="nav2">
								<li><a href="https://www.facebook.com/kachajal" target="_blank" class="facebook"> </a></li>
								<li><a href="https://www.facebook.com/kachajal" target="_blank" class="facebook twitter"> </a></li>
								<li><a href="https://www.facebook.com/kachajal" target="_blank" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
								<li><a href="https://www.facebook.com/kachajal" class="facebook"> </a></li>

							</ul>
						</div>
						
					</div> 
				</div>
        </div>


        		
