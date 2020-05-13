<?php
include "header.php";
?>

<style>
.form-field{
	 width: 90%;
	 height: 20px;
	 border-radius: 5px;
	 background-color: #fbede6;
}
</style>
 
<div class="mainbg ">
<div class="container">
<div align="center">
<br />
<br />
  <h2>User Login</h2>
</div>
<div>


<div style="height: 300px; width: 50%;margin-left: 25%; margin-top: 4%; background-color:#fff2f2">
	
	<form action="enter.php" method="post" style="padding-top: 90px">
	<table width="80%" align="center" cellpadding="10px" >
	<tr>
	<td>Username/Email :  
	</td><td width="60%">	<input class="form-field" type="text" name="email">
		</td>
	</tr>
<tr>
<td>
	Password:  
		</td><td><input class="form-field" type="text"  name="password">
		</td>
	</tr>
	
	<tr>
 <td colspan="2" align="center">
		<input type="submit" style="background-color:#059efa" value="Login">
	</td>	
	</tr>
	<tr>
 <td colspan="2" align="center">
		<a href="register.php">Create An Account</a>
	</td>	
	</tr>
	
		</table>
	
	</form>
	
	
	
</div>
</div>
</div>
<?php include "footer.php";
?>
</div>