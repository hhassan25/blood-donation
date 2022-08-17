<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['loggedin']) || ($_SESSION['role'] !== 'admin' && ($_SESSION['role'] !== 'lab' && $_SESSION['role'] !== 'employee'))) {
        header('Location: ../Login/index.php');
  die();
}
$_SESSION['statusMsg'] = '';
 // File upload path
$targetDir = "uploads/";
$connect = mysqli_connect("localhost", "root", "", "donation");  
if(isset($_POST["insert"]) && !empty($_FILES["image"]["tmp_name"])){
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.'/../../uploads/'. $_FILES["image"]['name'])){
            // Insert image file name into database
            $query = "INSERT into files (image, text) VALUES ('".$fileName."', NOW())";
            $insert= mysqli_query($connect, $query);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.>";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}
$_SESSION['statusMsg'] =$statusMsg;
header("Location: laboratory.php");// Display status message
?> 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Clients blood test upload to Blood Bank</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
       
      </body>  
 </html>  