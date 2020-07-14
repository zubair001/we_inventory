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
						 <h2 class="show-project">Inventory Details</h2>        
                         <div class="show_shipping">
                            <table class="table" >
                               
                               
                                <tr>
                                  <th>SL</td>
                                  <th>Model Name</td>
                                  <th>Project ID</td>
                                  <th>Current Status</td>
                                  <th>Responsable Person Name</td>
                                  <th>Mobiel Number</td>
                                  <th>Issue Date</td>
                                  <th>Expected Return</td>
                                  <th>Remarks</td>
                                  
                                                                     
                                </tr>
<?php
 
 
 $sql = mysql_query("select l.id,r.model_name,r.project_id,l.status,l.name, l.mobile, l.issuedate, l.returndate, l.remarks from log l, product r where r.id=l.product_id ORDER BY product_id") or die(mysql_error());
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
                                  <td><?php echo $num[6];?></td>                                 
                                  <td><?php echo $num[7];?></td>   
                                  <td><?php echo $num[8];?></td>                                                               
                                   
                                  
                                
                                 
                                   
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