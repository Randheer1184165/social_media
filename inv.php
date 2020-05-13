<?php
include "admin/db.php";
session_start();
$to_id=$_REQUEST['id'];
$from_id = $_SESSION['id'];
$date = date('Y-m-d');
//$description = $_SESSION['description'];
//echo $newname;exit;
$sql="INSERT INTO `friend` (to_id,from_id,date) VALUES ('$to_id',$from_id,'$date')";
//echo $sql;exit;
$res=mysqli_query($con,$sql);
if($res){
	//session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:invite.php");
	}
	
?>
