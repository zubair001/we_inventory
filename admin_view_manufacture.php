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
						 <h2 class="show-project">Manufacture Details</h2>        
                         <div class="show_shipping">
                            <table class="table" >
                               
                               
                                <tr>
                                  <th>SL</td>
                                  <th>Manufacture Name</th>
                                  <th>Address</th>
                                  <th>Total Project Number</th>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                </tr>
<?php
 
 
 $sql = mysql_query("select * from manufacture ORDER BY id") or die(mysql_error());
 $row = mysql_num_rows($sql);
$i=1;
 if($row>0){
	 while($num = mysql_fetch_array($sql))
	 {
	$r = mysql_query("select COUNT(manufacture_id) from project where manufacture_id='$num[0]'") or die(mysql_error());
         
         
    $sql2=mysql_fetch_array($r); 
        
?>                                         
                                <tr>
                                 
                                  
                                  <td><?php echo $i; $i++;?></td>
                                  <td><?php echo $num[1];?></td>                                 
                                  <td><?php echo $num[2];?></td> 
                                  <td><?php echo $sql2[0];?></td>   
                                  <td>
                                  
                                  <!--Edit Request Form-->
                                  <form action="admin_update_manufacture.php" method="post">
                                  
                                  <input type="text" name="id" value="<?php echo $num[0];?>" hidden>
                                  
                                  <input class="btn btn-success" type="submit" value="Edit">
                                  </form>
                                    </td>
                                    <td>
                                   
                                    <!--Delete Request Form-->
                                  <form action="del_manufacture.php" method="post">
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