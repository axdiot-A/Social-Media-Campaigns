<?php

	$host = "localhost"; //ip address//127.0.0.1
	$username = "root";
	$password = "";

	$connection = mysqli_connect($host,$username,$password);

	if($connection) echo "Connected!!!<br>";
	else echo "Connection Error!<br>";


	$sql="create database userdb";

	if(mysqli_query($connection,$sql))
		echo "Database created!!!<br>";
	else echo "Database creation error!!!<br>";




?>