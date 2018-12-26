<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Softwer | Login</title>
    
    
    
    
        <link rel="stylesheet" href="<?php echo base_url(); ?>style/style_3.css">

    
    
    
  </head>

  <body>

    <body>
<div class="container">
	<section id="content">
	<h4 style="color:blue">
                 <?php
                $msg = $this->session->userdata('meassage');
                if($msg){
                    echo $msg;
                    $this->session->unset_userdata('meassage');
                }

                ?>
                </h4>
		<form action="<?php echo base_url(); ?>secret/user_login" method="post">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username or Email" name="user_name" required="" id="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" name="user_password" required="" id="password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
				
			</div>
		</form><!-- form -->

	</section><!-- content -->
</div><!-- container -->
</body>
    
        <script src="<?php echo base_url(); ?>script/index.js"></script>

    
    
    
  </body>
</html>
