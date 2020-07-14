<?php
include("db.php");
include('head.php');

$id=$_POST['id'];
$model_name=$_POST['model_name'];
$imei1=$_POST['imei1'];
$imei2=$_POST['imei2'];

//return print_r($_POST);


    
    
$sql =mysql_query("UPDATE product SET model_name='$model_name', imei1='$imei1', imei2='$imei2' WHERE id='$id'");




if ($sql == TRUE) {
header("location: admin_view_product.php");
} else {
    echo "Error updating record: ";
}


?>