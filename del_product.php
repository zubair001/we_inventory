<?php
include("db.php");
include('head.php');



$id=$_POST['id'];
//return print_r($_POST);


$r=mysql_query("select * from product_status where product_id='$id'"); 

$sql2=mysql_fetch_array($r); 

    


if($sql2['status']!='IN')
{
    include('header.php');
  echo "Product Status is " . $sql2['status'] . " . You can't delete this untill it's in hand. <br>";
?> <a href="admin_view_product.php">Back</a>

<?php
}

elseif($sql2['status']== 'IN')
{
$sql=mysql_query("DELETE FROM product WHERE id='$id'");
if ($sql == TRUE) {
header("location: admin_view_product.php");
} else {
    echo "Error deleting record: ";
}
}

else 
echo "Error deleting record: ";
?>