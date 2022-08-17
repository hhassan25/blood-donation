<?php
$connection=mysqli_connect('localhost','root','root','senior');
$sql = "SELECT id, title, start, end, color FROM events ";
$query=mysqli_query($connection,$sql);
$A=array();
while( $rows = mysqli_fetch_assoc( $query))
	array_push($A,$rows);
echo json_encode($A);
?>