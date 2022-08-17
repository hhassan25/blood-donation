<?php

//load.php

$connect = mysqli_connect('localhost','root', 'root','attendance');



$query = 'SELECT id, title, DATE_FORMAT(start_event, "%Y-%m-%d") AS "start", DATE_FORMAT(end_event, "%Y-%m-%d") AS "end"  FROM events';

$res=mysqli_query($connect,$query);

$A=array();
while($row=mysqli_fetch_assoc($res))
	array_push($A,$row);

echo json_encode($A);

?>