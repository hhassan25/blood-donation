<?php
session_start();
$connection= new mysqli("localhost:3308","root","","donation");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }
  if(isset($_POST['submit']))
  {
      $name = $_POST['name'];
      $email = $_SESSION['email'];
      $date = $_POST['date'];
      //$dept = $_POST['dept'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];
  
      $query = "INSERT INTO contact (name,email, date, dept, phone, message) VALUES
       ('$name','$email','$date','blood donation','$phone','$message')";
      $query_run = mysqli_query($connection, $query);
  
      if($query_run)
      {
          $_SESSION['status'] = "Inserted Succesfully";
          echo "inserted";
          header("Location: ../index.php");
      }
      else
      {
          $_SESSION['status'] = "Not Inserted";
          echo "not inserted";
         // header("Location: index.php");
      }
  }
?>