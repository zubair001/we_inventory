

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php

	include('db.php');

	$action = $_REQUEST['action'];
	
	if($action=="showAll"){
		
		$stmt=$dbcon->prepare('SELECT pro.id, pro.model_name, status.status, status.product_id FROM product pro,product_status status WHERE pro.id=status.product_id ORDER BY model_name');
		$stmt->execute();
		
	}else{
		
		$stmt=$dbcon->prepare('SELECT pro.id, pro.model_name, status.status, status.product_id FROM product pro,product_status status WHERE pro.id=status.product_id AND pro.project_id=:project_id ORDER BY model_name');
        
		$stmt->execute(array(':project_id'=>$action));
        
	}
	
	?>
<form action="save_log.php" method="post">
<div class="col-md-4 col-md-offset-1" >
<div class="row">
<table class="table table-striped">
                        <thead class="thead-inverse">
                            <tr>
                               <th>Model Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

   <?php
if($stmt->rowCount() > 0)
{
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
        extract($row);
        ?>
                    <tr>
                    <th scope="row">
                    <div class="radio">

                    <label>
                        <input type="radio" name="product_id" value="<?php echo $product_id; ?>">
                        <?php echo $model_name; ?>
                        </label>
                    </div>
                    </th>

                    <td>
                    <?php echo $status ?>
                    </td>    
                    </tr>

                 <?php
}  ?>

                        </tbody>
                    </table>
    </div>
    </div>
                    
                    <div class="col-md-6">

                        <div class="row">

                            <h2 class="hidden_head"> Requisition</h2>


                            <div class="col-md-8">
                                <label for="status">New Status</label>
                                <select name="status" required>
                                    <option value="" disabled selected>Select Status</option>
                                    <option value="IN">In Hand</option>
                                    <option value="SNP">Not Purchsed</option>
                                    <option value="SNR">Not Returnable</option>
                                    <option value="SR">Returnable</option>
                                    <option value="SOT">On Test</option>

                                </select>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="comment">Person Name</label>
                                    <input name="person_name" type="text" placeholder="Please Write Name" class="form-control input-md" required="">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="comment">Mobile Number</label>
                                    <input name="person_no" type="text" placeholder="Please Write Mobile Number" class="form-control input-md">
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Issue Date</label>
                                    <div class='input-group date' id='givingdate'>

                                        <input type='text' class="form-control" name="issuedate" />
                                        <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Expected Return</label>
                                    <div class='input-group date' id='returndate'>

                                        <input type='text' class="form-control" name="returndate" />
                                        <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                                        </span>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="comment">Remarks:</label>
                                    <textarea class="form-control" rows="5" id="status-remarks" name="remarks"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-8">
                                <input class="btn btn-success" type="submit" value="Update">
                            </div>
                        </div>
                    </div>
 </form>

        </div>
        

    </div>




   

    <!-- Closing if statement -->
    <?php   } ?>








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
