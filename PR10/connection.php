<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "testdb";

	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	// Устанавливаем соединение
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Проверяем соединение
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if ($_SESSION["login"]) {
		//potential sql injection, 
		$login = $_SESSION["login"];
		$password = $_SESSION["password"];
		echo "$login"; 
		
		$res = mysqli_query ($conn, "SELECT * FROM `users` WHERE login ='$login' AND password ='$password'");
		$row = mysqli_fetch_array($res);
		if (is_array($row)) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['login'] = $row['login'];
			$_SESSION['id_role'] = $row['id_role'];
		} else {
			echo 'Invalid password';
			session_unset();
		}
	}
?>
