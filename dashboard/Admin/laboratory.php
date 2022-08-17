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
  <title>Blood Lab</title>
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

		
		 <link rel="icon" type="image/png" href="../../images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="./css/util.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
	
   
	
	
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



#cal{height:600px;
	width:100%;
}

#btn{ color:black;
	  font-weight:bold;
	  font-family: Times, "Times New Roman", Georgia, serif;
	  letter-spacing:2px;
	  word-spacing:10px;
	  text-shadow: 1px 1px #000000;
}

 

</style>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="generalS.php" class="logo">
      
      <span class="logo-mini"><b>S</b>TF</span>
 
      <span class="logo-lg"><b>Staff Only</b></span>
    </a>
    
    <nav class="navbar navbar-static-top" style="display:block;">
     
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
          <a href="laboratory.php">
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
   
    <section class="content-header">
      <h1>
        Blood Lab
      </h1>
      
    </section>
		 <section class="content">
      <div class="row">
          
        <div id="calendar" class="col-md-12 col-sm-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              


  
		
		
		 <br /><br />  
           <div class="container" style="width:500px;">  
                <h1 style="text-align: center">Clients blood test upload to Blood Bank</h1>  
                <br />  
                <form method="post"  action="uploadlab.php" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />
                     <?php 
          if(isset($_SESSION['statusMsg'])){ echo '<h5 style="color: red">'.$_SESSION['statusMsg'].'</h5>'; unset($_SESSION['statusMsg']);}?>      
					 <button type="submit" name="insert" class="btn btn-danger" id="insert" value="Insert"> Insert </button>
         
          </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                </table>  
           </div> 
            </div>
          </div>
        </div>
    
      </div>
   
    </section>
   
  </div>


<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
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
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/pages/dashboard.js"></script>
<script src="../dist/js/demo.js"></script>

	</body>
		
</html>

