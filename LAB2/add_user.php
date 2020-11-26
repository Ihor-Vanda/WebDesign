<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "lab2";

	// Устанавливаем соединение
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Проверяем соединение
	if (!$conn) {
			 die("Connection failed: " . mysqli_connect_error());
	}
		
	$first_name = $_POST["firstname"];
	$last_name = $_POST["lastname"];
	$password = $_POST["password"];
	if($_POST["role"] == "Admin") {
		$role_id = 1;
	} else {
		$role_id = 2;
	}
	$sql = "INSERT INTO `users` (`first_name`, `last_name`, `password`, `role_id`) 
	VALUES ('$first_name', '$last_name', '$password', '$role_id')";
	if (!mysqli_query($conn, $sql)) {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
	header('Location: index1.php');
?>