<?php
$connect = mysqli_connect("localhost", "root", "", "donation");

$id=$_GET['id'];

$sql = "DELETE FROM quantity WHERE id='$id'";
if (mysqli_query($connect, $sql)) {
    echo "Record of id ".$id." deleted successfully";
	} else {
    echo "Error deleting record: " . mysqli_error($connect);
}
header("Location:List.php");
mysqli_close($connect);
?>