<?php
include_once('connection.php');
$car_id=$_GET['car_id'];
//echo $car_id;exit();

$sql="DELETE FROM owners WHERE car_id='$car_id'";
mysqli_query($conn,$sql);

header('Location: entercar.php');
?>