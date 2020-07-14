<?php
include("db.php");
include('head.php');



$id=$_POST['id'];
//return print_r($_POST);


$r=mysql_query("select COUNT(manufacture_id) from project where manufacture_id='$id'"); //count total products inder this project

$sql2=mysql_fetch_array($r); 

    


if($sql2[0]>0)
{
    include('header.php');
  echo "There are " . $sql2[0] . "  projects under this manufacture. You can't delete this. <br>";
?> <a href="admin_view_manufacture.php">Back</a>

<?php
}

elseif($sql2[0]== 0)
{
$sql=mysql_query("DELETE FROM manufacture WHERE id='$id'");
if ($sql == TRUE) {
header("location: admin_view_manufacture.php");
} else {
    echo "Error deleting record: ";
}
}

else 
echo "Error deleting record: ";
?>