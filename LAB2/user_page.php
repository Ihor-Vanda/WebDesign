<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>LAB 2</title>
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header class="header">User page</header>
	<h3><img src="assets/img/logo.png" alt="" align="middle"><table><td align="left">TABLE</td><td align="right">SIG IN</td>|<td>SIG UP</td></table></h3>
		
	<?php
		
	?>
	
	
	<div class="container">
		<form action="index1.php" id="sigup" method="post">
						
		<div class="inputgroup">
			<input type="text" name="firstname" id="firstname" placeholder="First name*" required size="60">
		</div>
		<div class="inputgroup">
			<input type="text" placeholder="Last name*" required name="username" id="username" size="60">
		</div>
									
		<div class="input-group">
			<p>Select role:
				<select class="select" required name="role">
				<option>Student</option>
				<option>Teachear</option>
				<option>Admin</option>
				</select></p>
		</div>
		<div class="inputgroup">
			<input type="password" placeholder="Password*" required id="password" minlengh="6" size="60">
		</div>
		<div class="inputgroup">
			<input type="password" placeholder="Confirm Password*" required id="confirmpassword" minlengh="6" size="60">
		</div>
		<button class="btn" type="submit">Edit</button>
		<button class="btn" type="submit">Delete</button>
	</form>
	</div>
</body>
</html>