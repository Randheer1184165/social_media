<?php
include "admin/db.php";
session_start();
$new_description=$_REQUEST['new_description'];
$update_id=$_REQUEST['update_id'];
$user_id = $_SESSION['id'];
$date = date('Y-m-d');
//$description = $_SESSION['description'];
//echo $newname;exit;

$sql1 = "SELECT * FROM `share` WHERE update_id=$update_id";
$res1=mysqli_query($con,$sql1);
$num1 = mysqli_num_rows($res1);
//echo $num1;exit;
if($num1==0){
	
	
		$sql="INSERT INTO `share` (new_description,update_id,date,user_id) VALUES ('$new_description',$update_id,'$date',$user_id)";
//echo $sql;exit;
$res=mysqli_query($con,$sql);

$dt = date('Y-m-d');

$sql112="INSERT INTO `reward` (user_id,reward,date) VALUES ($user_id,10,'$dt')";

$res1112=mysqli_query($con,$sql112);
	//echo $sql112;exit;
	//echo $num1;exit;

}else{
	
	$sql="INSERT INTO `share` (new_description,update_id,date,user_id) VALUES ('$new_description',$update_id,'$date',$user_id)";
//echo $sql;exit;
$res=mysqli_query($con,$sql);
echo $num1;exit;

		
}



	//session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:myshare.php");

	
?>
