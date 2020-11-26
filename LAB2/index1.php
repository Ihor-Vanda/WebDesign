
<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "lab2"; //повинна бути створена в субд

		// Устанавливаем соединение
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Проверяем соединение
		if (!$conn) {
			  die("Connection failed: " . mysqli_connect_error());
		}
		
		$first_name = $_POST["firstname"];
		$last_name = $_POST["lastname"];
		$password = $_POST["password"];
		$role_id = 1;
		 
		$sql = "INSERT INTO users (first_name, last_name, password, role_id) VALUES ($first_name, $last_name, $password, $role_id)";
		if (!mysqli_query($conn, $sql)) {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>LAB 2</title>
   <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header class="header">Таблица пользователей</header>
	<h3><img src="assets/img/logo.png" alt="" align="middle"><table><td align="left">TABLE</td><td align="right">SIG IN</td>|<td>SIG UP</td></table></h3>
	
	
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
			
			echo "<table border='1' width = 100% cellspacing= '0' cellpadding= '0'>
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
</body>
</html>