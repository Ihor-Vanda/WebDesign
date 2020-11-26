
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>LAB 2</title>
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header class="header">Таблица пользователей</header>
	<h3><img src="assets/img/logo.png" alt="" align="middle"><a class="homepage" href="index1.php">TABLE</a></h3>
	<a class="open-button1" href="sign_up.php">Sign Up</a>
	<button class="open-button2" onclick="openForm()">Sign In</button>
	
	<div class="form-popup" id="myForm">
		<form action="index1.php" class="form-container" method="post">
			<h1>SIGN IN</h1>
			<label for="firsrname"><b>First Name</b></label>
			<input type="text" placeholder="Your first name" name="firstname" required>
			<label for="lastname"><b>Last Name</b></label>
			<input type="text" placeholder="Your last name" name="lastname" required>
			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Your password" name="password" minlength="6" required>
			<button type="submit" class="btn">Sign In</button>
			<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
		</form>
	</div>
	
	
	<div class="container">
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "lab2"; //повинна бути створена в субд

			// Встановлення з'єднання 
			$conn = new mysqli($servername, $username, $password, $database);

			// Перевірка з'єднання
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			echo "<table cellspacing= '0'cellpadding= '0' border= '1' width='100%' >
			<tr><th>#</th><th>First name</th><th>Last name</th><th>Role</th></tr>";
			
			$sql = "SELECT first_name, last_name FROM users";
			$result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn)); 
			
			if($result) {
				$rows = mysqli_num_rows($result);
			
			
				for ($i = 1; $i <= $rows; $i++){
					$row = mysqli_fetch_row($result);
					echo "<tr><td align='center'>$i</td>";
					for ($j = 0; $j < 2; $j++) {
						if ($row != "password")
							echo "<td align='center'>$row[$j]</td>";
					}
					echo "</tr>";
				}
			} else {
				echo "<tr><td align='center' colspan='5'>Пока нет зарегистрированных пользователей</td></tr>";
			}
			echo "</table>";
		?>
	</div>
	
	<script src="assets/js/sign_in.js"></script>
</body>
</html>