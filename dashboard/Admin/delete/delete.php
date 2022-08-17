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

$id = $_POST['id'];
$result = mysqli_query($mysqli, 'DELETE FROM files WHERE id=".$id."');

header("Location: http://localhost/BloodDonation/dashboard/Admin/generalS2.php");
?>