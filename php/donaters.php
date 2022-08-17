<?php
session_start();
$connection = new mysqli("localhost:3308", "root", "", "donation");
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['submit'])) {
  $fullname = $_POST['fullname'];
  $midname = $_POST['fathername'];
  $mothername = $_POST['mothername'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $birthdate = $_POST['bod'];
  $phone = $_POST['phone'];
  $Birthplace = $_POST['Birthplace'];

  $city = $_POST['city'];
  $country = $_POST['country'];
  $date = date("Y-m-d");
  $nationalNumber = $_POST['nationalNumber'];
  $residencenumber = $_POST['residencenumber'];
  $message = $_POST['comment'];
  $query = "SELECT date FROM donatenow  WHERE nationalNumber = '$nationalNumber'";
  $result = mysqli_query($connection,$query);
  $query2 = "INSERT INTO donatenow (fullname,fathername, mothername,email,password, bod,Birthplace, phone, city,country,residencenumber,nationalNumber,date,comment) VALUES
  ('$fullname','$midname','$mothername','$email','$password','$birthdate',' $Birthplace','$phone','$city','$country','$residencenumber','$nationalNumber','$date','$message')";
  if(mysqli_num_rows($result) > 0){
    while ($row = $result->fetch_array()) {
      $date22 = max($row);
    }
    $date1 = $date;
    $date2 =$date22;
    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);
    $year1 = date('Y', $ts1);
    $year2 = date('Y', $ts2);
    $month1 = date('m', $ts1);
    $month2 = date('m', $ts2);
    $diff = (($year2 - $year1) * 12) + ($month2 - $month1);
    if(abs($diff) < 3){
     $status = "You cannot donate until 3 months have passed since the last date of your donation";
     $_SESSION['status_donators'] = $status;
     header("Location: ../donaters.php");
    } else {
     $query_run = mysqli_query($connection, $query2);
     header("Location: ../index.php");
    }
  }else {
    $query_run = mysqli_query($connection, $query2);
    header("Location: ../index.php");
  }
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

