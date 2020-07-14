<?php
$page_id="inventory";
include('db.php');
include('head.php');
include('header.php');


$id=$_POST['id'];

$sql = mysql_query("select * from user where id='$id'") or die(mysql_error());
 $row = mysql_fetch_array($sql);




?>

    <div class="container request">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">

                <form action="update_user.php" method="post">
                    <!-- Text input-->
                    
                    <div class="row">
                       <div class="form-group">
                        <label class="col-md-4 control-label" for="name">User Full Name</label>
                        <div class="col-md-5">
                            <input name="fullname" type="text" class="form-control input-md" required="True" value="<?php echo $row['fullname'];?>">
                            <span class="help-block">Ex: Zubair Hossain Sami </span>
                            <input type='text' class="hidden" name="id" value="<?php echo $row['id'];?>" />
                        </div>
                    </div>
                    </div>
                    
                    



                    <div class="row">
                       <div class="form-group">
                        <label class="col-md-4 control-label" for="address">Address: </label>
                        <div class="col-md-5">
                            <input name="address" type="text" class="form-control input-md" required="" value="<?php echo $row['address'];?>">

                        </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="blank"></div>
                       <div class="form-group">
                        <label class="col-md-4 control-label" for="mobile">Mobile Number: </label>
                        <div class="col-md-5">
                            <input name="mobile" type="text" class="form-control input-md" required="True" value="<?php echo $row['mobile'];?>">

                        </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="blank"></div>
                       <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email Address: </label>
                        <div class="col-md-5">
                            <input name="email" type="text" placeholder="Please Write valid Email Address" class="form-control input-md" required="True" value="<?php echo $row['email'];?>">

                        </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="blank"></div>
                       <div class="form-group">
                        <label class="col-md-4 control-label" for="address">Log In Id: </label>
                        <div class="col-md-5">
                            <input name="username" type="text" class="form-control input-md" required="True" value="<?php echo $row['username'];?>">
                            <span class="help-block">Ex: zsami123 </span>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                       <div class="form-group">
                        <label class="col-md-4 control-label" for="address">Password: </label>
                        <div class="col-md-5">
                            <input name="password" type="text" class="form-control input-md" required="True" value="<?php echo $row['password'];?>">

                        </div>
                    </div>
                    </div>
                    
                    <div class="row">
                        <div class="blank"></div>
                          
                           <div class="col-md-6">
                                <a href="admin_view_user.php" class="btn btn-danger" role="button">Cancle</a>
                            </div>
                            <div class="col-md-6">
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
