<?php
include "admin/db.php";
session_start();
$id=$_REQUEST['id'];
$user_id = $_SESSION['id'];
//$description = $_SESSION['description'];
//echo $newname;exit;
$sql="UPDATE  `friend` SET `status`=1 WHERE id=$id";
//echo $sql;exit;
$res=mysqli_query($con,$sql);
if($res){
	//session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:friends.php");
	}
	
?>
