<?php
	session_start();
    $connection = new mysqli("localhost:3308", "root", "", "donation");
    if ($connection->connect_error) {
      die("Connection failed: " . $connection->connect_error);
    }

    

    if (isset($_POST['submit'])) {
        $_SESSION['email'] = $email;
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = "SELECT email, password FROM users WHERE email = '".$email."' AND password = '".$password."'";
        
    
        $result = mysqli_query($connection,$sql);
        $count = mysqli_num_rows($result);
        $value = mysqli_fetch_row($result);
    
    
        if($count == 1){
            session_start();
            $_SESSION['auth']='true';
            $_SESSION['email']=$email;
            header("Location: ../login.php");
            
        }
    
    
        else{
            $status = "check email and password";
            $_SESSION['status_donators'] = $status;
            header("Location: ../index.php");
        }
    }

 ?>

 

