<?php
include "admin/db.php";
session_start();
$comment=$_REQUEST['comment'];
$update_id=$_REQUEST['update_id'];
$user_id = $_SESSION['id'];
$date = date('Y-m-d');
//$description = $_SESSION['description'];
//echo $newname;exit;
$sql="INSERT INTO `comment` (comment,update_id,date,user_id) VALUES ('$comment',$update_id,'$date',$user_id)";
//echo $sql;exit;
$res=mysqli_query($con,$sql);
if($res){
	//session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:comment.php?id=".$update_id);
	}
	
?>
