<?php 
include "header.php";
include "menu.php";
$id=$_REQUEST['id'];
// Create connection
$con=mysqli_connect("localhost","root","","social");
$sql="SELECT * FROM `friend` WHERE `id`='{$id}'";
$res=mysqli_query($con,$sql);

$friend=mysqli_fetch_assoc($res);
	
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            EDIT YOUR DATA
                            <small>welcome friend</small>
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
					   <form action="updatefriend.php" method="post" role="form">

                            <div class="form-group has-success ">
                                <label class="control-label" for="inputSuccess">Name</label>
                                <input type="text" name="name" value="<?php echo $friend['name']; ?>" class="form-control"  >
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