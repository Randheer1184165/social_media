<?php
include "header.php";
include "admin/db.php";

if(isset($_SESSION['id'])){
$user_id = $_SESSION['id'];
$sql =  "SELECT * FROM `updates` WHERE user_id=$user_id";
$res = mysqli_query($con, $sql);
}else{
	

$sql =  "SELECT * FROM `updates` ";
$res = mysqli_query($con, $sql);

	
	}

?>
<style>
.event{
	padding-left: 23%;
    position: relative;
    padding-top: 23%;
   }
   .imd{
   	padding-top:10%;
	 padding-left: 5%; 
	 padding-right: 5%;
   }


</style>


<div class="mainbg ">
<div class="container">
<div align="center">
<br />
<br />
  <h2> <?php if(isset($_SESSION['id'])){ ?>My Updates <?php }else{ ?> All Updates<?php } ?></h2>
</div>
<div>
<?php while($data = mysqli_fetch_assoc($res)){?>

<div class="dotwarp">
<div class="imd">
<img src="<?php echo $data['image']; ?>" />
</div>
<div class="event"><a href="like.php?id=<?php echo $data['id']; ?>">like</a>
<a href="share.php?id=<?php echo $data['id']; ?>">Share</a>
<a href="comment.php?id=<?php echo $data['id']; ?>">Comment</a>
</div>
</div>
<?php } ?>
</div>
</div>
</div>




<?php
include "footer.php";


?>