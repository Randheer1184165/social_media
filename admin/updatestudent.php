<?php
include "db.php";
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
$sql="UPDATE `collegge` SET `name`='$name',`address`='$address' WHERE `id` =$id ";

if ($con->query($sql) === TRUE) {
	session_start();
	$_SESSION['msg'] = "Successfully Edited";
    header('Location:studentlist.php');
} else {
	session_start();
	$_SESSION['msg'] = "Unable to Edit";
    header('Location:studentlist.php');
}
$con->close();
?>