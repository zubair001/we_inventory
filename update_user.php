<?php
include("db.php");
include('head.php');


$id=$_POST['id'];
$fullname=$_POST['fullname'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

//return print_r($_POST);

$query=mysql_query("SELECT * FROM user");
$sql=mysql_fetch_array($query);

if ($sql['mobile']==$mobile)
  {
    include('header.php');
  echo "Same Mobile Number found. <br>";
    ?> <a href="admin_update_user.php">Back</a>

<?php
  }
elseif ($sql['email']==$email)
  {
    include('header.php');
  echo "Same Email Address found. <br>";
    ?> <a href="admin_update_user.php">Back</a>

<?php
  }

elseif ($sql['username']==$username)
  {
    include('header.php');
  echo "Same Username found. <br>";
    ?> <a href="admin_update_user.php">Back</a>

<?php
  }

else
{
        
    $row=mysql_query("UPDATE user SET fullname='$fullname', address='$address', mobile='$mobile', email='$email', username='$username', password='$password' WHERE id='$id'");
    
    
    
    if ($row == TRUE) {
        header("location: admin_view_user.php");
}
    else {
    echo "Error updating record: ";
}
}


?>




