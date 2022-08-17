<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['loggedin']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'employee')) {
      header('Location: ../Login/index.php');
  die();
}
$connection=mysqli_connect('localhost','root','root','senior');
$sql = "SELECT id, title, start, end, color FROM events ";
$query=mysqli_query($connection,$sql);
$A=array();
while( $rows = mysqli_fetch_assoc( $query))
	array_push($A,$rows);
echo json_encode($A);
?>