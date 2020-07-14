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
						 <h2 class="show-project">Inventory Information</h2>        
                         <div class="show_shipping">
                            <table class="table" >
                               
                               
                                <tr>
                                  <th>SL</td>
                                  <th>Model Name</td>
                                  <th>Project ID</td>
                                  <th>Current Status</td>
                                  <th>Issue Date</td>
                                  <th>Remarks</td>
                                  
                                                                     
                                </tr>
<?php
 
 
 $sql = mysql_query("select l.id,r.model_name,r.project_id,l.status,l.date, l.remarks from product_status l, product r where r.id=l.product_id AND status!='IN' ORDER BY product_id") or die(mysql_error());
 $row = mysql_num_rows($sql);
$i=1;
 if($row>0){
	 while($num = mysql_fetch_array($sql))
	 {
		 
?>                               
                                <tr>
                                 
                                  <td><?php echo $i; $i++;?></td>
                                  <td><?php echo $num[1];?></td>
                                  <td><?php echo $num[2];?></td>                                 
                                  <td><?php echo $num[3];?></td>   
                                  <td><?php echo $num[4];?></td> 
                                  <td><?php echo $num[5];?></td>
                                          
                                   
                                  
                                
                                 
                                   
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