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
                <h2><i class="glyphicon glyphicon-edit"></i> Add Software here</h2>

                
            </div>
            <div class="box-content">
                <form role="form" action="<?php echo base_url(); ?>/super_admin/save_softwer" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Software name</label>
                        <input type="text" name="softwer_name" class="form-control" id="exampleInputEmail1" placeholder="softwers Name........." required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Software Discription</label>
                        <input type="text" name="softwer_desc" class="form-control" id="exampleInputEmail1" placeholder="Softwer Discription........." >
                    </div>
                    

                    <div class="form-group">
                        <label for="exampleInputPassword1">software Link</label>
                         <input type="text" name="softwer_link" class="form-control" id="exampleInputEmail1" placeholder="softwer link.........">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">software Size</label>
                         <input type="text" name="softwer_size" class="form-control" id="exampleInputEmail1" placeholder="softwer size.........">

                    </div>

                   
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Add software</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>










 <?php  require_once 'admin_footer.php'; ?>