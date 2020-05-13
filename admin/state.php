<?php
$sql="select*from state";
$res=mysqli_connect($con.$res);
?>
<select name="state_id">
	<option value="1">up</option>
	<option value="2">up</option>
</select>
<?php
while($data=mysqli_fetch_assoc($res)){
	?>
	<option value="<?php echo $data['id'];
	?>">
	<?php
	echo $data ['name'];
	?>
	</option>
	<?php }
	?>
	</select>
	
}