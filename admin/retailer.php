<?php
include "header.php";
include "menu.php";
include "db.php";
?>
<!doctype html>
<html lang="en"> <!--<![endif]-->
<head>
	
	
	
<link rel="stylesheet" href="validate/css/screen.css" />

<script src="validate/lib/jquery.js"></script>
<script src="validate/dist/jquery.validate.js"></script>

<script>
	$().ready(function() {
		$("#friend").validate({
			rules: {
			to_id: {
				required: true,
				minlength: 5
			},
			URL: {
				required: true,
				minlength: 52
			},
			
		},
		messages: {
			name: {
				required: "Please enter your name",
				minlength: "Your name must consist of at least 5 characters"
			},
			URL: {
				required: "Please enter a valid URL",
				minlength: "Your email must consist of at least 52 characters"
			},
			
			
		}
	});
	});

	</script>
	
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<!-- Stylesheets -->
</head>
<body>

	<div class="notice">
		<a href="" class="close">close</a>
	</div>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                            <strong>Retailer list</strong>
                            <small>your list</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Add friend
                            </li>
                        </ol>
                    </div>
                </div>
               
			   
			   
			     <div class="row">
                    <div class="col-lg-6">
					   <form action="Retailer.php" method="post" role="form" id="Retailer">

                            <div class="form-group has-success ">
                                <label class="control-label" for="inputSuccess">Name</label>
                                <input type="text" name="name" class="form-control"  >
                            </div>

                            <div class="form-group has-success">
                                <label class="control-label" >URL</label>
                                <input type="text" name="URL" class="form-control" >
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
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="login/js/app.js"></script>
	</body>
	</html>
		
		<?php include "footer.php"; ?>    