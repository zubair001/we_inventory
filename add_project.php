
<?php

$page_id="add_project";

include('db.php');
include('head.php');
include('header.php');

$query=mysql_query("SELECT * FROM manufacture");

$options="";
while($r=mysql_fetch_array($query))
{
    $options= $options."<option value='{$r[0]}'>".$r[1]."</option>";
}


?>





<!------------------add product section----------------------------->
<h2 class="show-project">Add Project</h2>

<form action="saveproject.php" method="post">
   
  <div class="form-group">
    <label for="usr">Display Size:</label>
    <input type="text" class="form-control" name="display" >
  </div>
  
  <div class="form-group">
  <label for="usr">Manufacture Name</label>
  
    <select name="manufacture_id" class="form-control">
     <?php  echo $options;  ?>
      
    </select>
  </div>

  
  <div class="form-group">
    <label for="usr">Conatct Person Name:</label>
    <input type="text" class="form-control" name="person_name">
  </div>
  
  <div class="form-group">
    <label for="usr">Conatct Person Number:</label>
    <input type="text" class="form-control" name="person_number">
  </div>
  
  <div class="form-group date"> <!-- Date input -->
    <label class="control-label" for="date">Date</label>
    <input class="form-control"  name="date" placeholder="DD/MM/YYYY" type="date"/>
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




