<?php
$page_id="inventory";
include('db.php');
include('head.php');
include('header.php');

?>
<div id="print-project">
						 <h2 class="show-project">Project Details</h2>        
                         
                            <table class="table" >
                               
                               
                                <tr>
                                  <th>SL</th>
                                  <th>Project ID</th>
                                  <th>Manufacture Name</th>
                                  <th>Person Name</th>
                                  <th>Mobile No</th>
                                  <th>Creating Date</th>
                                  <th>Total Unit</th>
                                  
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
                             
    <input type="button" onclick="printDiv('print-project')" value="Print" />
    <div class="blank"></div>
                        
<?php 

include('footer.php');

?>



<script>
    function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

    </script>