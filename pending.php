<?php
include "header.php";
include "admin/db.php";
if(isset($_SESSION['id'])){
$user_id = $_SESSION['id'];

//OR from_id=$user_id

$all_friend=array();
	$sql =  "SELECT friend.* FROM `friend` WHERE to_id=$user_id AND status=0 ";
	$res =  mysqli_query($con, $sql);
	$k=0;
	while($data = mysqli_fetch_assoc($res)){
		
		$id= $data['from_id'];
		$sql2 =  "SELECT name,email FROM `user` WHERE id=$id";
		$res2 =  mysqli_query($con, $sql2);
		$data2 = mysqli_fetch_assoc($res2);
		$data['name']= $data2['name'];		
		$data['email']= $data2['email'];		
		$all_friend[] = $data;
		$k=$k+1;
	}
	

	
	

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
  <h2>Pening Invitation </h2>
</div>
<div>

<div style="height: 300px; width: 50%;margin-left: 25%; margin-top: 4%; background-color:#fff2f2">
	
	<form  action="#" method="post" style="padding-top: 90px">
	
	
	<hr/>
	
		<table width="80%" align="center" cellpadding="10px" >
	<tr>
	<td>Name</td>
	<td>Email</td>
	<td>Actoin</td>
	
	</tr>
	<?php foreach($all_friend as $fr){ ?>
	<tr>
	<td width="20%"> <?php echo $fr['name']; ?>	</td>
	<td width="20%"> <?php echo $fr['email']; ?>	</td>
		
		<td>
		
		<a href="accept.php?id=<?php echo $fr['id']; ?>"><input type="button" style="background-color:#059efa" value="Accept"></a>
		
		<a href="can.php?id=<?php echo $fr['id']; ?>"><input type="button" style="background-color:#059efa" value="Ignore"></a>
		
		</td>
	
	
	</tr>
	<?php } ?>
	
	</table>
	
	
	

</form>
</div>

<?php
include "footer.php";

}else{
	
	header("Location : index.php");
}
?>