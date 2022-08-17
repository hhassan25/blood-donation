<?php
require_once('bdd.php');
if (isset($_POST['Event'][0]) && isset($_POST['Event'][1]) && isset($_POST['Event'][2])){
	
	
	$id = $_POST['Event'][0];
	$start = $_POST['Event'][1];
	$end = $_POST['Event'][2];

	$sql = "UPDATE events SET  start = '$start', end = '$end' WHERE id = '$id' ";
	
$result = mysqli_query($connect, $sql);
    if($result != null){
       
        echo "200";
    }else{
        echo "500";
    }
}
header('Location: ind.php"');

	
?>
