
<?php
//function Connect()
// {
// 	$dbhost = "localhost";
// 	$dbuser = "root";
// 	$dbpass = "";
// 	$dbname = "onlinecar";

// 	//Create Connection
// 	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

// 	return $conn;
// }*/


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "car";

//Create Connection
//$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
	die("Could not connect to database");
}
// function Connect()
// {
// 	$dbhost = "localhost";
// 	$dbuser = "root";
// 	$dbpass = "";
// 	$dbname = "car";

// 	//Create Connection
// 	//$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
// 	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

// 	return $conn;
// }
?>