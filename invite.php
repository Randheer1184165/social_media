<?php
include "header.php";
include "admin/db.php";
if(isset($_SESSION['id'])){
$user_id = $_SESSION['id'];


$all_friend= array();
if(isset($_REQUEST['name'])){
	$name = $_REQUEST['name'];
	
	
	$sql =  "SELECT * FROM `user` WHERE name LIKE '%$name%'";
	//echo $sql;exit;
	$res =  mysqli_query($con, $sql);
	while($data = mysqli_fetch_assoc($res)){
		$id= $data['id'];
	$sql2 =  "SELECT * FROM `friend` WHERE to_id=$id AND from_id=$user_id";
	$sql3 =  "SELECT * FROM `friend` WHERE from_id=$id AND to_id=$user_id";
	$res2 = mysqli_query($con, $sql2);	
	$res3 = mysqli_query($con, $sql3);	
		

	$data2 = mysqli_fetch_assoc($res2);	
	$data3 = mysqli_fetch_assoc($res3);	

		$num2 = mysqli_num_rows($res2);
		$num3 = mysqli_num_rows($res3);
		if($num3 >0 || $num2 >0 ){
		
			if($num3 >0){
			$data['c_id'] = $data3['id'];
				
			}

			if($num2 >0){
			$data['c_id'] = $data2['id'];
				
			}


			$data['status'] = 1;
		
		
		}else{
		
				
			
				$data['status'] = 0;
		
			
			
			//echo "2";
		}
		$all_friend[]= $data;
	}
	

	
	
}else{
	$name = '';
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
  <h2>Update Info</h2>
</div>
<div>

<div style="height: 300px; width: 50%;margin-left: 25%; margin-top: 4%; background-color:#fff2f2">
	
	<form  action="#" method="post" style="padding-top: 90px">
	<table width="80%" align="center" cellpadding="10px" >
	<tr>
	<td width="20%">Search Friend :  
	</td><td width="50%">	<input class="form-field" value="<?php echo $name; ?>" type="text" name="name">
		</td>
		<td><input type="submit" style="background-color:#059efa" value="Search"></td>
	</tr>
	</table>
	
	<hr/>
	
		<table width="80%" align="center" cellpadding="10px" >
	<tr>
	<td>Name</td>
	<td>Action</td>
	
	</tr>
	<?php foreach($all_friend as $fr){ ?>
	<tr>
	<td width="20%"> <?php echo $fr['name']; ?>	</td>
		
		<td>
		<?php if($fr['status']=='0'){ ?>
		<a href="inv.php?id=<?php echo $fr['id']; ?>"><input type="button" style="background-color:#059efa" value="Invite"></a>
		
		<?php }else{ ?>
		<a href="can.php?id=<?php echo $fr['c_id']; ?>"><input type="button" style="background-color:#059efa" value="Cancel Invitation"></a>
		
		
		<?php } ?>
		
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