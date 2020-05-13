<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>

<link href="style.css" rel="stylesheet" />
<script src="js/lib/jquery.js"></script>
<script src="js/dist/jquery.validate.js"></script>

<script>

$().ready(function() {
	// validate the comment form when it is submitte

	// validate signup form on keyup and submit
	$("#register").validate({
		rules: {
			
			uname: {
				required: true,
				minlength: 2
			},
			pass: {
				required: true,
				minlength: 5
			},
			cpass: {
				required: true,
				minlength: 5,
				equalTo: "#pass"
			},
			email: {
				required: true,
				email: true
			}
			
		},
		messages: {
			
			uname: {
				required: "<br>Please enter a username",
				minlength: "<br>Your username must consist of at least 2 characters"
			},
			pass: {
				required: "<br>Please provide a password",
				minlength: "<br>Your password must be at least 5 characters long"
			},
			cpass: {
				required: "<br>Please provide a password",
				minlength: "<br>Your password must be at least 5 characters long",
				equalTo: "<br>Please enter the same password as above"
			},
			email: "<br>Please enter a valid email address"
			
		}
	});

	

	
});
</script>

<meta name="" content="">
</head>
<body id="content">

<div style="float: left;" id="menu">
<p style="float: right">
	<?php include "menu.php"?>
	
	
</p>
</div>
<div id="login-form">

<form id="register" method="post" action="reg.php">
<table style="padding: 20px">
	
	<tr>
	<td colspan="2" style="color:#091e0a"><b>	<?php
		echo "Enter Your Information";
	?></b>
</td>
	</tr>
	
	<tr>
	<td><b>Username</b></td>
	<td><input type="text" name="uname"></td>
	</tr>
	<tr>
	<td><b>Password</b></td>
	<td><input type="text" name="pass" id="pass" ></td>
	</tr>
<tr>
	<td><b>Confirm Password</b></td>
	<td><input type="text" name="cpass" ></td>
	</tr>
	<tr>
	<td><b>Email</b></td>
	<td><input type="text" name="email" ></td>
	</tr>

	<tr>
	<td><b>Name</b></td>
	<td><input type="text" name="name" ></td>
	</tr>
	
		<tr>
	<td colspan="2" align="right"><input type="submit" value="Register"></td>
</tr>
</table>
</form>
</div>

</body>
</html>
