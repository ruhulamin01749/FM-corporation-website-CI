<?php include "header.php"; ?>
  
      <div id="templatemo_left_column">
 		 <div class="datagrid">
     <table>
<thead>
  <tr>
    <th style="width:300px;"><center>Download</center></th>
    <th style="width:450px;" ><center>Discription</center></th>
    <th style="width:70px;"><center>Size</center></th>
    
  </tr>
</thead>
<tfoot>
  <tr>
    <td colspan="4">
  </tr>
</tfoot>
<tbody>
<?php 
    
  foreach ($show_softwer as $show_softwer) {
   
 ?>
  <tr style="border-bottom:1px solid #00557F;">
    <td style="width:300px; border-right:1px solid #00557F;" ><a href="<?php echo $show_softwer->secret_softwer_link ?>"> <?php echo $show_softwer->secret_softwer_name ?></a></td>
    <td style="width:450px; border-right:1px solid #00557F; font-weight:normal; text-align:justify; " ><?php echo $show_softwer->secret_softwer_desc ?></td>
    <td style="width:70px;" ><?php echo $show_softwer->secret_softwer_size ?></td>
  </tr>
    <?php } ?>
</tbody>
</table>
</div>
      </div>
    
    	
	<div id="templatemo_footer">
    Copyright © 2016 kachjal <a href="http://www.fs.1netbd.com" target="_parent">
    </div>
        
</div>

</html>