<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['loggedin']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'employee')) {
      header('Location: ../Login/index.php');
  die();
}
$connect = mysqli_connect("localhost", "root", "", "donation");

$id=$_GET['id'];

$sql = "DELETE FROM contact WHERE id='$id'";
if (mysqli_query($connect, $sql)) {
    echo "Record of id ".$id." deleted successfully";
	} else {
    echo "Error deleting record: " . mysqli_error($connect);
}
header("Location:appointment.php");
mysqli_close($connect);
?>