<?php
include "db.php";
$name=$_REQUEST['name'];
$sql="INSERT INTO state (name) VALUES ('$name')";
$res=mysqli_query($con,$sql);
if($res){
	session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:statelist.php");
	}
	else{
		$_SESSION['msg']="Not Registered";
		header("Location:statelist.php");
	}
?>