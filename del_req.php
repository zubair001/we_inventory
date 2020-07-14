<?php
include("db.php");
include('head.php');

$req_id=$_POST['req_id'];

$user_id= $_SESSION['id'];



//return print_r($_POST);



$sql=mysql_query("DELETE FROM request WHERE id='$req_id'");



if ($sql == TRUE) {
header("location: req-list.php");
} else {
    echo "Error deleting record: ";
}


?>