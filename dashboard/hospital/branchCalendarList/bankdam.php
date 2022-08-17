<?php
$connection= new mysqli("localhost","root","","donation");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

  
  if(isset($_POST['submit']))
  {
      $Type = $_POST['Type'];
      $donationdate = $_POST['donationdate'];
      $quantity = $_POST['quantity'];
	  
      $query = "INSERT INTO quantity (Type,donationdate, quantity) VALUES
       ('$Type','$donationdate','$quantity')";
      $query_run = mysqli_query($connection, $query);
  
      if($query_run)
      {
          $_SESSION['status'] = "Inserted Succesfully";
          echo "inserted";
         // header("Location: ..\index.php");
      }
      else
      {
          $_SESSION['status'] = "Not Inserted";
          echo "not inserted";
         // header("Location: ..\index.php");
      }
  }
?>