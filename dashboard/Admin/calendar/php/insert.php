<?php

//insert.php

$connect =mysqli_connect('localhost','root','root','attendance');



   $title  = $_POST['title'];
   $start_event = $_POST['start'];
   $end_event = $_POST['end'];
   
   
   $query = "INSERT INTO events(title, start_event, end_event) VALUES ('$title', '$start_event', '$end_event')";

if(!mysqli_query($connect,$query))
	
	{
		
		echo 'Not INSERTED';
		
	}
	else
	{
		echo 'INSERTED';
	}
	mysqli_close($connect);
	header("refresh:2; url=index.php");

?>
