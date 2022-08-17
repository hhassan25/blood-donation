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
  <meta charset="utf-8">
  <title>Blood Test</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		
		
			<style>
			#cal{
	
	
	height:600px;
	width:100%;
}

			</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
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
    
        <li class="treeview">
          
          
        </li>
        
        
  <li>
          <a href="generalS.php">
            <i class="fa fa-group"></i> <span>Blood Bank files sent</span>
          
          </a>
        </li>
    	 <li>
          <a href="../Admin/generalS2.php">
            <i class="fa fa-group"></i> <span>Blood Bank</span>
          
          </a>
        </li>
	  <li>
          <a href="generalS2.php">
            <i class="fa fa-group"></i> <span>Hospital section</span>
          
          </a>
        </li>
		 <li>
          <a href="../Admin/newuser_view.php">
            <i class="fa fa-group"></i> <span>New User</span>
          
          </a>
        </li>
		<li>
          <a href="../Admin/Appointment.php">
            <i class="fa fa-group"></i> <span>Appointments</span>
          
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
        Blood Test
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
     
        <div id="calendar" class="col-md-12 col-sm-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar">
			         <object id="cal" data="index.php"></object>

			  </div>
            </div>
            
          </div>
       
        </div>
    
      </div>
   
    </section>
   
  </div>



  
  <div class="control-sidebar-bg"></div>
</div>

<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>

<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="../bower_components/fastclick/lib/fastclick.js"></script>

<script src="../dist/js/adminlte.min.js"></script>

<script src="../dist/js/demo.js"></script>

<script src="../bower_components/moment/moment.js"></script>
<script src="../bower_components/fullcalendar/dist/fullcalendar.min.js"></script>


</body>
</html>
