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
                            Friend Listing Page
                            <small>Friend listing</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Friend Listing Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
				<div class="col-lg-12">
				<a href="addfriend.php"> <input type="button" value="Add Friend" class="btn btn-primary"></a>
				</div>  
				</div>
			
				<div class="row">
				<div class="col-lg-12">
				
				<div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>To_id</th>
                                        <th>From_id</th>
                                        <th>status</th>
                                        <th>date</th>
                                        <th>Accept_date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
								   
								   $sql = "SELECT * FROM friend";
								   $res = mysqli_query($con, $sql);
								   while($data = mysqli_fetch_assoc($res)){
								   
								   ?> 
									
									<tr>
                                        <td><?php echo $data['name']; ?></td>
                                        <td><?php echo $data['to_id']; ?></td>
                                        <td><?php echo $data['from_id']; ?></td>
                                        <td><?php echo $data['status']; ?></td>
                                        <td><?php echo $data['date']; ?></td>
                                        <td><?php echo $data['accept_date']; ?></td>
                                        <td>
										<a href="editfriend.php?id=<?php echo $data['id']; ?>">Edit/</a>
										
										<a href="deletefriend.php?id=<?php echo $data['id']; ?>" >Delete</a></td>
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
