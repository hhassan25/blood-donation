<?php
echo $_SESSION['loggedin'];
 if (!is_null($_SESSION) || !isset($_SESSION['loggedin'])) {
     header('Location: Login/index.php');

} else {
     
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="bower_components/morris.js/morris.css">

  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">

  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<style>
#cal{
width:100%;
height:600px;
}
</style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="Admin/generalS.php" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        
          
          <li class="dropdown user user-menu">
             <!-- <a href="././Managment/admin/logout.php"><span class="hidden-xs" >Sign out</span></a>-->
         <a href="login/index.php"><span class="hidden-xs" >Sign out</span></a>
                </div>
              </li>
            </ul>
          </li>
          

      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
 
      <div class="user-panel">
        <div class="pull-left image">
          <br />
        </div>
        <div class="pull-left info">
          
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     

      <ul class="sidebar-menu" data-widget="tree">
       

		 <li class="active">
          <a href="Admin/generalS.php">
            <i class="fa fa-group"></i> <span>Blood Bank files sent</span>
          
          </a>
        </li>


		 <li>
          <a href="Admin/generalS2.php">
            <i class="fa fa-group"></i> <span>Blood Bank</span>
          
          </a>
        </li>

 <li>
          <a href="hospital/generalS2.php">
            <i class="fa fa-group"></i> <span>Hospital Section</span>
          
          </a>
        </li>
		 <li>
          <a href="newuser_view.php">
            <i class="fa fa-group"></i> <span>New User</span>
          
          </a>
        </li>
		<li>
          <a href="Admin/Appointment.php">
            <i class="fa fa-group"></i> <span>Appointments</span>
          
          </a>
        </li>
        
  </aside>

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
        
     
        <div  class="col-md-12 col-sm-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="cal" >
			         <object id="cal" data="Admin/index.php"></object>

			  </div>
            </div>
            
          </div>
       
        </div>
    
      </div>
   
    </section>
   
  </div>

  <div class="control-sidebar-bg"></div>
</div>



<script src="bower_components/jquery/dist/jquery.min.js"></script>

<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="bower_components/fastclick/lib/fastclick.js"></script>

<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
