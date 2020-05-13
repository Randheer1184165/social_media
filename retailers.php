<?php
include "admin/db.php";
session_start();
$title=$_REQUEST['title'];
$category_id=$_REQUEST['category_id'];
$retailer_id=$_REQUEST['retailer_id'];
$user_id = $_SESSION['id'];
$uniqe =  time();// start of the image upload 
$newname='';
        $image = $_FILES['file']['name'];
		$type = $_FILES['file']['type'];
        $size = filesize($_FILES['file']['tmp_name']);
        $filecheck = basename($_FILES['file']['name']);
        $ext = substr($filecheck, strrpos($filecheck, '.') + 1);
		$image_name=$image;
		if (($ext == "jpg" || $ext == "gif" || $ext == "png") && ($_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/png") &&
                ($_FILES["file"]["size"] < 2120000)) {
            $image_name = $uniqe . '_' .  "." . $image_name;
            
			$newname = "upload/" . $image_name;
			
           $copied = move_uploaded_file($_FILES['file']['tmp_name'], $newname);
            if ($copied) {
			$newname =$newname;
              }else{
			  	$newname ='';
			  }
}
$image=$newname;
//echo $newname;exit;
$type=2;
$sql="INSERT INTO `updates` (title,category_id,retailer_id,description, image) VALUES ('$title','$category_id','$retailer_id','$description','$image')";
$res=mysqli_query($con,$sql);
if($res){
	//session_start();
	$_SESSION['msg']="succesfully registered";
	header("Location:myupdate.php");
	}
	
?>
?>
?>