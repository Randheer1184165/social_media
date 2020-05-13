<?php
include "db.php";
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$address=$_REQUEST['address'];
$contact_no=$_REQUEST['contact_no'];
$state_id=$_REQUEST['state_id'];
$date=$_REQUEST['date'];
$sql="INSERT INTO user (name,email,password,address,contact_no,state_id,date) VALUES ('$name','$email','$password','$address','$contact_no','$state_id','$date')";
$res=mysqli_query($con,$sql);
if($res){
	session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:userlist.php");
	}
	else{
		$_SESSION['msg']="Not Registered";
		header("Location:userlist.php");
	}
?>