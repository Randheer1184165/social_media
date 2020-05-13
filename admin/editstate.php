<?php 
include "db.php";
include "header.php";
include "menu.php";
$id=$_REQUEST['id'];
// Create connection

$sql="SELECT * FROM `state` WHERE `id`='{$id}'";
$res=mysqli_query($con,$sql);

$data=mysqli_fetch_assoc($res);
	
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            EDIT YOUR DATA
                            <small>Edit State</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Edit state 
                            </li>
                        </ol>
                    </div>
                </div>
               
			   
			   
			     <div class="row">
                    <div class="col-lg-6">
					   <form action="updatestate.php" method="post" role="form">

                            <div class="form-group has-success ">
                                <label class="control-label" for="inputSuccess">Name</label>
                                <input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control"  >
                            </div>
                            
							<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
							
							
							
							
							
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