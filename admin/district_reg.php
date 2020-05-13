<?php
include "db.php";
$name=$_REQUEST['name'];
$state_id=$_REQUEST['state_id'];
$sql="INSERT INTO district (name,state_id) VALUES ('$name','$state_id')";
$res=mysqli_query($con,$sql);
if($res){
	session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:districtlist.php");
	}
	else{
		$_SESSION['msg']="Not Registered";
		header("Location:districtlist.php");
	}
?>