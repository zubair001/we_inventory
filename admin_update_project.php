<?php
$page_id="inventory";
include('db.php');
include('head.php');
include('userheader.php');


$id=$_POST['id'];
$manu_name=$_POST['manu_name'];
$person_name=$_POST['person_name'];
$mobile=$_POST['mobile'];
$date=$_POST['date'];



$sql = mysql_query("select * from project where project_id='$id'") or die(mysql_error());
 $row = mysql_fetch_array($sql);




?>

<div class="container request">
<div class="row">
                       <div class="col-md-6 col-md-offset-2">   

                         <form action="update_project.php" method="post">
                          

                         
                           
                           <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Project ID</label>
                                    <div class='form-group'>

                                        <input type='text' class="form-control" name="id" value="<?php echo $id;?>" disabled />
                                        <input type='text' class="hidden" name="id" value="<?php echo $id;?>" />
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                          
                           <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Manufacture Name</label>
                                    <div class='form-group'>

                                        <input type='text' class="form-control" name="manu_name" value="<?php echo $manu_name ;?>" disabled />
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                           
                           <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Person Name</label>
                                    <div class='form-group'>

                                        <input type='text' class="form-control" name="person_name" value="<?php echo $person_name ;?>"/>
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Mobile Number</label>
                                    <div class='form-group'>

                                        <input type='text' class="form-control" name="mobile" value="<?php echo $mobile ;?>" />
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                       
                        <div class="form-group date"> <!-- Date input -->
                            <label class="control-label" for="date">Date</label>
                            <input class="form-control"  name="date" placeholder="<?php echo $date;?>" type="date" value="<?php echo $date;?>"/>
                          </div>

                        <div class="row">
                           <div class="col-md-2">
                                <a href="admin_view_project.php" class="btn btn-danger" role="button">Cancle</a>
                            </div>
                            <div class="col-md-8">
                                <input class="btn btn-success" type="submit" value="Update">
                               
                            </div>
                        
                       
                    </div>
             </form> 
    

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
