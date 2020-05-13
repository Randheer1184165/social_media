<?php
include "header.php";
include "admin/db.php"
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
  <h2>Add Update</h2>
</div>
<div>
<form action="upload.php" method="post" enctype="multipart/form-data">
<div style="height: 300px; width: 50%;margin-left: 25%; margin-top: 4%; background-color:#fff2f2">
	
	<form  style="padding-top: 90px">
	<table width="80%" align="center" cellpadding="10px" >
	<tr>
	<td>Title :  
	</td><td width="60%">	<input class="form-field" type="text" name="title">
		</td>
	</tr>
	
	<tr>
<td>Category :  
		</td>
		<td>
		
		<select name = "category_id" class="form-control" style="width:250px; height: 30px">
							<?php
							
							$sql = "SELECT * FROM `category`";
							$res = mysqli_query($con,$sql);
							while($data = mysqli_fetch_assoc($res))
							{
							?>
							<option value ="<?php echo $data['id']?>"><?php echo $data['name']?></option>
							<?php
							} 
							?>
							</select>
		
		</td>
	</tr>
	
	
<tr>
<td>Product Image :  
		</td><td><input class="form-field" type="file"  name="file">
		</td>
	</tr>
	
<tr>
<td>Vendor :  
		</td>
		<td>
		
	
							
							<select name = "retailer_id" style="width:250px; height: 30px" class="form-control">
							<?php
							
							$sql = "SELECT * FROM `retailer`";
							$res = mysqli_query($con,$sql);
							while($data = mysqli_fetch_assoc($res))
							{
							?>
							<option value ="<?php echo $data['id']?>"><?php echo $data['name']?></option>
							<?php
							} 
							?>
							</select>
		
		
		</td>
	</tr>	
	
	
	<tr>
	<td>Description :  
	</td><td width="60%">	<textarea class="form-field" cols="20" rows="30" name="description">
	</textarea>
		</td>
	</tr>

<tr>
 <td colspan="2" align="center">
		<input type="submit" style="background-color:#059efa" value="Update">
	</td>	
	</tr>
	</table>
</form>
</div>