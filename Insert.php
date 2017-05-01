<html>
<head>
	<title>Sky Net</title>
</head>
<body bgcolor="#ffe6ff">
<?php
	
	$Uname		   = $_POST['uname'];
	$Password	   = $_POST['pwd'];
	$EventName     = $_POST['event'];
	$EventLocation = $_POST['location'];
	$Date 		   = $_POST['date'];
	$Time 		   = $_POST['time'];
	$Name		   = $_POST['name'];
	$Email		   = $_POST['email'];
	$Telephone	   = $_POST['telephone'];
	$GroupName	   = $_POST['group'];
	$Country	   = $_POST['country'];
	$Attendance	   = $_POST['attendance'];
	
	
	
//checking empty for usernanme and password

if(empty($_POST['uname'])||empty($_POST['pwd']))
{
	echo "You should enter Your FirstName and Password";
}
else
{
	// check for user and password



	// checking empty input for Event Name
	
	if(empty($_POST['event']))
	{
		echo "Event Name is required <br/>";
	}
	else 
	{
		//checking empty input for Location
		
		if(empty($_POST['location']))
			{
		echo "Location is required <br/>";
			}
		else
			{   // checking empty for Date
				if(empty($_POST['date']))
					{
						echo "Date is required <br/>";
					}
				else
				{
					// checking empty for Time
				if(empty($_POST['time']))
					{
						echo "Time is required <br/>";
					}
				else
					{
							//checking empty input for User Name and validate name
				
				if(empty($_POST['name']) || !preg_match("/^[a-zA-Z ]*$/",$Name))
					{
						echo "User Name is required or Invalid Name name should contain letters only <br/>";
					}
				else
					{
						//checking empty input for Email and validate email
						
						if(empty($_POST['email']) || !filter_var($Email, FILTER_VALIDATE_EMAIL))
							{
								echo "Email is required  or invalid email<br/>";
							}
						else
							{
								//checking empty input for Telephone
								
								if(empty($_POST['telephone']))
									{
										echo "Telephone is required <br/>";
									}
								else
									{
										//checking empty input for GroupName
										if(empty($_POST['group']))
											{
												echo "Group Name is required <br/>";
											}
										else
											{
												//checking empty input for Country Name
												
												if(empty($_POST['country']))
													{
														echo "Country Name is required <br/>";
													}
												else
													{
														
														//checking empty input for Attendance
								
								if(empty($_POST['attendance']))
									{
										echo "Attendance is required <br/>";
									}
								else
									{
										//all inputs are ok lets run the sql code for insert data
														//echo("done");	
														$server='localhost';
														$user='Indunil';
														$password='56964';
														$database='banana';
						
						$conn=mysqli_connect($server,$user,$password,$database) or die("unable connect");
						//check connection
						echo('Successfully connected</br>');


						//checking for user  and password 

						$sql4='SELECT Fname,Password FROM myfriends';
		
		/*if(mysqli_query($conn,$sql4))
		{
			echo 'successfully';
		}
		
		else
		{
			'Unable to get data from database'.mysqli_error($conn);
		}*/
		
		$result=(mysqli_query($conn,$sql4));
			//Bug fixing variable
			$x=0;
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{//echo 'Fname : '.$row['Fname'].' Password : '.$row['Password'].'<br/>';
			
				if($row['Fname']==$Uname and $row['Password']==$Password)
				{
					//Bug fixing varible Assinging 
					$x=1;
				}
			}
			
			if($x==1) 
			{
				echo "Welcome :".$Uname."</br>";

				// inserting data

					$sql13="INSERT INTO UpcomingEvents (Event,Location,_Date,_Time,Name,email,Telephone,GroupName,Country,Attendance)
			values ('$EventName','$EventLocation','$Date','$Time','$Name','$Email','$Telephone','$GroupName','$Country','$Attendance');";
			
			if(mysqli_query($conn,$sql13))
				{
					echo "Successfully enterd a new record";
					echo "</br>";

					 $last_id = $conn->insert_id;
    					echo "REMEMBER Event ID is : " . $last_id;
				}
			
			else
				{
					echo 'unable to enter a row'.mysqli_error($conn);
				}

				// data insert done
			}
			else
			{
				echo "Invalid username or passsword";
			}
		}
		
		else
		{
			echo '0 results';
		}

						//check for user and password is done


						
											
														}
														
											
				
													}
				
											}
				
									}
					
							}
				
					}
	
					}		
				}			
			}
		
	}

}
						
						
							

?>


</body>

</html>