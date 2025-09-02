<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logout</title>
</head>
<body>
	<?php
		session_destroy(); //all sessions

		//unset($_SESSION['admin']); //only one session

		//echo "Successfully Logout<br>";
		//echo "<a href='login_form.php'>Login</a>";

		echo "<script>
		          alert('Successfully Logout!');
		          window.location.href='SignIn.php';
		      </script>";
	?>

</body>
</html>