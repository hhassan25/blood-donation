<?php
session_start();
$connection = new mysqli("localhost:3308", "root", "", "donation");
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['submit'])) {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  
  $result = mysqli_query($connection,$query);
  $query2 = "INSERT INTO users (email,password,fullname) VALUES('$email','$password','$fullname')";
  $query_run = mysqli_query($connection, $query2);
     header("Location: ../index.php");
  // if ($query_run) {
  //   header("Location: ../index.php");
  //   //         echo "DONE";
  // } else {
  //   $status = "Not Inserted";
  //   $_SESSION['status_donators'] = $status;
  //   // header("Location: ..\index.php");
  //   header("Location: ../donaters.php");
  // }
}

