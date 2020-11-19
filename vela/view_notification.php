<?php
$conn = new mysqli("localhost","root","","velacomp");



$sql="SELECT * FROM stock WHERE quantity < 9";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'>Stock Quantity:". $row["quantity"] . "</div>" . 
	"<div class='notification-comment'> Stock Name:" . $row["name"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>