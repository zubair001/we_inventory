<?php
$page_id="inventory";
include('db.php');
include('head.php');
include('header.php');

?>
<!-- shell -->
		<div id="print">
						 <h2 class="show-project">Manufacture Details</h2>        
                         
                            <table class="table" >
                               
                               
                                <tr>
                                  <th>SL</th>
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

 <input type="button" onclick="printDiv('print')" value="Print" />
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