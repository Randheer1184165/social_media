<?php
include "admin/db.php";
session_start();

if(isset($_SESSION['id'])){
$update_id=$_REQUEST['id'];
$user_id = $_SESSION['id'];
$date = date('Y-m-d');
//$description = $_SESSION['description'];
//echo $newname;exit;

$sql1 = "SELECT * FROM `like` WHERE update_id=$update_id AND user_id=$user_id";
$res1=mysqli_query($con,$sql1);
$num1 = mysqli_num_rows($res1);
//echo $num1;exit;
if($num1==0){
	
	
		$sql="INSERT INTO `like` (update_id,date,user_id) VALUES ($update_id,'$date',$user_id)";
//echo $sql;exit;
$res=mysqli_query($con,$sql);


}else{
	
	$sql="DELETE FROM `like` WHERE update_id=$update_id AND user_id=$user_id";
//echo $sql;exit;
$res=mysqli_query($con,$sql);


		
}



	//session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:myupdate.php");
}else{
header("Location:login.php");	
}
	
?>
