<?php
	session_start();

	require_once 'conn.php';

	$email = $_POST["email"];
	$password = $_POST["password"];
	
	$res = mysqli_query ($conn, "SELECT * FROM `users` WHERE `email` ='$email' 
	AND `password` ='$password'");
	$row = mysqli_fetch_array($res);
	if (is_array($row)) {
		$_SESSION['id'] = $row['id'];
		$_SESSION['first_name'] = $row['first_name'];
		$_SESSION['last_name'] = $row['last_name'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['role_id'] = $row['role_id'];
	} else {
		echo 'Invalid password';
	}
	header('Location: index.php');
?>