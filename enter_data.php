<?php
include "admin/db.php";
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$type=2;
$sql="INSERT INTO user (name,email,password,type) VALUES ('$name','$email','$password','$type')";
$res=mysqli_query($con,$sql);
if($res){
	session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:login.php");
	}
	
?>