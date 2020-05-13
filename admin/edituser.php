<?php include "header.php";
include "menu.php";
$id=$_REQUEST['id'];
// Create connection
$con=mysqli_connect("localhost","root","","social");
$sql="SELECT * FROM `user` WHERE `id`='{$id}'";
$res=mysqli_query($con,$sql);

$user=mysqli_fetch_assoc($res);
	
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            EDIT YOUR DATA
                            <small>welcome user</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Edit your Data 
                            </li>
                        </ol>
                    </div>
                </div>
               
			   
			   
			     <div class="row">
                    <div class="col-lg-6">
					   <form action="updateuser.php" method="post" role="form">

                            <div class="form-group has-success ">
                                <label class="control-label" for="inputSuccess">Name</label>
                                <input type="text" name="name" value="<?php echo $user['name']; ?>" class="form-control"  >
                            </div>

                            <div class="form-group has-success">
                                <label class="control-label" >Email</label>
                                <input type="text" value="<?php echo $user['email']; ?>" name="email" class="form-control" >
                            </div>
							
						    <div class="form-group has-success">
                                <label class="control-label" for="inputError">Password</label>
                                <input type="text" value="<?php echo $user['password']; ?>" name="password" class="form-control">
                            </div>
							
							 <div class="form-group has-success">
                                <label class="control-label" for="inputError">Address</label>
                                <input type="text" value="<?php echo $user['address']; ?>" name="address" class="form-control">
                            </div>
							
							  <div class="form-group has-success">
                                <label class="control-label" for="inputError">Contact No</label>
                                <input type="text" value="<?php echo $user['contact_no']; ?>" name="contact_no" class="form-control">
                            </div>
								<?php
							$sql = "SELECT * FROM `state`";
							$res = mysqli_query($con,$sql);
							?>	
							<div class="form-group has-success">
                            <label class="control-label" for="inputError" >State_id</label>
							<select name = "state_id" class="form-control">
							<?php
							while($state = mysqli_fetch_assoc($res))
							{
							?>
							<option <?php if($user['state_id']==$state['id']){ ?> selected="selected" <?php } ?> value ="<?php echo $state['id']?>"><?php echo $state['name']?></option>
							<?php
							} 
							?>
							</select>
							</div>
							 <div class="form-group has-success">
                                <label class="control-label" for="inputError">Date</label>
                                <input type="date" name="date" class="form-control" value="<?php
   																							$actual_time = date('D:M:Y',time());
   																							echo $actual_time;
    																						?>">
                            </div>
						
							<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
					
							
							
							
							
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