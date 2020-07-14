<?php
include("db.php");
include('head.php');

$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];

//return print_r($_POST);


$sql =mysql_query("UPDATE manufacture SET name='$name', address='$address' WHERE id='$id'");




if ($sql == TRUE) {
header("location: admin_view_manufacture.php");
} else {
    echo "Error updating record: ";
}


?>