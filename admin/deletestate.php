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
$sql = "DELETE FROM state WHERE id=$id";

if ($con->query($sql) === TRUE) {
	//echo "successfully login";
	
	session_start();
	$_SESSION['msg'] = "Successfully Deleted";
    header('Location:statelist.php');
	
	//echo"successfully Deleted";
} else {
	
		session_start();
	$_SESSION['msg'] = "Unable to  Delete";
	
  header('Location:statelist.php');

}

$con->close();
?>