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
                                  <th>Project ID</th>
                                  <th>Manufacture Name</th>
                                  <th>Person Name</th>
                                  <th>Mobile No</th>
                                  <th>Creating Date</th>
                                  <th>Total Unit</th>
                                  <th>&nbsp;</th>
                                  <th>&nbsp;</th>
                                </tr>
<?php
 
 
 $sql = mysql_query("select p.id, p.project_id, m.name, p.person_name, p.mobile_number, p.date from project p, manufacture m WHERE p.manufacture_id=m.id  ORDER BY project_id") or die(mysql_error());
 $row = mysql_num_rows($sql);
                             

                          
                             
$i=1;
 if($row>0){
	 while($num = mysql_fetch_array($sql))
	 {
	$r = mysql_query("SELECT COUNT(project_id) FROM product WHERE project_id='$num[1]'") or die(mysql_error());
         
         
    $sql2=mysql_fetch_array($r); 
        
?>                               
                                <tr>
                                 
                                  
                                  <td><?php echo $i; $i++;?></td>
                                  <td><?php echo $num[1];?></td>                                 
                                  <td><?php echo $num[2];?></td>
                                  <td><?php echo $num[3];?></td>                                 
                                  <td><?php echo $num[4];?></td>
                                  <td><?php echo $num[5];?></td>
                                  <td><?php echo $sql2[0];?></td> 
                                     
                                  <td>
                                  <!--Edit Request Form-->
                                  <form action="admin_update_project.php" method="post">
                                  
                                  <input type="text" name="id" value="<?php echo $num[1];?>" hidden>
                                  <input type="text" name="manu_name" value="<?php echo $num[2];?>" hidden>
                                  <input type="text" name="person_name" value="<?php echo $num[3];?>" hidden>
                                  <input type="text" name="mobile" value="<?php echo $num[4];?>" hidden>
                                  <input type="text" name="date" value="<?php echo $num[5];?>" hidden>
                                  <input class="btn btn-success" type="submit" value="Edit">
                                  </form>
                                    </td>
                                    
                                    <td>
                                   <!--Delete Request Form-->
                                  <form action="del_project.php" method="post">
                                  <input type="text" name="id" value="<?php echo $num[1];?>" hidden>
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