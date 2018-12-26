<?php  require_once 'admin_header.php'; ?>
 

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
   
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-plus"></i> Back End application</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class=" row">


    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="<?php echo base_url(); ?>super_admin/manage_category">
            <i class="glyphicon glyphicon-shopping-cart yellow"></i>

            <div>Manage Category</div>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="<?php echo base_url(); ?>super_admin/manage_movie">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Manage Movies</div>
        </a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="<?php echo base_url(); ?>super_admin/manage_softwer">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Manage Softwer</div>
        </a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" class="well top-block" href="<?php echo base_url(); ?>super_admin/manage_secret_softwer">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Manage secret softwer</div>
        </a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip"  class="well top-block" href="<?php echo base_url(); ?>super_admin/manage_tube_video">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Manage kachajal Tube Videos</div>
        </a>
    </div>

<?php  
                $current_user = $this->session->userdata('name');
                $main_user = 'OneNet';
                if($current_user == $main_user){
                   ?>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" class="well top-block" href="<?php echo base_url(); ?>super_admin/manage_admin">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Manage Admin</div>
        </a>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" class="well top-block" href="<?php echo base_url(); ?>super_admin/manage_user">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Manage User</div>
        </a>
    </div>
    
    <?php } ?>
    <br><br><br><br><br><br><br><br><br><br><br><br>
     
    </div>

        </div>
    </div>
    <!--/span-->
<!--  -->





    <?php  require_once 'admin_footer.php'; ?>
