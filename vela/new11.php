<?php
if(isset($_POST['sub']))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vela";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}






	$sql = "INSERT INTO stock11 (name, quantity, type, msg, location, price)
VALUES ('John', 'Doe', 'john@example.com', 'Doe', 'john@example.com','john@example.com')";

if($sql)
{
	echo"inserted successfully";
}
else
{
	echo"not inserted";
}

$conn->close();
}
?>
