<?php

	$server='localhost';
	$user='Indunil';
	$password='56964';
	$database='banana';
	
	$conn=mysqli_connect($server,$user,$password,$database) or die("unable connect");
	//check connection
	echo('Successfully connected</br>');
	// creating database
	/*$sql1='CREATE DATABASE banana';
	
	if(mysqli_query($conn,$sql1))
	{
		echo ('Successfully createdd database <br/>');
	}
	
	else
	{
		echo 'Unable to connect database'.mysqli_error($conn);
	}*/
	
	//creating table
	
	$sql2='CREATE TABLE UpcomingEvents (
Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Event VARCHAR(40) NOT NULL,
Location VARCHAR(40) NOT NULL,
_Date VARCHAR(15) NOT NULL,
_Time VARCHAR(12) NOT NULL,
Name VARCHAR(30) NOT NULL,
email VARCHAR(40) NOT NULL,
Telephone VARCHAR(20),
GroupName VARCHAR(30) NOT NULL,
Country VARCHAR(20) NOT NULL,
Attendance VARCHAR(5),
reg_date TIMESTAMP
)';
	
	if(mysqli_query($conn,$sql2))
	{
		echo ('Successfully createdd Table <br/>');
	}
	
	else
	{
		echo 'Unable to create the table'.mysqli_error($conn);
	}
	
	mysqli_close($conn);
	
?>