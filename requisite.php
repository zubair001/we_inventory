
<?php

$page_id="change_status";
include('db.php');
include('head.php');
include('header.php');

?>






<div class="container">

	
        <div class="row show-project">
    	
        <h2 class="hidden_head">Sample Device Status</h2>
        
         <div class="col-md-4 col-md-offset-2">
               <div class="form-group ">
               <div class="blank"></div>
               
            <label for="getProducts">Please Select Project Name</label>
             <select name="getProducts" id="getProducts">
        <option value="showAll" selected="selected">Show All Projects</option>
        <?php
        
        
        $stmt = $dbcon->prepare('SELECT DISTINCT project_id FROM product');
            
        $stmt->execute();
        
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            ?>
            
            <!-- project names will be displayed here in drop down style -->
            
            <option value="<?php echo $project_id; ?>"><?php echo $project_id; ?></option>
            
                               
                                	
                                
            <?php
        }
        ?>
        </select>
         </div>  
       
             
         </div>
         
       
        
    </div>

    

    
    
    
    
    <div id="display" class="container">
        
       <!-- Records will be displayed here -->
       
    </div>
    
</div>






<!--Javascripts-->


<script type="text/javascript">
    
$(document).ready(function()
{		
	// function to get all records from table
	function getAll(){
		
		$.ajax
		({
			url: 'getproducts.php',
			data: 'action=showAll',
			cache: false,
			success: function(r)
			{
				$("#display").html(r);
			}
		});			
	}
	
	getAll();
	// function to get all records from table
	
	
	// code to get all records from table via select box
	$("#getProducts").change(function()
	{				
		var id = $(this).find(":selected").val();

		var dataString = 'action='+ id;
				
		$.ajax
		({
			url: 'getproducts.php',
			data: dataString,
			cache: false,
			success: function(r)
			{
				$("#display").html(r);
			} 
		});
	})
	// code to get all records from table via select box
});
    
</script>

<!--Footer-->
<?php 

include('footer.php'); ?>
