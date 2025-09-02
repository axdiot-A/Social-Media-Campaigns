<?php

	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "userdb";

	$connection = mysqli_connect($host,$username,$password,$dbname);

	if($connection) echo "Connected!!!<br>";
	else echo "Connection Error!<br>";

	

		$sql="create table if not exists contactus(id integer auto_increment primary key,
			fname varchar(100), 
			lname varchar(100), 
			email varchar(100),  
			phone varchar(50),  
			message text,
			reply text
			)";
	

	if(mysqli_query($connection,$sql))	
		echo "Table created!<br>";
	else echo "Table creation error<br>";

	/*
		$sql="create table if not exists user(id integer auto_increment primary key,
			fname varchar(100), 
			lname varchar(100), 
			email varchar(100),  
			phone varchar(50),  
			gender varchar(20), 
			country varchar(100), 
			username varchar(100), 
			password varchar(100), 
			usertype varchar(20),
			role varchar(50), 
			remark text
			)";
	*/
			/*$sql="create table if not exists Social(id integer auto_increment primary key,
			Header varchar(100), 
			Name varchar(100), 
			Facts varchar(100),
			role varchar(50),
			remark text    
			)";*/

	

	/* 
			$sql="create table if not exists Opnion(id integer auto_increment primary key,
					fname varchar(100), 
					lname varchar(100), 
					email varchar(100),    
					message text
					)";

	*/
?>