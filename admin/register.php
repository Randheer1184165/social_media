<?php
include "db.php";

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$contact_no=$_REQUEST['contact_no'];
$address=$_REQUEST['address'];

$sql="INSERT INTO user (name,email,password,contact_no,address,type) VALUES ('$name','$email','$password','$contact_no','$address',2)";
//echo $sql;exit;
$res=mysqli_query($con,$sql);
if($res){
session_start();
   $_SESSION['msg']="succesfully registered";
   header("location:userlist.php");
}
else
{
	$_SESSION['msg']= "not registered";
	header("location:userlist.php");
}
?>