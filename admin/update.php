<?php
include "db.php";
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$contact_no=$_REQUEST['contact_no'];
$address=$_REQUEST['address'];

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
$sql="UPDATE `user` SET `name`='$name',`email`='$email',`contact_no`='$contact_no',`address`='$address' WHERE `id` =$id ";
if ($con->query($sql) === TRUE) {
	session_start();
	$_SESSION['msg'] = "Successfully Edited";
    header('Location:userlist.php');
} else {
	session_start();
	$_SESSION['msg'] = "Unable to Edit";
    header('Location:userlist.php');
}
$con->close();
?>