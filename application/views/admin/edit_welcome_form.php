
<?php  require_once 'admin_header.php'; ?>



 <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->   
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit front page welcome meassage here</h2>

                
            </div>
            <div class="box-content">
                <form name="edit_blog_form" role="form" action="<?php echo base_url(); ?>/super_admin/update_welcome" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Welcome Title</label>
                        <input type="text" name="welcome_title" class="form-control" id="exampleInputEmail1" placeholder="Blog tille........." value="<?php echo $welcome_info->welcome_title;?>">
                        <input type="hidden" name="welcome_id" value="<?php echo $welcome_info->welcome_id;?>">
                    </div>
    

                    <div class="form-group">
                        <label for="exampleInputPassword1">Welcome Discription</label>
                        <textarea class="form-control" id="exampleInputPassword1" name="welcome_desc"><?php echo $welcome_info->welcome_desc;?></textarea>
                    </div>

                    
                <br>
                    <button type="submit" class="btn btn-default" name="submit">Update welcome message</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>

<script type="text/javascript">
    document.forms['edit_blog_form'].elements['publication_status'].value='<?php echo $blog_info->publication_status;?>';
    document.forms['edit_blog_form'].elements['blog_category'].value='<?php echo $blog_info->category_id; ?>';
</script>









 <?php  require_once 'admin_footer.php'; ?>