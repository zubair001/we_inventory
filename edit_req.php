<?php
$page_id="inventory";
include('db.php');
include('head.php');
include('userheader.php');


$req_id=$_POST['req_id'];

$sql = mysql_query("select r.id, r.product_id, r.project_id, p.model_name, r.reqdate, r.returndate, r.purpose from request r, product p where p.id=r.product_id AND r.id='$req_id'") or die(mysql_error());
 $row = mysql_fetch_array($sql);




?>

<div class="container request">
<div class="row">
                       <div class="col-md-6 col-md-offset-2">   

                         <form action="update_request.php" method="post">
                          

                         <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Request Id</label>
                                    <div class='form-group'>

                                        <input type='text' class="form-control" name="req_id" value="<?php echo $req_id;?>" disabled="disabled" />
                                        
                                        <input type='text' class="hidden" name="req_id" value="<?php echo $req_id;?>" />
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                           
                           
                           <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Model Name</label>
                                    <div class='form-group'>

                                        <input type='text' class="form-control" name="product_name" value="<?php echo $row['model_name'];?>" disabled="disabled" />
                                        <input type='text' class="hidden" name="product_id" value="<?php echo $id;?>" />
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                           
                           <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Project Name</label>
                                    <div class='form-group'>

                                    <input type='text' class="form-control" name="project_name" value="<?php echo $row['project_id'];?>" disabled="disabled"  />
                                    <input type='text' class="hidden" name="project_id" value="<?php echo $project_id;?>"/>
                                    </div>
                                </div>
                            </div>
                        </div> 
                       
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Requisition Date</label>
                                    <div class='input-group date' id='givingdate'>

                                        <input type='text' class="form-control" name="requestdate" />
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
                                    <label for="comment">Purpose:</label>
                                    <textarea class="form-control" rows="5" id="status-remarks" name="purpose"> <?php echo $row['purpose'];?></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                           <div class="col-md-2">
                                <a href="userhome.php" class="btn btn-danger" role="button">Cancle</a>
                            </div>
                            <div class="col-md-8">
                                <input class="btn btn-success" type="submit" value="Update">
                            </div>
                        </div>
                        </form>
                    </div>

    

   </div>   
</div>







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
