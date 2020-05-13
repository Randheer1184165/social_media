<?php
include "header.php";
include "admin/db.php";
if(isset($_SESSION['id'])){
$user_id = $_SESSION['id'];
$up_id = $_REQUEST['id'];
$sql =  "SELECT * FROM `updates` WHERE id=$up_id";
$res =  mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($res);

$sql1 =  "SELECT * FROM `comment` WHERE update_id=$up_id";
$res1 =  mysqli_query($con, $sql1);




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
  <h2>Share</h2>
</div>
<div>

<div style="height: auto; width: 50%;margin-left: 25%; margin-top: 4%; background-color:#fff2f2">
	
	<form  action="insertcomment.php" method="post" enctype="multipart/form-data" style="padding-top: 90px">
	<table width="80%" align="center" cellpadding="10px" >
	<tr>
	<td colspan="2" align="center" >
	<img src="<?php echo $data['image']; ?>" style="height:200px;width:200px" >
	
		</td>
	</tr>
	
	


	
	
	<tr>
	<td width="60%">Comment : <br/>	<textarea class="form-field" style="height: 92px; margin: 0px;widh:261px;" name="comment"></textarea>
	<input type="hidden" name="update_id" value="<?php echo $data['id']; ?>">
		</td>
	</tr>

<tr>
 <td colspan="2" align="center">
		<input type="submit" style="background-color:#059efa" value="Submit">
	</td>	
	</tr>
	
	<tr>
	<td>
	<ul>
<?php while($data1 = mysqli_fetch_assoc($res1)){ ?>

<li> <?php echo $data1['comment']; ?> </li>
<?php } ?>
</ul>
	</td>
	</tr>
	
	</table>





</form>






</div>
<?php
include "footer.php";

}else{
	
	header("Location : index.php");
}
?>