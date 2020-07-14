<?php
$page_id="inventory";
include('db.php');
include('head.php');
include('userheader.php');


$id=$_POST['id'];

$sql = mysql_query("select * from manufacture where id='$id'") or die(mysql_error());
 $row = mysql_fetch_array($sql);




?>

<div class="container request">
<div class="row">
                       <div class="col-md-6 col-md-offset-2">   

                         <form action="update_manufacture.php" method="post">
                          

                         
                           
                           
                           <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Manufacture Name</label>
                                    <div class='form-group'>

                                        <input type='text' class="form-control" name="name" value="<?php echo $row['name'];?>" />
                                        
                                        <input type='text' class="hidden" name="id" value="<?php echo $row['id'];?>" />
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                           
                           <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Address</label>
                                    <div class='form-group'>

                                        <input type='text' class="form-control" name="address" value="<?php echo $row['address'];?>" />
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                       
                        

                        <div class="row">
                           <div class="col-md-2">
                                <a href="admin_view_manufacture.php" class="btn btn-danger" role="button">Cancle</a>
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
