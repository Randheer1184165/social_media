<?php
include "db.php";
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$sql="INSERT INTO collegge (name,address) VALUES ('$name','$address')";
$res=mysqli_query($con,$sql);
if($res){
	session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:studentlist.php");
	}
	else{
		$_SESSION['msg']="Not Registered";
		header("Location:studentlist.php");
	}
?>