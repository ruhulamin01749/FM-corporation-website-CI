<div class="row-fluid">
            <div class="span12">

                <div id="headerSeparator"></div>

                <div class="camera_full_width">
                    <div id="camera_wrap">

                                
<?php  
    foreach ($view_slider as $show_slider) 
    {
    ?>

                        <div data-src="<?php echo base_url(); ?><?php echo $show_slider->image_name; ?>" ><div class="camera_caption fadeFromBottom cap1"><?php echo $show_slider->slogan; ?></div></div>

                        <?php

                        }

                        ?>
						
                    </div>
                    <br style="clear:both"/><div style="margin-bottom:40px"></div>
                </div>               

                <div id="headerSeparator2"></div>

            </div>
        </div>
    </div>