<?php
$servername = "localhost";
$username = "username";
$password = "password";
$id=$_REQUEST['id'];
// Create connection
$con=mysqli_connect("localhost","root","","social");
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM place WHERE id=$id";

if ($con->query($sql) === TRUE) {
	//echo "successfully login";
	
	session_start();
	$_SESSION['msg'] = "Successfully Deleted";
    header('Location:placelist.php');
	
	//echo"successfully Deleted";
} else {
	
		session_start();
	$_SESSION['msg'] = "Unable to  Delete";
	
  header('Location:placelist.php');

}

$con->close();
?>