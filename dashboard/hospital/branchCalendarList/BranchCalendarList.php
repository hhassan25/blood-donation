<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      
	   <link rel="stylesheet" href="./css/bootstrap.css" />
	   <script src="./js/jquery.js"></script>
	   <link rel="stylesheet" href="./css/jquery-datatable/dataTables.bootstrap4.min.css">
	   <link rel="stylesheet" href="./css/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
       <link rel="stylesheet" href="./css/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
	   

   </head>
   <body >
      <div id="wrapper">
       
         <div id="wrapper-content" class="clearfix ">
            <div id="primary-content" class="pd-top-50 pd-bottom-50 page-wrap">
               <div class="container clearfix">
                  <div class="page-inner">
                     <div class="row" >
                        <!--------------------------------------BEGIN Of Middle----------------------------------------------->       
                        <div class="col-sm-12" >
									<form  id="f1"  method="post" >
										<div class="row">
										</div>

									  <div class="row">
											<div  class="col-md-1 col-sm-12">
												 
											</div>
											<div  class="col-md-10 col-sm-12">
													 <table class="table table-hover js-basic-example dataTable table-custom" id="mtbl" >
														<thead class="thead-dark">
															<tr>  
																<th>Year</th>
																<th>Blood Type</th>
																<th>Quantity </th>
																<th>Date of doantion</th>
															
															</tr>
														</thead>
														<tbody id="tbl">
														   														   <?php 
$connect = mysqli_connect("localhost", "root", "", "donation");
														   
 $query = "SELECT * FROM quantity ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo "<tr><td>".$row['Type']."</td></tr>";  
                }  	
?>
														</tbody>
													</table>   
											</div>
											<div  class="col-md-1 col-sm-12">
												
											</div>
									 </div>
		                           </form>
                              </div>
                              <!-- <input type="submit" class="btn btn-success"  value="Save" id="save" >         -->
                           <!-- </form> -->
                        </div>
                        <!--------------------------------------END OF MIDDLE----------------------------------------------->         
                        <!--------------------------------------BEGIN of right side----------------------------------------------->   
                        <!--------------------------------END of right side----------------------------------------------->   
                        <!---------------END ROW---------------------->
                     </div>
                  </div>
               </div>
            </div>
         </div>
		<script src="./js/datatablescripts.bundle.js"></script>

		<script src="./js/tables/jquery-datatable.js"></script> 
   
  
   
   </body>
</html>
