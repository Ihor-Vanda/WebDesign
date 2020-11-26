<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "testdb";

	// Устанавливаем соединение
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Проверяем соединение
	if (!$conn) {
			 die("Connection failed: " . mysqli_connect_error());
	}
		
	$first_name = $_POST["firstname"];
	$last_name = $_POST["lastname"];
	$password = $_POST["password"];
	$login = $_POST["login"];
	if($_POST["role"] == "admin") {
		$id_role = 1;
	} else {
		$id_role = 2;
	}
		 
	$sql = "INSERT INTO `users` (`first_name`, `last_name`, `password`, `login`, `id_role`) 
	VALUES ($first_name, $last_name, $password, $login, $id_role)";
	if (!mysqli_query($conn, $sql)) {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	header('Location: login.php');
?>