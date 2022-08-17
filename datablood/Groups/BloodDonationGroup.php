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
																<th>Blood Type</th>
																<th>Can Give to</th>
																<th>Can recieve from </th>
																
															</tr>
														</thead>
														<tbody id="tbl">
														   	<tr> 
															
															<td> A+ </td>
															<td>  A+, AB+ </td>
															<td>  A+, A-, O+, O- </td>
															</tr>
															
															<tr>
															<td> O+ </td>
															<td>  O+, A+, B+, AB+ </td>
															<td> O+, O- </td>
															</tr>
															<tr>
															<td> B+ </td>
															<td>  B+, AB+ </td>
															<td>  B+, B-, O+, O- </td>
															</tr>
															
															<tr>
															<td> AB+ </td>
															<td> AB+ </td>
															<td>EveryOne</td>
															</tr>
															
															<tr>
															<td> A- </td>
															<td> A+, A-,AB+,AB- </td>
															<td>A-, O-</td>
															</tr>
															
															<tr>
															<td> O- </td>
															<td> EveryOne </td>
															<td>O-</td>
															</tr>
															
															<tr>
															<td> B- </td>
															<td> B+, B-, AB+, AB-</td>
															<td>B-, O-</td>
															</tr>
															
															<tr>
															<td> AB- </td>
															<td> AB+. AB- </td>
															<td>AB-, A-, B-, O-</td>
															</tr>
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