<?php
//Start session
session_start();
 
//Include database connection details
require_once('db.php');
 

//Sanitize the POST values
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];

 


if($status == "user") {
    //Create query
    $qry="SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result=mysql_query($qry);
    $sql=mysql_fetch_array($result);

    //Check whether the query was successful or not
    if($result) {
    if(mysql_num_rows($result) > 0) {
    //Login Successful


    $_SESSION['id'] = $sql['id'];
    $_SESSION['username'] = $sql['fullname'];
    header("location: userhome.php");
    exit();
    }}

    else 
    session_write_close();
    header("location: index.php");
    exit();
    
}

else if($status == "admin") {
    //Create query
    $qry="SELECT * FROM admin WHERE name='$username' AND pass='$password'";
    
    $result=mysql_query($qry);
    $sql=mysql_fetch_array($result);


    //Check whether the query was successful or not
    if($result) {
        if(mysql_num_rows($result) > 0) {
            //Login Successful
            $_SESSION['id'] = $sql['id'];
            $_SESSION['username'] = $sql['name'];
            header("location: inventory.php");
            exit();
        }
    }
    else {
        session_write_close();
        header("location: index.php");
        exit();
    }
}

?>