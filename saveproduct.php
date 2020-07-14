<?php
include("db.php");
$project_id=$_POST['project_id'];
$model_name=$_POST['model_name'];

$date=$_POST['date'];
$imei1=$_POST['imei1'];
$imei2=$_POST['imei2'];
$description=$_POST['description'];



mysql_query("INSERT INTO product (project_id, model_name, rcv_date, imei1, imei2, description) VALUES ('$project_id', '$model_name','$date','$imei1','$imei2','$description')");

$query=0;
$query=mysql_query("SELECT * FROM product WHERE imei1 = '$imei1' AND imei2 = '$imei2'");


if($r=mysql_fetch_array($query))
{
    $status="IN";
    $id=$r['id'];
    
    $date=$r['rcv_date'];

    $row=mysql_query("INSERT INTO product_status (product_id, status, date) VALUES ('$id', '$status', '$date')");
    $r=mysql_query("INSERT INTO log (product_id, status, date) VALUES ('$id', '$status', '$date')");
    
    header("location: inventory.php");
   
    
    
}

else
    echo("Query did not work.");


?>