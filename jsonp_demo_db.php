<?php

header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

//this is my laptop server username and password.If you want you can change those things to your code

$servername = "localhost";
$username = "Indunil";
$password = "56964";
$dbname = "banana";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM upcomingevents ";
$result = $conn->query($sql);

$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);


echo "myFunc(".json_encode($outp).")";


// codes bellow I used for testing when implimenting when you implimenting new system you can use for your tsting



/*for ($x=0;$x<count($outp);$x++)
{
	echo json_encode($outp[$x]);
	echo "</br>";

}*/

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Event :" . $row["Event"]. " Location : ".$row["Location"]. "<br>";
    }
} else {
    echo "0 results";
}*/


$conn->close();
?>