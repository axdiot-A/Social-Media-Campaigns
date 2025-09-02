<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit User</title>
</head>
<body>
	<?php
	if(isset($_SESSION['admin'])){
		echo "<a href='logout.php'>Logout</a><hr>";	
		include("dbconnection.php");

		$id=$_POST['id'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$gender=$_POST['gender'];
		$country=$_POST['country'];

		$sql="update user set fname='$fname',
							  lname='$lname',
							  email='$email',
							  gender='$gender',
							  phone='$phone',
							  country='$country' where id=$id";

		if(mysqli_query($connection,$sql))
		{
			//echo "One record is updated!<br>";
			//echo "<a href='userlist.php'>Show User List</a>";
			echo "<script>
				        alert('One record is updated!');
				        window.location.href='userlist.php';
				 </script>";
		}	
		else echo "Updating error!<br>";

	}//session if
		else echo "Restricted Page! Administrator only!<br>";	

	?>

</body>
</html>