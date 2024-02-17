<?php
session_start();
$error='';

if (isset($_POST['submit'])) {
if (empty($_POST['user_id']) || empty($_POST['user_password'])) {
$error = "Username or Password is invalid";
}
else
{
$user_id=$_POST['user_id'];
$user_password=$_POST['user_password'];
require 'connection.php';
// $conn = Connect();


$query = "SELECT user_id, user_password FROM users WHERE user_id=? AND user_password=? LIMIT 1";


$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $user_id, $user_password);
$stmt -> execute();
$stmt -> bind_result($user_id, $user_password);
$stmt -> store_result();

if ($stmt->fetch())  
{
	$_SESSION['login_customer']=$user_id;
	header("location: index.php"); 
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); 
}
}
?>