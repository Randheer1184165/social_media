<?php
include "header.php";
include "menu.php";
include "db.php";
?>

	
	<link rel="stylesheet" href="validate/css/screen.css" />
<script src="validate/dist/jquery.validate.js"></script>

<script>
	$().ready(function() {
		$("#user").validate({
			rules: {
			email: {
				required: true,
				minlength: 2
			},
			password: {
				required: true,
				minlength: 5
			}
		},
		messages: {
			email: {
				required: "Please enter a Email",
				minlength: "Your username must consist of at least 2 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			}
			
		}
	});
	});

	</script>


	<div class="notice">
		<a href="" class="close">close</a>
	</div>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            <strong> ADD USER</strong>
                            <small>Welcome user</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Add User 
                            </li>
                        </ol>
                    </div>
                </div>
               
			   
			   
			     <div class="row">
                    <div class="col-lg-6">
					   <form action="user_reg.php" method="post" role="form" id="user">

                            <div class="form-group has-success ">
                                <label class="control-label" for="inputSuccess">Name</label>
                                <input type="text" name="name" class="form-control"  >
                            </div>

                            <div class="form-group has-success">
                                <label class="control-label" >Email</label>
                                <input type="email" name="email" class="form-control" >
                            </div>

                            <div class="form-group has-success">
                                <label class="control-label" for="inputError">Password</label>
                                <input type="password" name="password" class="form-control">
								</div>
								
                   <div class="form-group has-success">
                                <label class="control-label" for="inputError">Address</label>
                                <input type="text" name="address" class="form-control">
                            </div>
							
							  <div class="form-group has-success">
                                <label class="control-label" for="inputError">Contact No</label>
                                <input type="text" name="contact_no" class="form-control">
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
							 <div class="form-group has-success">
                                <label class="control-label" for="inputError">Date</label>
                                <input type="date" name="date" class="form-control" value="<?php
   																							$actual_time = date('D:M:Y',time());
   																							echo $actual_time;
    																						?>">
                            </div>
							
							    <div class="form-group has-error">
                               <input type="submit" class="btn btn-primary" value="Click here">
                            </div>
							

                        </form>
					
					
					
					</div>
					</div>
			   
			   
			    <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>        <!-- /#page-wrapper -->
		

		
		<?php include "footer.php"; ?>    