<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
 if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'hospital') {
  header('Location: ../Login/index.php');
  die();
}
?>
<!DOCTYPE html>  
 <html>  

      <head> 

 <style>
 #insert{
  font-size:1.3em;
      display:block;
      left:-60px;
      margin-top:20px;
      width:100%;
	  color:black;
	  border-radius:6px;
}

#image{font-size:20px;
		margin:25px;
}

	
</style>
	  
            
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h1 style="text-align: center">Clients blood test upload to Blood Bank</h1>  
                <br />  
                <form method="post"  action="uploaddam.php" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />
                     <button type="submit" name="insert" class="btn btn-danger" id="insert" value="Insert"> Insert </button>
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                      
                
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           console.log(image_name);
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  