<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Calendar</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
			<style>
			#cal{
	
	
	height:450px;
	width:100%;
	
}

fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 100 0 1.5em 0 !important;
	margin-left:50px;
	margin-right:350px;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

    legend.scheduler-border {
        font-size: 1.2em !important;
        font-weight: bold !important;
        text-align: left !important;
        width:auto;
        padding:0 10px;
        border-bottom:none;
    }
#btn{
  font-size:0.875em;
      display:block;
      left:-60px;
      margin-top:35px;
      width:100%;
}
</style>
	
			
<script>
	
	$(document).ready (function(e) { 
	
						
		console.log( sessionStorage.getItem("name")) ; 
		$("#username1").html (sessionStorage.getItem("name")) ; 
	
	}); 

</script> 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../index2.php" class="logo">
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
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
  
          <!-- Tasks: style can be found in dropdown.less -->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span href="./dashboard/server/logout.php" class="hidden-xs">sign out</span>
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
          <br /><br />
        </div>
        <div class="pull-left info">
          <p id="username1"></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
 
      <ul class="sidebar-menu" data-widget="tree">
		<li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../index2.php"><i class="fa fa-circle-o"></i>Home Page</a></li>
            
          </ul>
        </li>

		     <li>
         <a href="branchS.php">
            <i class="fa fa-calendar"></i><span>Academic Calendar</span>
            
          </a>
        </li>
		
		
			<li>
          <a href="BranchCalendarLists.php">
            <i class="fa fa-group"></i><span>Branch Calendar Lists</span>
          </a>
        </li>
		
		<!--<li>
          <a href="user_profile.php">
            <i class="fa fa-user"></i><span>Profile</span>      
          </a>
        </li>-->
		
			  <!--<li>
				<a href="pages/instructors.php">
				<i class="fa fa-group"></i> <span>Absent teachers</span>			  
				</a>
			</li>-->
					
			   <li class="treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Schedule</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-down"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="class.php"><i class="fa fa-circle-o"></i> By Class</a></li>
			<li><a href="teacher.php"><i class="fa fa-circle-o"></i> By Teacher</a></li>
          </ul>
        </li>
		
		
        <li class="active">
          <a href="Calendarview.php">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
        
          </a>
        </li>

				 <li>
				  <a href="CourseCalendar.php">
					<i class="fa fa-calendar"></i> <span>Course Calendar</span>
				
				  </a>
				</li>
	 <li>
          <a href="SubjectSyllabus.php">
            <i class="fa fa-calendar"></i> <span>Subject Syllabus</span>
        
          </a>
        </li>
		
				 <li>
          <a href="ViewSyllabus.php">
            <i class="fa fa-calendar"></i> <span>View Syllabus</span>
        
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
        Calendar
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index2.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Branch  Calendar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
     
        <div id="calendar" class="col-md-12 col-sm-12">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
            <form id="f1"  method="post" >

		   

					<!--<div id="drop1" class="control-group">-->
				<div class="container-fluid">
				 
					<div class="row clearfix">
					
						<div class="col-md-12 col-sm-12">
							<div class="form-group">
							<label> Branch</label>
								<select  id="branch" name="BranchID_X" class="form-control">
								 <option>Select</option>
								</select>
							</div>
						</div>
						
							<div class="col-md-12 col-sm-12" >
							
							<label > Calendar Date</label>
							<select  id="CalendarID" name="CalendarID_X" class="form-control" >
								<option>Select</option>
					</select>	
					</div>
						<div class="col-md-12 col-sm-12" >
							<label> Start Date </label>
								<div class="col-md-12 col-sm-12" >
							
								<input type='date'  name="StartDate_X" class="form-control" / required> 
				</div>
						   
						</div>
						
						<div class="col-md-12 col-sm-12" >
						<label> End Date </label>
							<div class="col-md-12 col-sm-12" >
							
								<input type='date'  name="EndDate_X" class="form-control" / required> 

						   </div>
						</div>
						<div class="col-md-12 col-sm-12" >
								<div class="col-md-12 col-sm-12" >
							
						
						</div>
						</div>
						
						<div class="col-md-12 col-sm-12" >
								<input type="submit" id="btn"   class="btn btn-danger" value="Save"  > 
							
						
						</div>
						</div>
								


								<!--<div >
								<input type='datetime-local'  name="dt_X" class="form-control" /> 
							</div>-->




				 </form>
				 
 <script>


		//path for the Api  folders
	sessionStorage.setItem ("url" ,  "../server/"); 
	var url = sessionStorage.getItem ("url"); 
	
	
	
	$(document).ready(function(e) {
	
			var str = "tbl=Branch&status=select&Condition=1=1 " ;
			
			$.ajax({url: url + 'main.php',
					dataType:'json',
					data : str , 
					type:'post',
					success:function(data){
						
						console.log(data) ; 
						 $("#branch").html(FillCombo(data)); ; 
					},
					error: function(E) {alert(E.status + E.statusText)} 
			});
			
			
function FillCombo (arr) 
			{
				var t = "";
				 $.each(arr, function(k, row) {
					  t=t+"<option value="+row.ID+">"+row.Description+"</option>";
				});
				return t;
			}
			
			//////////////////////////////////Calendar Date //////////////////////////////////
			
					var str = "tbl=TB_Calendar&status=select&Condition=1=1 order by AcademicYearID desc " ;
			
			$.ajax({url: url + 'main.php',
					dataType:'json',
					data : str , 
					type:'post',
					success:function(data){
						
						console.log(data) ; 
						 $("#CalendarID").html(FillCombo1(data)); ; 
					},
					error: function(E) {alert(E.status + E.statusText)} 
					
			});
			
			
			function FillCombo1 (arr) 
						{
							var t = "";
							 $.each(arr, function(k, row) {
								  t=t+"<option value="+row.ID+">"+row.AcademicYearID+"</option>";
							});
							return t;
						}
					
						
						
						
						//////////////////////////////////Saving //////////////////////////////////
				$("#f1").on("submit" ,  function(event) {
								var id=sessionStorage.getItem("Branch");
					//alert("hello");		
					
					str = decodeURIComponent($('#f1').serialize()) ; 
					
					str+="&tbl=TB_BranchCalendar&status=new" ; 
					
					//alert("hello");
					console.log (str) ; 
				//	console.log (url) ; 
				//return false ;  
					
					$.ajax({url: url + 'main.php',
							dataType:'json',
							data : str,
							type:'post',
							success:function(data){
								
								console.log(data) ; 
								//alert("Done") ; 
							//	window.location.href = "calendarGrid.php";
							},
					error: function(E) {alert(E.status + E.statusText)} 
					});
					
				return false; 
				
			});	
			
			
			///////////////////////////////////////////////////////////////////////////
			
			
			
			
	});
	
	</script>
	
 <script>
	
	$(document).ready (function(e) { 
	
						
		console.log( sessionStorage.getItem("Branch")) ; 
	//	var id=sessionStorage.getItem("Branch");
	//	alert(id);
	
	}); 

</script> 
 
 
 
 
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
