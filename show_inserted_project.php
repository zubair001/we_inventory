<?php
include('db.php');
include('head.php');
include('header.php');

$sql=mysql_query("SELECT * FROM project WHERE project_id ='{$_SESSION['project_id']}'");

$num = (mysql_fetch_array($sql));


		 $project_id = $num['project_id'];
		 
		 $person_name = $num['person_name'];
		 $person_number = $num['mobile_number'];	
		 $date = $num['date'];
		 
         
         ?>

                               
                               
<table class="table" >
    <tr>
        <th><h2>New Project Info</h2>
        </th>
    </tr>
    <tr>
        <td >Project Id</td>
        <td>
            <?php echo $project_id; ?>
        </td>
    </tr>
     <tr>
        <td >Contact Person Name</td>
        <td>
            <?php echo $person_name; ?>
        </td>
    </tr>
    </table>
    
    
    
    
<?php
     
include('footer.php');
?>