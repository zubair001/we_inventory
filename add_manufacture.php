<?php

$page_id="add_manufacture";
include('db.php');
include('head.php');
include('header.php');
?>



<h2 class="show-project">Add Manufacture</h2>

<form class="form-horizontal" action="save_manufacture.php" method="post">

<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Manufacture Name</label>  
  <div class="col-md-5">
  <input name="manu_name" type="text" placeholder="Please WriteFull Name" class="form-control input-md" required="">
  <span class="help-block">Ex: Aamra Smart Solutions Ltd. </span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address: </label>  
  <div class="col-md-5">
  <input  name="manu_address" type="text" placeholder="Please Write Detail Address" class="form-control input-md" required="">
    
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