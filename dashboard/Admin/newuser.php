<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
 if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
  header('Location: ../Login/index.php');
  die();
}
$connect = mysqli_connect("localhost", "root", "", "donation");

 if(isset($_POST["submit"])) 
 {
$name=$_POST['name'];
$username=$_POST['username'];
$role=$_POST['role'];
$password=$_POST['password'];

    $query ="INSERT INTO login(name,username,role,password) VALUES ('$name','$username','$role','$password')";
    $query_run = mysqli_query($connect, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        echo "inserted";
        header("Location: newuser_view.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        echo "not inserted";
       // header("Location: ..\index.php");
    }

       // header("Location: index.php");	
}

?>