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

 if(isset($_POST["submit"])) 
  {
	  
      $fullname = $_POST['fullname'];
	  $fathername = $_POST['fathername'];
      $mothername = $_POST['mothername'];
      $bod = $_POST['bod'];
	  $Birthplace = $_POST['Birthplace'];
	  $residencenumber = $_POST['residencenumber'];
	  $phone = $_POST['phone'];
      $city = $_POST['city'];
      $country = $_POST['country'];
	  $comment = $_POST['comment'];
	  
	  
      $query = "INSERT INTO donatenow (fullname,fathername,mothername,bod,Birthplace,residencenumber,phone,city,country,comment) VALUES 
	  ('$fullname','$fathername','$mothername','$bod','$Birthplace','$residencenumber','$phone','$city','$country','$comment')";
      $query_run = mysqli_query($connection, $query);
  
      if($query_run)
      {
          $_SESSION['status'] = "Inserted Succesfully";
          echo "inserted";
          header("Location: donatenow.php");
      }
      else
      {
          $_SESSION['status'] = "Not Inserted";
          echo "not inserted";
         
      }
  }
?>