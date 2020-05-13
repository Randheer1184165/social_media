<?php
include "db.php";
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$state_id=$_REQUEST['district_id'];

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo $sql="UPDATE `place` SET `name`='$name',`district_id`='$district_id' WHERE `id` ='$id' ";

if ($con->query($sql) === TRUE) {
	session_start();
	$_SESSION['msg'] = "Successfully Edited";
    header('Location:placelist.php');
} else {
	session_start();
	$_SESSION['msg'] = "Unable to Edit";
    header('Location:placelist.php');
}
$con->close();
?>