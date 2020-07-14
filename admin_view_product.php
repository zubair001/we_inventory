<?php
$page_id="inventory";
include('db.php');
include('head.php');
include('header.php');

?>
<!-- shell -->
		<div class="shell">
			<!-- main -->
			<div class="main">
				<!-- slider-holder -->
				<section class="slider-section">
					<!-- slider -->
					<div class="slider-holder">
						 <h2 class="show-project">Project Details</h2>        
                         <div class="show_shipping">
                            <table class="table" >
                               
                               
                                <tr>
                                  <th>SL</td>
                                  <th>Model Name</th>
                                  <th>Project ID</th>
                                  <th>IMEI1</th>
                                  <th>IMEI2</th>
                                  <th>Receive Date</th>
                                  <th>Current Status</th>
                                  <th>Status Date</th>
                                  <th>Remaks</th>
                                  <th>Total Unit</th>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                </tr>
<?php
 
 
 $sql = mysql_query("select p.id, p.model_name, p.project_id, p.imei1, p.imei2, p.rcv_date, s.status, s.date, s.remarks from product p, product_status s WHERE s.product_id=p.id  ORDER BY project_id") or die(mysql_error());
 $row = mysql_num_rows($sql);
                             

                          
                             
$i=1;
 if($row>0){
	 while($num = mysql_fetch_array($sql))
	 {
	$r = mysql_query("SELECT COUNT(model_name) FROM product WHERE model_name='$num[1]'") or die(mysql_error());
         
         
    $sql2=mysql_fetch_array($r); 
        
?>                               
                                <tr>
                                 
                                  
                                  <td><?php echo $i; $i++;?></td>
                                  <td><?php echo $num[1];?></td>                                 
                                  <td><?php echo $num[2];?></td>
                                  <td><?php echo $num[3];?></td>                                 
                                  <td><?php echo $num[4];?></td>
                                  <td><?php echo $num[5];?></td>
                                  <td><?php echo $num[6];?></td>                                 
                                  <td><?php echo $num[7];?></td>
                                  <td><?php echo $num[8];?></td>
                                  
                                  
                                  <td><?php echo $sql2[0];?></td> 
                                     
                                  <td>
                                  <!--Edit Request Form-->
                                  <form action="admin_update_product.php" method="post">
                                  
                                  <input type="text" name="id" value="<?php echo $num[0];?>" hidden>
                                  <input type="text" name="model_name" value="<?php echo $num[1];?>" hidden>
                                  <input type="text" name="imei1" value="<?php echo $num[3];?>" hidden>
                                  <input type="text" name="imei2" value="<?php echo $num[4];?>" hidden>
                                  
                                  <input class="btn btn-success" type="submit" value="Edit">
                                  </form>
                                    </td>
                                    
                                    <td>
                                   <!--Delete Request Form-->
                                  <form action="del_product.php" method="post">
                                  <input type="text" name="id" value="<?php echo $num[0];?>" hidden>
                                  <input class="btn btn-danger" type="submit" value="Delete">
                                  </form>
                                   
                                   
                                    </td>
                                          
                                   
                                  
                                
                                 
                                   
                                </tr>
 <?php
 	
	 }
  }else{
	  $msg = "No record found";
  }
                                

 ?>
 								<tr><th colspan="15"></th></tr>
                             </table> 
                         </div>
					</div>	
				<!-- end of slider -->               
				</section>
				<!-- slider-holder -->
			</div>
			<!-- end of main -->
		</div>
		<!-- end of shell -->
<?php 

include('footer.php');

?>