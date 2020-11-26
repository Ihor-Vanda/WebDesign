<?php
	// Start the session
	session_start();
?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
</head>
	<?php 
		$_SESSION["login"] = $_POST["login"];
		$_SESSION["password"] = $_POST["password"];
		require_once 'connection.php';
		$login = $_SESSION['login'];
		echo "$login";
		header('Location: restricted.php');
	?>
</body>
</html>
