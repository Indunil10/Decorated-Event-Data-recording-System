<html>
<head>
	<title>Sky Net</title>
</head>
<body bgcolor="#ffe6ff">
<?php
	$Fname=$_POST['Fname'];
	$Lname=$_POST['Lname'];
	$upassword=$_POST['password'];
	$gender=$_POST['gender'];
	
	
	
	/*echo $name."<br/>";
	echo $email."<br/>";
	//echo $password."<br/>";
	echo $gender."<br/>";
	echo $comments."<br/>";
	echo $admin."<br/>";*/
	
	// checking empty input for First Name
	
	if(empty($_POST['Fname']))
	{
		echo "First Name is required <br/>";
	}
	else 
	{
		//checking empty input for Last Name
		
		if(empty($_POST['Lname']))
	{
		echo "Last Name is required <br/>";
	}
	else
	{
		
	
		//name validation
		if (!preg_match("/^[a-z A-Z ]*$/",$_POST['Fname'])||!preg_match("/^[a-z A-Z ]*$/",$_POST['Lname']))
		{
			echo "not valid name";
		}
	
		else
		{ //empty password
			if(empty($_POST['password']))
			{
			echo "Password is requred <br/>";
			}
			
			else
			{	//password validation
				/*if(!preg_match("/([A-Z]{7}|[0-9]{1})/",$_POST['password'])
					
					{
						echo "Not a vallid password";
					}
					
					else
					{
						
					}*/
					// correct this there is an issue
					//echo "test done";
					
					
					
								//echo "validation has been done<br/>";
										
					if(empty($_POST['gender']))
					{
					echo "Gender is required";
					}
				
					else
					{
						//echo("done");	
						$server='localhost';
						$user='Indunil';
						$password='56964';
						$database='banana';
						
						$conn=mysqli_connect($server,$user,$password,$database) or die("unable connect");
						//check connection
						echo('Successfully connected</br>');
						$sql13="INSERT INTO myfriends (Fname,Lname,Password,Gender)
			values ('$Fname','$Lname','$upassword','$gender');";
			
			if(mysqli_query($conn,$sql13))
			{
				echo "successfully enterd a row ";
			}
			
			else
			{
				echo 'unable to enter a row'.mysqli_error($conn);
			}
						
						
				}
					
					}
						}
							}
								}
		
			
			

?>

<a href="EventRecoder.html"><button type="button" value="Add Event">Add Event</button></a>
</body>

</html>