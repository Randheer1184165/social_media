<?php
include "db.php";
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$address=$_REQUEST['address'];
$contact_no=$_REQUEST['contact_no'];
$state_id=$_REQUEST['state_id'];
$date=$_REQUEST['date'];



if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo $sql="UPDATE `user` SET `name`='$name',`email`='$email',`password`='$password',`address`='$address',`contact_no`='$contact_no',`state_id`='$state_id',`date`='$date' WHERE `id` ='$id' ";



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