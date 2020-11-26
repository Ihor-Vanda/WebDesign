
<?php
// Start the session
	session_start();
?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
</head>
<body style="padding-top: 3rem;">
<?php
    if(count($_SESSION) > 0){
		
		$login = $_SESSION['login'];
		echo "<h1>You authorised<h1>
        <p>Hello $login</p>";
		
		if ($_SESSION['id_role'] == 1) {
			echo "<p>Your role admin</p>";
		} else if ($_SESSION['id_role'] == 2) {
			 echo "<p>Your role user</p>";
		}
    } else {
        echo "<h1>You haven't authorised<h1>
            <p><a href='login.php'>Log in</a>
			<a href='sign_up.php'>Sign Up</a></p>";
            
    }
?>
</body>
</html>