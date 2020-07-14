<?php
include("db.php");
include('head.php');

$product_id=$_POST['product_id'];
$project_id=$_POST['project_id'];
$purpose=$_POST['purpose'];
$req_id=$_POST['req_id'];

$user_id= $_SESSION['id'];



$reqdate = date("Y-m-d h:i:s", strtotime($_POST['requestdate']));
$returndate = date("Y-m-d h:i:s", strtotime($_POST['returndate']));

//return print_r($_POST);


$sql =mysql_query("UPDATE request SET reqdate='$reqdate', returndate='$returndate', purpose='$purpose' WHERE id='$req_id'");




if ($sql == TRUE) {
header("location: req-list.php");
} else {
    echo "Error updating record: ";
}


?>