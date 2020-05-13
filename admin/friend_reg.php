<?php
include "db.php";
$name=$_REQUEST['name'];
$to_id=$_REQUEST['to_id'];
$from_id=$_REQUEST['from_id'];
$status=$_REQUEST['status'];
$date=$_REQUEST['date'];
$accept_date=$_REQUEST['accept_date'];
$sql="INSERT INTO friend (name,to_id,from_id,status,date,accept_date) VALUES ('$name','$to_id','$from_id','$status','$date','$accept_date')";
$res=mysqli_query($con,$sql);
if($res){
	session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:friendlist.php");
	}
	else{
		$_SESSION['msg']="Not Registered";
		header("Location:friendlist.php");
	}
?>