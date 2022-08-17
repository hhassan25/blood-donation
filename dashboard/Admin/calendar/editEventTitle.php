<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['loggedin']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'employee')) {
      header('Location: ../Login/index.php');
  die();
}
require_once('bdd.php');
if (isset($_POST['delete']) && isset($_POST['id'])){
	
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM events WHERE id = $id";
$result = mysqli_query($connect, $sql);
    if($result != null){
        
        echo "200";
    }else{
        echo "500";
    }
	
}elseif (isset($_POST['title']) && isset($_POST['color'])&& isset($_POST['start']) && isset($_POST['end']) &&  isset($_POST['id'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$color = $_POST['color'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	
	$sql = "UPDATE events SET  title = '$title', color = '$color', start = '$start' , end = '$end' WHERE id = $id ";

	
$result = mysqli_query($connect, $sql);
    if($result != null){
      
        echo "200";
    }else{
        echo "500";
    }

}
header('Location: ind.php"');

	
?>
