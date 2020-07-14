<?php
include("db.php");
include('head.php');

$id=$_POST['id'];

$person_name=$_POST['person_name'];
$mobile=$_POST['mobile'];
$date=$_POST['date'];

//return print_r($_POST);


    
    
$sql =mysql_query("UPDATE project SET person_name='$person_name', mobile_number='$mobile', date='$date' WHERE project_id='$id'");




if ($sql == TRUE) {
header("location: admin_view_project.php");
} else {
    echo "Error updating record: ";
}


?>