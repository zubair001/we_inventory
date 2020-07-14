<?php

$page_id="change_status";
include('db.php');
include('head.php');
include('header.php');

?>

    <div class="col-md-8 col-md-offset-2">
        <form action="logbydate.php" method="post">
            <div class="col-md-4 col-md-offset-4">
                <h2 class="show-project">Please Input Date</h2> </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date">From Date</label>
                        <div class='input-group date' id='givingdate'>

                            <input type='text' class="form-control" name="fromdate" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>

                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date">To Return</label>
                        <div class='input-group date' id='returndate'>

                            <input type='text' class="form-control" name="todate" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-md-offset-8">
                    <input class="btn btn-success" type="submit" value="Send">
                </div>
            </div>
        </form>
        <div class="blank"></div>
    </div>



    <div id="print">

        <div class="col-md-4 col-md-offset-4">
            <h2 class="show-project">Inventory Details</h2> </div>

        <table class="table">


            <tr>
                <th>SL</th>
                <th>Model Name</th>
                <th>Project ID</th>
                <th>Current Status</th>
                <th>Responsable Person Name</th>
                <th>Mobiel Number</th>
                <th>Issue Date</th>
                <th>Expected Return</th>
                <th>Remarks</th>


            </tr>
            <?php
 
 if($_POST)
{  
$fromdate = date("Y-m-d h:i:s", strtotime($_POST['fromdate']));
$todate = date("Y-m-d h:i:s", strtotime($_POST['todate']));   
     
     $sql = mysql_query("select l.id,r.model_name,r.project_id,l.status,l.name, l.mobile, l.issuedate, l.returndate, l.remarks from log l, product r where r.id=l.product_id AND l.issuedate BETWEEN '" . $fromdate . "' AND  '" . $todate . "' AND l.returndate BETWEEN '" . $fromdate . "' AND  '" . $todate . "' ORDER BY product_id") or die(mysql_error());


}
     
     else
 {
 $sql = mysql_query("select l.id,r.model_name,r.project_id,l.status,l.name, l.mobile, l.issuedate, l.returndate, l.remarks from log l, product r where r.id=l.product_id ORDER BY product_id") or die(mysql_error());
 }
 $row = mysql_num_rows($sql);
$i=1;
 if($row>0){
	 while($num = mysql_fetch_array($sql))
	 {
		 
?>
                <tr>

                    <td>
                        <?php echo $i; $i++;?>
                    </td>
                    <td>
                        <?php echo $num[1];?>
                    </td>
                    <td>
                        <?php echo $num[2];?>
                    </td>
                    <td>
                        <?php echo $num[3];?>
                    </td>
                    <td>
                        <?php echo $num[4];?>
                    </td>
                    <td>
                        <?php echo $num[5];?>
                    </td>
                    <td>
                        <?php echo $num[6];?>
                    </td>
                    <td>
                        <?php echo $num[7];?>
                    </td>
                    <td>
                        <?php echo $num[8];?>
                    </td>





                </tr>
                <?php
 	
	 }
  }else{
	  $msg = "No record found";
  }
                                

 ?>
                    <tr>
                        <th colspan="15"> </th>
                    </tr>
        </table>

    </div>


    <input type="button" onclick="printDiv('print')" value="Print" />
    <div class="blank"></div>

    


    <script type="text/javascript">
        
        $(function() {
            $('#givingdate').datetimepicker({
                //                    defaultDate: 0, // add something like date('d-m-y')
                widgetPositioning: {
                    vertical: 'bottom',
                },
            });
        });

        $(function() {
            $('#returndate').datetimepicker({
                //                    defaultDate: 0, // add something like date('d-m-y')
                widgetPositioning: {
                    vertical: 'bottom',
                },
            });
        });
</script>
   <script>
    function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }

    </script>
