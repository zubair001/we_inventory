<?php
include("db.php");
include('head.php');



$fullname=$_POST['fullname'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysql_query("SELECT * FROM user");
$sql=mysql_fetch_array($query);

if ($sql['mobile']==$mobile)
  {
    include('header.php');
  echo "Same Mobile Number found. <br>";
    ?> <a href="add_user.php">Back</a>

<?php
  }
elseif ($sql['email']==$email)
  {
    include('header.php');
  echo "Same Email Address found. <br>";
    ?> <a href="add_user.php">Back</a>

<?php
  }

elseif ($sql['username']==$username)
  {
    include('header.php');
  echo "Same Username found. <br>";
    ?> <a href="add_user.php">Back</a>

<?php
  }

else
  {
    $row=mysql_query("INSERT INTO user (fullname, address, mobile, email, username, password) VALUES ('$fullname', '$address','$mobile', '$email','$username', '$password')");
    
    if ($row == TRUE) {
header("location: admin_view_user.php");
} else {
    echo "Error updating record: ";
}
}



?>

