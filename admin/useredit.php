<?php 
include "db.php";
include "header.php";
include "menu.php";
$id=$_REQUEST['id'];
// Create connection
$con=mysqli_connect("localhost","root","","social_media");
$sql="SELECT * FROM `user` WHERE `id`='{$id}'";
$res=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($res);
	

?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            Edit USER
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Edit   User 
                            </li>
                        </ol>
                    </div>
                </div>
               
			   
			   
			     <div class="row">
                    <div class="col-lg-6">
					   <form action="update.php" method="post" role="form">

                            <div class="form-group has-success ">
                                <label class="control-label" for="inputSuccess">Name</label>
                                <input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control"  >
                            </div>

                            <div class="form-group has-success">
                                <label class="control-label" >Email</label>
                                <input type="text" value="<?php echo $data['email']; ?>" name="email" class="form-control" >
                            </div>

                            <div class="form-group has-success">
                                <label class="control-label" for="inputError">Password</label>
                                <input type="text" value="<?php echo $data['password']; ?>" name="password" class="form-control">
								</div>
								
                   <div class="form-group has-success">
                                <label class="control-label" for="inputError">Confirm Password</label>
                                <input type="text" value="<?php echo $data['password']; ?>" name="confirm_password" class="form-control">
                            </div>
							
							  <div class="form-group has-success">
                                <label class="control-label" for="inputError">Contact No</label>
                                <input type="text" value="<?php echo $data['contact_no']; ?>" name="contact_no" class="form-control">
                            </div>
							 <div class="form-group has-success">
                                <label class="control-label" for="inputError">Address</label>
                                <input type="text" value="<?php echo $data['address']; ?>" name="address" class="form-control">
                            
							<input type="hidden"name="id" value="<?php echo $data['id']; ?>">
							</div>
							
							
							
							
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

    