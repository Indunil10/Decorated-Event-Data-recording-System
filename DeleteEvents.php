<!DOCTYPE html>
<html>
	<head>
	<title>Sky Net</title>
	</head>
	<body>
	<?php

	echo "PHP is running </br>";

	$Uname		   = $_POST['uname'];
	$Password	   = $_POST['pwd'];
	$EventID     = $_POST['eid'];

	//checking empty for usernanme and password

if(empty($_POST['uname'])||empty($_POST['pwd']))
{
	echo "You should enter Your FirstName and Password";
}
else
{

	//checking empty input for Event id

	if(empty($_POST['eid']))
	{
		echo "Event ID is required ";
	}

	else
	{
		//stsrt
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

					$sql13="DELETE FROM upcomingevents WHERE Id= $EventID";
			
			if(mysqli_query($conn,$sql13))
				{
					echo "Successfully Delete a new record";
					echo "</br>";

					
				}
			
			else
				{
					echo 'unable to Delete a row'.mysqli_error($conn);
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
		//end
		
	}

}


?>
</body>
</html>