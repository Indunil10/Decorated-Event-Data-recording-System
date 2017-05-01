<?php

	$server='localhost';
	$user='Indunil';
	$password='56964';
	$database='banana';
	
	$conn=mysqli_connect($server,$user,$password,$database) or die("unable connect");
	//check connection
	echo('Successfully connected</br>');
	// creating database
	/*$sql1='CREATE DATABASE Pineapple';
	
	if(mysqli_query($conn,$sql1))
	{
		echo ('Successfully createdd database <br/>');
	}
	
	else
	{
		echo 'Unable to connect database'.mysqli_error($conn);
	}*/
	
	//creating table
	
	$sql2='CREATE TABLE myfriends (
Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Fname VARCHAR(30) NOT NULL,
Lname VARCHAR(30) NOT NULL,
Password varchar(20),
Gender varchar(20),
reg_date TIMESTAMP
)';
	
	if(mysqli_query($conn,$sql2))
	{
		echo ('Successfully createdd Table <br/>');
	}
	
	else
	{
		echo 'Unable to create table'.mysqli_error($conn);
	}
	
	mysqli_close($conn);
	
?>