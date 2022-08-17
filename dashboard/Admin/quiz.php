<?php
    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }
    if (!isset($_SESSION['loggedin']) || ($_SESSION['role'] !== 'admin' && ($_SESSION['role'] !== 'lab' && $_SESSION['role'] !== 'employee'))) {
      header('Location: ../Login/index.php');
  die();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Details</title>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		

	  <link rel="stylesheet" href="./css/bootstrap.css" />
	   <script src="./js/jquery.js"></script>
	   <link rel="stylesheet" href="./css/jquery-datatable/dataTables.bootstrap4.min.css">

			<style>
#cal{
	
	
	height:1000px;
	width:70%;
	margin-left: 100px;
}

#btn{ color:black;
	  font-weight:bold;
	  font-family: Times, "Times New Roman", Georgia, serif;
	  letter-spacing:2px;
	  word-spacing:10px;
	  text-shadow: 1px 1px #000000;
}

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

</style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="../hospital/generalS2.php" class="logo">
      <span class="logo-mini"><b>S</b>TF</span>
      <span class="logo-lg"><b>Staff Only</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
                       <a href="../server/logout.php"><span class="hidden-xs" >Sign out</span></a>
            </a>
              </li>
            </ul>
      </div>
    
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
        <div class="user-panel">
        <div class="pull-left image">
          <br />
        </div>
        <div class="pull-left info">
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
 
      <ul class="sidebar-menu" data-widget="tree">
	  

            
  <li>
          <a href="../Admin/laboratory.php">
            <i class="fa fa-group"></i> <span>To Blood Lab</span>
          
          </a>
        </li>
    
	 <li>
          <a href="../Admin/quiz.php">
            <i class="fa fa-group"></i> <span>Details</span>
          
          </a>
        </li>
	  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
        Details
      </h1>
      
    </section>
		 <section class="content">
      <div class="row">
          
        <div id="calendar" class="col-md-12 col-sm-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
      
	  
	  
	  
	  
	  
	  
	  
<form method="POST" action="details.php">
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Full Name</label>
    <input autocomplete="off" type="text" id="txt" name="fullname" class="form-control" id="exampleFormControlTextarea1" rows="2" cols="1" required >
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mother Name</label>
    <input autocomplete="off" type="text" id="txt" name="mothername" class="form-control" id="exampleFormControlTextarea1" rows="2" cols="1" required >
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Home Address</label>
    <input autocomplete="off" type="text" id="txt" name="homeadress" class="form-control" id="exampleFormControlTextarea1" rows="2" cols="1" required >
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Blood Type</label>
    <select name="type" id="txt" class="form-control" id="exampleFormControlSelect1" required>
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
  
  <button type="submit" name="submit" class="btn btn-danger" id="btn"> Submit </button>
</form>


               <div class="container clearfix">

								  <div class="row">
										<div  class="col-md-1 col-sm-12"></div>		 			
											<div id="m" class="col-md-10 col-sm-12">
													 <table class="table table-hover js-basic-example dataTable table-custom" id="mtbl" >
														<thead class="thead-dark" >
															<tr>  
																<th id="th">ID</th>
																<th id="th">Full Name</th>
																<th id="th">Mother Name</th>
																<th id="th">Home Address </th>
																<th id="th">Blood Type </th>
																<th id="th">Delete</th>
															</tr>
														</thead>
														<tbody id="tbl">
<?php 
$connect = mysqli_connect("localhost", "root", "", "donation");
													   
 $query = "SELECT * FROM details ORDER BY id ASC";
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>
						  <th scope="row">'.$row['id'].'</th>
						  <th scope="row">'.$row['fullname'].'</th> 
						  <th scope="row">'.$row['mothername'].'</th> 
						  <th scope="row">'.$row['homeadress'].'</th>
						  <th scope="row">'.$row['type'].'</th>
						  <th><a href="delete-process-details.php?id='.$row['id'].'" ?><input type="button" id="btn1" value="delete" /></a></th>
						 
                          </tr> 
						  ';
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
	  
	    <div class="control-sidebar-bg"></div>
</div>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="./js/datatablescripts.bundle.js"></script>
<script src="./js/tables/jquery-datatable.js"></script> 
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/pages/dashboard.js"></script>
<script src="../dist/js/demo.js"></script>

	  
	  

	  
	  
    </section>
  </div>




</body>
</html>
