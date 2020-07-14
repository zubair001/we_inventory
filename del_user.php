<?php
include("db.php");
include('head.php');



$id=$_POST['id'];
$request=$_POST['request'];
//return print_r($_POST);




if($request>0)
{
    include('header.php');
  echo "There are " . $request . "  requests of this user. You can't delete this. <br>";
?> <a href="admin_view_user.php">Back</a>

<?php
}

elseif($request == 0)
{
$sql=mysql_query("DELETE FROM user WHERE id='$id'");
if ($sql == TRUE) {
header("location: admin_view_user.php");
} else {
    echo "Error deleting record: ";
}
}

else 
echo "Error deleting record: ";
?>