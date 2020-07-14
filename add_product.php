
<?php

$page_id="add_product";
include('db.php');
include('head.php');
include('header.php');

$query=mysql_query("SELECT * FROM project");

$options="";
while($r=mysql_fetch_array($query))
{
    $options= $options."<option value='{$r['project_id']}'>".$r['project_id']."</option>";
   
}


?>








<!------------------add product section----------------------------->

<h2 class="show-project">Add Product</h2>
<form action="saveproduct.php" method="post">
   
<div class="row">
  <div class="col-md-4">
 <div class="form-group">
  <label for="usr">Project Name</label>
  
    <select name="project_id" class="form-control">
    
    <?php echo $options; ?>
     
    </select>
  </div>
   </div></div>

   
   <div class="form-group">
    <label for="usr">Model Name:</label>
    <input type="text" class="form-control" id="model_name" name="model_name" >
  </div>
  
  <div class="row">
  <div class="col-md-4">
  <div class="form-group date"> <!-- Date input -->
    <label class="control-label" for="date">Date</label>
    <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" type="date"/>
  </div>
    </div></div>
     
    <div class="form-group">
    <label for="usr">IMEI 1:</label>
    <input type="text" class="form-control" id="imei1" name="imei1" >
  </div>
  <div class="form-group">
    <label for="usr">IMEI 2:</label>
    <input type="text" class="form-control" id="imei2" name="imei2" >
  </div>
  <div class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="5" id="description" name="description"></textarea>
</div>
  
  <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
        Are you sure to submit?
      </label>
      <div class="help-block with-errors"></div>
    </div>
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>



<?php

include('footer.php');
?>




