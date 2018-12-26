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
                <h2><i class="glyphicon glyphicon-plus"></i> Upload slider image here</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-bordered table-striped responsive">
                    <tbody>
                    <tr>
                        <td>
                        <h3>Upload slider image</h3>
                        <p>[(1170*410)px]</p>
                        </td>
                        <td>
                           <form action="<?php echo base_url(); ?>/super_admin/save_slider" method="post" enctype="multipart/form-data">
                           <label for="exampleInputEmail1">Slogan</label>
                        <input type="text" name="slogan" class="form-control" id="exampleInputEmail1" placeholder="write slogan">
                            <input data-no-uniform="true" type="file" name="slider" id="file_upload"><br>
                           
                             <div class="controls">
                        <select style="width:200px;" id="selectError" data-rel="chosen" name="publication_status">
                            <option>Select</option>
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                            
                        </select>
                    </div>
                     <input class="btn btn-default" type="submit" name="submit" value="Upload">
                        </form>
                        </td>
                        <td></td>
                    </tr>

 
                   
                    </tbody>
                </table>
            </div>
             <div class="box-content">
    <div class="alert alert-info"> Manage your slider here</div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
    <th>Slider Id</th>
        <th>Slider image</th>
        <th>Publication status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    
<?php  
    foreach ($slider_info as $view_slider) 
    {
    ?>
    <tr>
        <td class="center"><?php echo $view_slider->slider_id;?></td>
        <td><img style="height:30px; width:250px;" src="<?php echo base_url(); ?><?php echo $view_slider->image_name;?>"</td>
        
       
        <td class="center">
            <span class="label-warning label label-default"><?php 

             $slider_status = $view_slider->publication_status;
             if($slider_status==0){

                echo "Unpublished";

             }
             elseif ($slider_status==1) {
                echo "Published";
             }


             ?>



             </span>
        </td>
        <td class="center">
        <?php 
        if($view_slider->publication_status==1){

         ?>
            <a class="btn btn-danger" href="<?php echo base_url();?>/super_admin/unpublished_slider/<?php echo $view_slider->slider_id;?>">
                <i class="glyphicon glyphicon-arrow-down icon-white"></i>
        <?php
        }
        else{

        ?>
         <a class="btn btn-success" href="<?php echo base_url();?>/super_admin/published_slider/<?php echo $view_slider->slider_id;?>">
                <i class="glyphicon glyphicon-arrow-up icon-white"></i>
                <?php  

                    }
                ?>
                
            </a>
            
            <a class="btn btn-danger" href="<?php echo base_url();?>/super_admin/delete_slider/<?php echo $view_slider->slider_id;?>" title="Delete">
                <i class="glyphicon glyphicon-trash icon-white"></i>
                
            </a>
        </td>
        
    </tr>
    <?php 

    }
        ?>
    </tbody>
    </table>
    </div>
        </div>
    </div>
    <!--/span-->
<!--  -->




    <?php  require_once 'admin_footer.php'; ?>
