<?php
include "db.php";
include "header.php";
include "menu.php";

?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Place Listing Page
                            <small>place listing</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> place Listing Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
				<div class="col-lg-12">
				<a href="addplace.php"> <input type="button" value="Add place" class="btn btn-primary"></a>
				</div>  
				</div>
			
				<div class="row">
				<div class="col-lg-12">
				
				<div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>District_id</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
								   
								   $sql = "SELECT * FROM place";
								   $res = mysqli_query($con, $sql);
								   while($data = mysqli_fetch_assoc($res)){
								   
								   ?> 
									
									<tr>
                                        <td><?php echo $data['name']; ?></td>
                                        <td><?php echo $data['district_id']; ?></td>
                                        <td>
										<a href="editplace.php?id=<?php echo $data['id']; ?>">Edit/</a>
										
										<a href="deleteplace.php?id=<?php echo $data['id']; ?>" >Delete</a></td>
                                    </tr>
                                
								<?php }?>        
                                </tbody>
                            </table>
                        </div>
				
				</div>
				
				</div>

            
			
			
			</div>
        </div>



<?php include "footer.php" ?>
