<?php 
$connect = mysqli_connect("localhost", "root", "", "donation");

$id = $_POST['id'];
$result = mysqli_query($mysqli, 'DELETE FROM quantity WHERE id=".$id."');

header("Location: http://localhost/BloodDonation/dashboard/hospital/generalS2.php");
?>