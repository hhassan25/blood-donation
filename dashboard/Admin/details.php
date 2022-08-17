<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['loggedin']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'lab')) {
      header('Location: ../Login/index.php');
  die();
}
$connection= new mysqli("localhost","root","","donation");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

  
  if(isset($_POST['submit'])) 
  {
	  
      $fullname = $_POST['fullname'];
      $mothername = $_POST['mothername'];
      $homeadress = $_POST['homeadress'];
	  $type = $_POST['type'];
	  
	  
      $query = "INSERT INTO details (fullname,mothername,homeadress,type) VALUES 
	  ('$fullname','$mothername','$homeadress','$type')";
      $query_run = mysqli_query($connection, $query);
  
      if($query_run)
      {
          $_SESSION['status'] = "Inserted Succesfully";
          echo "inserted";
          header("Location: quiz.php");
      }
      else
      {
          $_SESSION['status'] = "Not Inserted";
          echo "not inserted";
         
      }
  }
?>