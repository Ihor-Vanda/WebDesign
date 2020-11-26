
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="padding-top: 3rem;">
<header class="header">Sing Up</header>
<h3><img src="assets/img/logo.png" alt="" align="middle">TABLE</h3>

<div class="container">

	<form action="add_user.php" id="sigup" method="post">
						
		<div class="inputgroup">
			<input type="text" name="firstname" id="firstname" placeholder="First name*" required size="60">
		</div>
		<div class="inputgroup">
			<input type="text" placeholder="Last name*" required name="lastname" id="lastname" size="60">
		</div>
									
		<div class="input-group">
			<p>Select role:
				<select class="select" required name="role">
				<option>Admin</option>
				<option>User</option>
				</select></p>
		</div>
		<div class="inputgroup">
			<input type="password" name="password" placeholder="Password*" required id="password" minlengh="6" size="60">
		</div>
		<div class="inputgroup">
			<input type="password" placeholder="Confirm Password*" required id="confirmpassword" minlengh="6" size="60">
		</div>
		<button class="btn" type="submit">Sign Up</button>
	</form>
	
</div>

</body>
</html>