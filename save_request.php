<?php
include("db.php");
include('head.php');

$product_id=$_POST['product_id'];
$project_id=$_POST['project_id'];
$purpose=$_POST['purpose'];
$user_id= $_SESSION['id'];


$reqdate = date("Y-m-d h:i:s", strtotime($_POST['requestdate']));
$returndate = date("Y-m-d h:i:s", strtotime($_POST['returndate']));

//return print_r($_POST);


$row=mysql_query("INSERT INTO request (user_id, product_id, project_id, reqdate, returndate, purpose) VALUES ('$user_id', '$product_id', '$project_id', '$reqdate', '$returndate', '$purpose')");

if ($row == TRUE) {
header("location: userhome.php");
} else {
    echo "Error updating record: ";
}


?>