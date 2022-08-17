
<?php
$connection= new mysqli("localhost:3308","root","","donation");
if(isset($_POST["username"], $_POST["password"])) 
    {     
        ob_start();
        session_start();
        $username = $_POST["username"]; 
        $password = $_POST["password"]; 

        $result1 = $connection->query("SELECT username, password,role FROM login WHERE username = '".$username."' AND  password = '".$password."'");
        $row = $result1->fetch_array();  
   
        if(mysqli_num_rows($result1) > 0 )
        { 
            $_SESSION['loggedin'] = TRUE;
		    $_SESSION['name'] = $_POST['username'];
            $_SESSION['role'] =  $row['role'];
            if($_SESSION['role'] === "admin"){
                header("Location: ..\Admin\generalS2.php");
            } else if($_SESSION['role'] === "hospital"){
                header("Location: ..\hospital\index.php");
            }else if($_SESSION['role'] === "lab"){
                header("Location: ..\Admin\laboratory.php");
            }else if($_SESSION['role'] === "employee"){
                header("Location: ..\Admin\generalS2.php");
            }
        }
        else
        {
header("Location: " . $_SERVER["HTTP_REFERER"]);
        }
		
}


?>