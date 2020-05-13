<?php
include "admin/db.php";
session_start();
$address=$_REQUEST['address'];
$user_id = $_SESSION['id'];
//$description = $_SESSION['description'];
//echo $newname;exit;
$sql="UPDATE  `user` SET `address`='$address' WHERE id=$user_id";
//echo $sql;exit;
$res=mysqli_query($con,$sql);
if($res){
	//session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:myprofile.php");
	}
	
?>
