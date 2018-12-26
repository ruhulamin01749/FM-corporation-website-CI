
 <?php include "header.php"; ?>

    <div style="border-top:1px solid silver;" class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="<?php echo base_url(); ?>">Home</a> &nbsp;/&nbsp; <span>Contact</span>
            </div>
            	
            <div class="row-fluid">

            <!--side bar-->
            <div class="span4 sidebar">


                 <h3 style="color:#8282FF;">Get in Touch</h3>
                 <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Phone:</span>
                        <br />
                        +8801616222202  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+8801725681004                                                                    
                    </li><br>
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Email:</span>
                        <br />
                        tanveer@ajkerhut.com
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ruhul@ajkerhut.com
                    </li><br>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Address:</span>
                        <br />
                        House - 5,Line - 2,<br />
                        Road - 08,Block - A,<br />
                        Section - 11,Mirpur,<br/>
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dhaka,Bangladesh.
                    </li>

                    </ul><br><br>
                    <div class="fb-like" data-href="https://www.facebook.com/fmbd.corporation?fref=ts" data-width="250px" data-height="200px" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>


            </div>
                <div class="span8" id="divMain">

                    <h2 style="color:#8282FF;">Contact Us</h2>
                   	<h4 style="color:blue">
    
    <?php 
    $msg = $this->session->userdata('message');
    if($msg){
        echo $msg;
        $this->session->unset_userdata('message');

    }

     ?>
</h4>
					<hr>
			<!--Start Contact form -->		                                                
<form method="post" action="<?php echo base_url(); ?>welcome/send_mail">
  <fieldset>
    
	<input type="text" name="name" id="name" class="input-block-level" placeholder="Name" required/>
    <input type="email" name="email" id="email" value="" class="input-block-level" placeholder="Email" required/>
    <input type="text" name="subject" id="subject" class="input-block-level" placeholder="Subject" required />
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments" required></textarea>
    <div class="actions">
	<input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
	</div>
	
	</fieldset>
</form>  				 
			<!--End Contact form -->											 
                </div>
				
			
				
				
            </div>
            </div>			
<?php include"footer.php"; ?>
</div>
           