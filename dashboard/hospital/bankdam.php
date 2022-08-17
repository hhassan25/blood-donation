<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
 if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'hospital') {
  header('Location: ../Login/index.php');
  die();
}
$connect = mysqli_connect("localhost", "root", "", "donation");
?>
<style>
#tbl{
	
	text-align: left;
	padd-top: 150px;
	
}
</style>
    <table class="table table-bordered" >  
                     <tr id="tbl">  
                          <th>Image</th>  
                     </tr>  
<?php 					 
 $query = "SELECT * FROM files ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                   <a href="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" download> <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"  height="100%" width="100%" class="img-thumnail" />  
                               </td>  
							   </a>
                          </tr>  
                     ';  
                }  	
?>