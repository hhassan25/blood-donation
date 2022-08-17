<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	   <link rel="stylesheet" href="./css/bootstrap.css" />
	   <script src="./js/jquery.js"></script>
	   <link rel="stylesheet" href="./css/jquery-datatable/dataTables.bootstrap4.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
#txt{border-radius:6px;}

#th{background-color:black;
	color:white;
	border-radius:2px;}

#btn{
  font-size:1.3em;
      display:block;
      left:-60px;
      margin-top:20px;
      width:100%;
	  color:black;
	  border-radius:6px;
}

#m{border-spacing:10px;}

#mtbl{border-spacing:3px;}		

#btn1{background-color:white;
	  border-color:white;
}
	
</style>

   <body >

<form method="POST" action="quantity.php">
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Donator Full Name</label>
    <input autocomplete="off" type="text" id="txt" name="DonatorName" class="form-control" id="exampleFormControlTextarea1" rows="2" cols="1" required >
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Blood Type</label>
    <select name="Type" id="txt" class="form-control" id="exampleFormControlSelect1" required>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="B+">B+</option>
	  <option value="B-">B-</option>
	 <option value="O+">O+</option>
	 <option value="O-">O-</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Quantity</label>
    <input autocomplete="off" type="number" id="txt" name="quantity" value="1" min="1" max="1" class="form-control" id="exampleFormControlTextarea1" rows="2" cols="1" required >
  </div>
  
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Date of donation</label>
    <input autocomplete="off" type="date" id="txt" name="donationdate" class="form-control" id="exampleFormControlTextarea1" rows="2" cols="1" required>
  </div>
  
  <button type="submit" name="submit" class="btn btn-danger" id="btn"> Submit </button>
</form>


               <div class="container clearfix">

								  <div class="row">
										<div  class="col-md-1 col-sm-12"></div>		 			
											<div id="m" class="col-md-10 col-sm-12">
													 <table class="table table-hover js-basic-example dataTable table-custom" id="mtbl" >
														<thead class="thead-dark" >
															<tr>  
															<th scope="col" id="th">ID</th>
															<th scope="col" id="th">Donator Full Name</th>
																<th scope="col" id="th">Blood Type</th>
																<th scope="col" id="th">Quantity </th>
																<th scope="col" id="th">Date of donation</th>
																<th scope="col" id="th">Delete</th>
															</tr>
														</thead>
														<tbody id="tbl">
<?php 
$connect = mysqli_connect("localhost", "root", "", "donation");
													   
 $query = "SELECT * FROM quantity ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>
						  <th scope="row">'.$row['id'].'</th>
						  <th scope="row">'.$row['DonatorName'].'</th> 
						  <th scope="row">'.$row['Type'].'</th> 
						  <th scope="row">'.$row['quantity'].'</th> 
						  <th scope="row">'.$row['donationdate'].'</th> 
						 <th><a href="delete-process.php?id='.$row['id'].'" ?><input type="button" id="btn1" value="delete" /></a></th>
						 
                          </tr>  ';
                }  	
?>

														</tbody>
													</table>   
											</div>	
									 </div>
		                           </form>
                              </div>
                             
                        </div>
                   
                     </div>
		<script src="./js/datatablescripts.bundle.js"></script>

		<script src="./js/tables/jquery-datatable.js"></script> 
   </body>
</html>