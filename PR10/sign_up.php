
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <style>
		.container {
			padding-left: 20%;
		}
		input {
			width: 60%;
			outline: bold;
		}

		.inputgroup {
			position: relative;
			margin-bottom: 22px;
		}

		.select {
			width: 41%;
		}

		.btn {
			line-height: 20px;
			padding: 0 10px;
			background: #BCCE98;
			cursor: pointer;
		}
   </style>
</head>
<body style="padding-top: 3rem;">
<h3 style="text-aling: center;">Sign Up</h3>

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
				<option>User</option>
				<option>Admin</option>
				</select></p>
		</div>
		<div class="inputgroup">
			<input type="password" name="password" placeholder="Password*" required id="password" minlengh="6" size="60">
		</div>
		<div class="inputgroup">
			<input type="text" name="login" id="login" placeholder="Logi*" required size="60">
		</div>
		<button class="btn" type="submit">Sign Up</button>
	</form>
	
</div>

</body>
</html>