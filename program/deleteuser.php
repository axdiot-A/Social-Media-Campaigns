<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete</title>
</head>
<body>
	<?php
	if(isset($_SESSION['admin'])){
			echo "<a href='logout.php'>Logout</a><hr>";	

			include("dbconnection.php");

			$id=$_GET['id']; //a href

			$sql = "delete from user where id=$id";

			//are you sure?

			if(mysqli_query($connection,$sql))
			{
				//echo "One user record is successfully deleted!<br>";
				//echo "<a href='userlist.php'>User List</a>";
				echo "<script>
				        alert('One user record is successfully deleted!');
				        window.location.href='userlist.php';
				      </script>";
			}
			else {
				echo "Deletion error!<br>";
			}


		}
		else echo "Restricted page! Administrator only!<br>";
	?>

</body>
</html>