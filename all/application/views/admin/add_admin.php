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
                <h2><i class="glyphicon glyphicon-edit"></i> Add User admin here</h2>

                
            </div>
            <div class="box-content">
                <form role="form" action="<?php echo base_url(); ?>/super_admin/save_admin" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admin name</label>
                        <input type="text" name="admin_name" class="form-control" id="exampleInputEmail1" placeholder="Name........." required>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admin name or email</label>
                        <input type="text" name="admin_email" class="form-control" id="exampleInputEmail1" placeholder="Email........." required>
                    </div>
                    
                   

                    <input type="password" name="admin_password" class="form-control" id="exampleInputEmail1" placeholder="Password........." required>

                    <div class="control-group">
                    <label class="control-label" for="selectError">Publication status</label>

                    <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="publication_status" required>
                            <option>Select publication status</option>
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                            
                        </select>
                    </div>
                </div>
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Add Admin</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>










 <?php  require_once 'admin_footer.php'; ?>