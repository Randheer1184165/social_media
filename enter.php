<?php
include "admin/db.php";
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$sql="SELECT * FROM `user` WHERE `email`='{$email}' AND `password`='{$password}'";
//echo $sql;exit;

$res=mysqli_query($con,$sql);
$num=mysqli_num_rows($res);
if($num>0){
	$data=mysqli_fetch_assoc($res);
	session_start();
	$_SESSION['id']=$data['id'];
	$_SESSION['email']=$data['email'];
	$_SESSION['password']=$data['password'];
	$_SESSION['type']=$data['type'];
	header("Location:index.php");
	}
	else{
		
		session_start();
		$_SESSION['msg']="invalid email and password";
		header("Location:login.php");
	}
	
	
	
?>

