<?php
include "header.php";
include "admin/db.php";
if(isset($_SESSION['id'])){
$user_id = $_SESSION['id'];



$sql =  "SELECT * FROM `user` WHERE id=$user_id";
$res =  mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($res);

?>

<style>
.form-field{
	 width: 90%;
	 height: 20px;
	 border-radius: 5px;
	 background-color: #fbede6;
}
</style>
 
<div class="mainbg ">
<div class="container">
<div align="center">
<br />
<br />
  <h2>Update Info</h2>
</div>
<div>

<div style="height: 300px; width: 50%;margin-left: 25%; margin-top: 4%; background-color:#fff2f2">
	
	<form  action="updateinfo.php" method="post" style="padding-top: 90px">
	<table width="80%" align="center" cellpadding="10px" >
	<tr>
	<td>name :  
	</td><td width="60%">	<input class="form-field" value="<?php echo $data['name']; ?>" type="text" name="name">
		</td>
	</tr>
<tr>
<td>Address :  
		</td><td><textarea class="form-field" style="height: 92px; margin: 0px;widh:261px;" name="address"><?php echo $data['address']; ?></textarea>
		</td>
	</tr>
	
<tr>
 <td colspan="2" align="center">
		<input type="submit" style="background-color:#059efa" value="Update">
	</td>	
	</tr>
</form>

<?php
include "footer.php";

}else{
	
	header("Location : index.php");
}
?>