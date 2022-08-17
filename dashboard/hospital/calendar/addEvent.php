<?php
require_once('bdd.php');
//echo $_POST['title'];
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	//$type = $_POST['type'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];

	$sql = "INSERT INTO events(title, start, end, color) values ('$title', '$start', '$end', '$color')";
	echo $sql;
	
	if(!mysqli_query($connect,$sql))
	
	{		
		echo 'Not INSERTED';
	}
	else
	{
		echo 'INSERTED';
	}
	mysqli_close($connect);
}
header('Location: ind.php');

	
?>
