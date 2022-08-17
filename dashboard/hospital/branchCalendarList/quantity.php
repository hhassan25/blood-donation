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
      $donatorname = $_POST['DonatorName'];
	  
      $query = "INSERT INTO quantity (Type,donationdate, quantity,donatorname) VALUES
       ('$Type','$donationdate','$quantity','$donatorname')";
      $query_run = mysqli_query($connection, $query);
  
      if($query_run)
      {
          $_SESSION['status'] = "Inserted Succesfully";
          echo "inserted";
          header("Location: List.php");
      }
      else
      {
          $_SESSION['status'] = "Not Inserted";
          echo "not inserted";
         
      }
  }
?>