<?php

    include "header.php";
    
    ?>
    <section id="contentSection">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="left_content">
          		<div class="center wow fadeInDown">
                <center><h2>Live FM</h2></center>
                <br>
                <center><p><?php echo $fm_info->fm_name ?></p></center>              
            </div>
            <center>
<?php echo $fm_info->fm_link ?>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="single_post_content">        
          </div>
        </div>
      </div>  
    </section>
    <!-- ==================End content body section=============== -->    
    <?php
    include "footer.php";
    ?>