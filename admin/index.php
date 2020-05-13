<!doctype html>
<html lang="en"> <!--<![endif]-->
<head>
	
	
	
	<link rel="stylesheet" href="validate/css/screen.css" />
<script src="validate/lib/jquery.js"></script>
<script src="validate/dist/jquery.validate.js"></script>

<script>
	$().ready(function() {
		$("#login-form").validate({
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
			  	 
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="login/css/base.css">
	<link rel="stylesheet" href="login/css/skeleton.css">
	<link rel="stylesheet" href="login/css/layout.css">
	
</head>
<body>

	<div class="notice">
		<a href="" class="close">close</a>
		<p class="warn">Whoops! We didn't recognise your username or password. Please try again.</p>
	</div>



	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
			<form id="login-form" action="login.php" method="post">
				<h2>Login</h2>
				<p><input type="text" placeholder="email" name="email"></p>
				<p><input type="password" placeholder="Password" name="password"></p>
				<label for="remember">
				  <input type="checkbox" id="remember" value="remember" />
				  <span>Remember me on this computer</span>
				</label>
				<button type="submit"></button>
			</form>
		</div>

	
		<p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>


	</div>

	
<!-- End Document -->
</body>
</html>