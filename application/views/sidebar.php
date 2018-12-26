<div class="span4 sidebar">

                    <div class="sidebox">
                    <?php
                        if($services){

                    ?>

                          
                        <h4 class="sidebox-title">Our services</h4>
                          <ul class="sidebar_menu">
                             <?php  
                          foreach ($view_services as $v_services) {
                             


                          ?>
                            <li style="list-style:none;margin-bottom:8px;line-height:25px;"><i style="color:#8282FF;" class="icon-arrow-right"></i>
<a href="<?php echo base_url();?>welcome/service_detail/<?php echo $v_services->service_id; ?>"><?php echo $v_services->service_name; ?></a></li>
                            
                            <?php } ?>
                          </ul> 
                           
                           <?php
                       }
                        if($project){

                    ?> 

                           <h4 class="sidebox-title">Our project</h4>
                          <ul class="sidebar_menu">
                          <?php  
                          foreach ($view_project as $v_project) {

                          ?>
                             <li style="list-style:none;margin-bottom:8px;line-height:25px;"><i style="color:#8282FF;" class="icon-arrow-right"></i><a href="<?php echo base_url(); ?>welcome/project_detail/<?php  echo $v_project->project_id; ?>"><?php  echo $v_project->project_name; ?></a></li>
                            <?php } ?>
                          </ul>   

                           <?php
                       }
                        if($client){

                    ?>

                           <h4 class="sidebox-title">Our Clients</h4>
                          <ul class="sidebar_menu">
                            <?php  
                          foreach ($view_client as $v_client) {
                             


                          ?>
                             <li style="list-style:none;margin-bottom:8px;line-height:25px;"><i style="color:#8282FF;" class="icon-arrow-right"></i><a href="<?php echo base_url(); ?>welcome/client"><?php echo $v_client->client_name; ?></a></li>
                            
                            <?php } ?>
                          </ul> 
                           <?php
                                }
                            ?>               

                   
                           
                        
                            
                    </div>
                    
                </div>