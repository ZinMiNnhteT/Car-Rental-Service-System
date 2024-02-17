<?php
include_once('connection.php');

$car_id = $_POST['car_id'];
$aircon = $_POST['aircon'];
$per_day = $_POST['per_day'];
$owner_name = $_POST['owner_name'];
$owner_nrc = $_POST['owner_nrc'];
$owner_phone = $_POST['owner_phone'];
$owner_address = $_POST['owner_address'];
$car_oiltype = $_POST['car_oiltype'];
$car_availability = "yes";

$sql = "UPDATE owners SET aircon = '$aircon',per_day = '$per_day',
owner_name = '$owner_name',owner_nrc = '$owner_nrc',owner_phone ='$owner_phone',
owner_address = '$owner_address' WHERE car_id = '$car_id'";



// $sql="UPDATE cars SET car_name='$car_name',car_nameplate='$car_nameplate',ac_price='$ac_price',non_ac_price='$non_ac_price',
// ac_price_per_day='$ac_price_per_day',non_ac_price_per_day='$non_ac_price_per_day' WHERE car_id='$car_id'";
mysqli_query($conn,$sql);
header('Location:entercar.php');
?>