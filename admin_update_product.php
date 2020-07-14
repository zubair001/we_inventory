<?php
$page_id="inventory";
include('db.php');
include('head.php');
include('userheader.php');


$id=$_POST['id'];
$model_name=$_POST['model_name'];
$imei1=$_POST['imei1'];
$imei2=$_POST['imei2'];




$sql = mysql_query("select * from product where id='$id'") or die(mysql_error());
 $row = mysql_fetch_array($sql);




?>

<div class="container request">
<div class="row">
                       <div class="col-md-6 col-md-offset-2">   

                         <form action="update_product.php" method="post">
                          

                         
                           
                           <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">Model Name</label>
                                    <div class='form-group'>

                                        <input type='text' class="form-control" name="model_name" value="<?php echo $model_name;?>"/>
                                        <input type='text' class="hidden" name="id" value="<?php echo $id;?>" />
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                          
                           <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">IMEI1</label>
                                    <div class='form-group'>

                                        <input type='text' class="form-control" name="imei1" value="<?php echo $imei1 ;?>"/>
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                          
                          <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="date">IMEI2</label>
                                    <div class='form-group'>

                                        <input type='text' class="form-control" name="imei2" value="<?php echo $imei2 ;?>"/>
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                           
                       
                        

                        <div class="row">
                           <div class="col-md-2">
                                <a href="admin_view_product.php" class="btn btn-danger" role="button">Cancle</a>
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
