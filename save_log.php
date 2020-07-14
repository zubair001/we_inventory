<?php
include("db.php");

$product_id=$_POST['product_id'];
$status=$_POST['status'];
$remarks=$_POST['remarks'];
$name=$_POST['person_name'];
$mobile=$_POST['person_no'];


$issuedate = date("Y-m-d h:i:s", strtotime($_POST['issuedate']));
$returndate = date("Y-m-d h:i:s", strtotime($_POST['returndate']));

//echo $date;
//$remarks=$_POST['remarks'];






$sql =mysql_query("UPDATE product_status SET status='$status', date='$issuedate', remarks='$remarks' WHERE product_id='$product_id'");


$row=mysql_query("INSERT INTO log (product_id, status, name, mobile, issuedate, returndate, remarks) VALUES ('$product_id', '$status','$name', '$mobile', '$issuedate', '$returndate', '$remarks')");

if ($sql && $row == TRUE) {
header("location: requisite.php");
} else {
    echo "Error updating record: ";
}


?>