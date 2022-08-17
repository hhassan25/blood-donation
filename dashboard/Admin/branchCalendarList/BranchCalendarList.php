<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
 if (!isset($_SESSION['loggedin']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'employee')) {
  header('Location: ../Login/index.php');
  die();
}
?>
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
																<th>name</th>
																<th>Documents</th>
															</tr>
														</thead>
														<tbody id="tbl">
														   <?php 
$connect = mysqli_connect("localhost", "root", "", "donation");
														   
 $query = "SELECT * FROM files ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
						  <td> hello </td>
                               <td>  
    <a href="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" download> <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"  height="100%" width="100%" class="img-thumnail" />  
                               </td>  
							   </a>
                          </tr>  
                     ';  
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
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		<script src="./js/datatablescripts.bundle.js"></script>

		<script src="./js/tables/jquery-datatable.js"></script> 
   
	<script>
				$(document).ready(function (){
						var str = '' ; 
						var url = "../../server/";
						 str +="tbl=VwBranchCalendar&status=select&Condition=1=1 order by BranchCalendarID desc" ;
						 console.log(str);
						event.preventDefault(); 
							  $.ajax({url: url + 'main.php', data: str, type: 'post', dataType: 'json',
								success: function(Arr) {
									
									var t = $('#mtbl').DataTable();
									
									$.each(Arr, function(i, row){
									
										t.row.add([
										row.Year,
										row.CalendarDescription,
										row.StartDate.date,
										row.EndDate.date,
										"<a data-row='"+ JSON.stringify(row) +"'  class='btn btn-success detail' > Edit Academic Year</a>" 
										]).draw(false);
									});
								},
								error: function(E) {alert(E.status + E.statusText)}
							  });
							  
						 function formatDate (dt)
						{
							
								var today = new Date(dt) ; 
								
								//var today = new Date();
								var dd = today.getDate();
								var mm = today.getMonth()+1; 
								var yyyy = today.getFullYear();
								if(dd<10) 
								{
									dd='0'+dd;
								} 

								if(mm<10) 
								{
									mm='0'+mm;
								} 
							return  yyyy+'-'+mm+'-'+dd; //+ ' ' + h + ':' + min + ':' + sec + ':' + mil;
						}
							

					$(document).on('click'  , '.detail' , function(event) {
	
							var row = $(this).data("row"); 
							
							sessionStorage.setItem("CalendarRow" , JSON.stringify(row));
							
							window.location.href = "x.html" ; 
						
					});					
							  
				});
		
		</script>
   
   
   </body>
</html>