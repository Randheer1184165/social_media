<?php 
include "header.php";
include "menu.php";
$id=$_REQUEST['id'];
// Create connection
$con=mysqli_connect("localhost","root","","social");
$sql="SELECT * FROM `district` WHERE `id`='{$id}'";
$res=mysqli_query($con,$sql);

$district=mysqli_fetch_assoc($res);
	
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            EDIT YOUR DATA
                            <small>Edit District</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Edit district 
                            </li>
                        </ol>
                    </div>
                </div>
               
			   
			   
			     <div class="row">
                    <div class="col-lg-6">
					   <form action="updatedistrict.php" method="post" role="form">

                            <div class="form-group has-success ">
                                <label class="control-label" for="inputSuccess">Name</label>
                                <input type="text" name="name" value="<?php echo $district['name']; ?>" class="form-control"  >
                            </div>
                            <?php
							$sql = "SELECT * FROM `state`";
							$res = mysqli_query($con,$sql);
							?>	
							<div class="form-group has-success">
                            <label class="control-label" for="inputError" >State_id</label>
							<select name = "state_id" class="form-control">
							<?php
							while($data = mysqli_fetch_assoc($res))
							{
							?>
							<option value ="<?php echo $data['id']?>"><?php echo $data['name']?></option>
							<?php
							} 
							?>
							</select>
							</div>
							<input type="hidden" name="id" value="<?php echo $district['id']; ?>">
							
							
							
							
							
							    <div class="form-group has-error">
                               <input type="submit" class="btn btn-primary">
                            </div>
							

                        </form>
					
					
					
					</div>
					</div>
			   
			   
			    <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>        <!-- /#page-wrapper -->
		
		<?php include "footer.php"; ?>

    <?php

?>