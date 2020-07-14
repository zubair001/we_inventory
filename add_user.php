<?php

$page_id="add_user";
include('db.php');
include('head.php');
include('header.php');
?>



<h2 class="show-project">Add User</h2>

<form class="form-horizontal" action="save_user.php" method="post">

<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-5">
  <input name="fullname" type="text" placeholder="Please Write Full Name" class="form-control input-md" required="True">
  <span class="help-block">Ex: Zubair Hossain Sami </span>  
  </div>
</div>


    
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address: </label>  
  <div class="col-md-5">
  <input  name="address" type="text" placeholder="Please Write Detail Address" class="form-control input-md" required="">
    
  </div>
</div>
   
   <div class="form-group">
  <label class="col-md-4 control-label" for="mobile">Mobile Number: </label>  
  <div class="col-md-5">
  <input  name="mobile" type="text" placeholder="Please Write Valid Mobile Number" class="form-control input-md" required="">
    
  </div>
</div>
   
   <div class="form-group">
  <label class="col-md-4 control-label" for="email">Email Address: </label>  
  <div class="col-md-5">
  <input  name="email" type="email" placeholder="Please Write valid Email Address" class="form-control input-md" required="">
    
  </div>
</div>
    
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Log In Id: </label>  
  <div class="col-md-5">
  <input  name="username" type="text" placeholder="Please Write Unique Name" class="form-control input-md" required="True">
   <span class="help-block">Ex: zsami123 </span>   
  </div>
</div>
    
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Password: </label>  
  <div class="col-md-5">
  <input  name="password" type="text" placeholder="Please Use Secure Password" class="form-control input-md" required="True">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button type="submit" name="singlebutton" class="btn btn-success">Save</button>
  </div>
</div>

</fieldset>
</form>



<?php

include('footer.php');
?>