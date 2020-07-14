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
						 <h2 class="show-project">Requisition Request List</h2>        
                         <div class="show_shipping">
                            <table class="table" >
                               
                               
                                <tr>
                                  <th>SL</th>
                                  <th>User Name</th>
                                  <th>Product Name</th>
                                  <th>Project ID</th>
                                  <th>Request Date</th>
                                  <th>Return Date</th>
                                  <th>Purpose</th>
                                  
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                  
                                  
                                                                     
                                </tr>
<?php
 
 
 $sql = mysql_query("select r.id, r.product_id, r.project_id, p.model_name, r.reqdate, r.returndate, r.purpose,r.user_id from request r, product p where p.id=r.product_id ORDER BY product_id") or die(mysql_error());
 $row = mysql_num_rows($sql);
$i=1;
 if($row>0){
	 while($num = mysql_fetch_array($sql))
	 {
         $u=mysql_query("select fullname from user WHERE id='$num[7]'");
         
         
        $username=mysql_fetch_array($u);
		 
?>                               
                                <tr>
                                 
                                  <td><?php echo $i; $i++;?></td>
                                  <td><?php echo $username[0];?></td>
                                  <td><?php echo $num[3];?></td>
                                  <td><?php echo $num[2];?></td>
                                  <td><?php echo $num[4];?></td>
                                  <td><?php echo $num[5];?></td>
                                  <td><?php echo $num[6];?></td>
                                                                 
                                    
                                  <td>
                                  
                                  <!--Edit Request Form-->
                                  <form action="requisite.php" method="post">
                                  
                                  <input type="text" name="req_id" value="<?php echo $num[0];?>" hidden>
                                  
                                  <input class="btn btn-success" type="submit" value="Accept">
                                  </form>
                                    </td>
                                    
                                    <td>
                                   <!--Delete Request Form-->
                                  <form action="del_req.php" method="post">
                                  <input type="text" name="req_id" value="<?php echo $num[0];?>" hidden>
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