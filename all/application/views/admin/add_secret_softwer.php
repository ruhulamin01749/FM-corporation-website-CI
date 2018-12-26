<?php  require_once 'admin_header.php'; ?>



  <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
   
</div>

<h4 style="color:blue">
    
    <?php 
    $msg = $this->session->userdata('message');
    if($msg){
        echo $msg;
        $this->session->unset_userdata('message');

    }

     ?>
</h4>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Add secret_software here</h2>

                
            </div>
            <div class="box-content">
                <form role="form" action="<?php echo base_url(); ?>/super_admin/save_secret_softwer" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">secret_software name</label>
                        <input type="text" name="secret_softwer_name" class="form-control" id="exampleInputEmail1" placeholder="secret_softwers Name........." required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">secret_software Discription</label>
                        <input type="text" name="secret_softwer_desc" class="form-control" id="exampleInputEmail1" placeholder="secret_softwer Discription........." >
                    </div>
                    

                    <div class="form-group">
                        <label for="exampleInputPassword1">secret_software Link</label>
                         <input type="text" name="secret_softwer_link" class="form-control" id="exampleInputEmail1" placeholder="secret_softwer link.........">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">secret_software Size</label>
                         <input type="text" name="secret_softwer_size" class="form-control" id="exampleInputEmail1" placeholder="secret_softwer size.........">

                    </div>

                   
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Add secret_software</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>










 <?php  require_once 'admin_footer.php'; ?>