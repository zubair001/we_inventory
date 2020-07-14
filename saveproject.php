<?php
include("db.php");

$display=$_POST['display'];
$manufacture_id=$_POST['manufacture_id'];
$date=$_POST['date'];
$person_name=$_POST['person_name'];
$person_number=$_POST['person_number'];
$date=$_POST['date'];


if($display)
{
      
    // get last project id for respective display size
    $rowSQL = mysql_query( "SELECT MAX( project_id ) AS max FROM project WHERE project_id LIKE '".$display."%'");
    $r = mysql_fetch_array( $rowSQL );
    
    if ($r['max'] == 0) {
        $project_id = "{$display}01";
    }
    else {
        $project_id = $r['max']+1;        
    }
        
    $q = "INSERT INTO project (project_id, manufacture_id, person_name, mobile_number, date) VALUES ('{$project_id}', {$manufacture_id}, '{$person_name}', '{$person_number}', '{$date}')";
    
    $row=mysql_query($q);
    
        
    if($row)
    {
        
        header("location: admin_view_project.php");
   
    }
    else 
    {
        echo "sql query not successfull";
    }
    
}
else 
{
    echo"Wrong Display Size Inserted.";
    
}


?>