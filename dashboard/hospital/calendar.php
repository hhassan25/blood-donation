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
  <link rel="stylesheet"
   href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>	

<link href='calendar/full_calendar/core/main.css' rel='stylesheet'/>
<link href='calendar/full_calendar/daygrid/main.css' rel='stylesheet'/>

<script src='calendar/full_calendar/core/main.js'></script>
  <script src='calendar/full_calendar/daygrid/main.js'></script>
  <script src='calendar/full_calendar/interaction/main.js'></script>  

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
          <!-- Messages: style can be found in dropdown.less-->
         <!-- <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
             <!--   <ul class="menu">
                  <li><!-- start message
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less 
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data
                <ul class="menu">
                  <li><!-- Task item
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item 
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item 
                  <li><!-- Task item
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item 
                  <li><!-- Task item 
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item 
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="hidden-xs">ADMIN</span>
            </a>
            <ul class="dropdown-menu">
            
             
              
                <div class="pull-right">
                  <a href="../server/logout.php" class="btn btn-default">Sign out</a>
                </div>
              </li>
            </ul>
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
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../index.php"><i class="fa fa-circle-o"></i>Home Page</a></li>
            
          </ul>
        </li>
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="charts/chartjs.php"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="charts/morris.php"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="charts/flot.php"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="charts/inline.php"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tables/simple.php"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="tables/data.php"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
		
		
		 <li>
          <a href="generalS.php">
            <i class="fa fa-calendar"></i> <span>Academic Calendar</span>
          </a>
        </li>
		
        <li class="active">
          <a href="calendar.php">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
        
          </a>
        </li>
		  <li>
          <a href="instructors.php">
            <i class="fa fa-group"></i> <span>Instructors</span>
            
          </a>
        </li>
			  <li>
          <a href="calendar.php">
            <i class="fa fa-book"></i> <span>Schedule</span>
        
          </a>
        </li>
		<li>
          <a href="pages/instructors.php">
            <i class="fa fa-group"></i> <span>Absent teachers</span>
          
          </a>
        </li>

		  <li>
          <a href="user_profile.php">
            <i class="fa fa-user"></i><span>Profile</span>
            
          </a>
        </li>
		  <li>
          <a href="instructors.php">
            <i class="fa fa-bell"></i> <span>Announcements</span>
            
          </a>
        </li>
		
		  <li>
          <a href="todo.php">
            <i class="fa fa-pencil"></i> <span>Todo List</span>
            
          </a>
        </li>
		
        <li>
          <a href="mailbox/mailbox.php">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            
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
        <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendar</li>
      </ol>
    </section>

	<script>


		//path for the Api  folders
	sessionStorage.setItem ("url" ,  "../server/"); 
	var url = sessionStorage.getItem ("url"); 
	
	
	
	$(document).ready(function(e) {
	
			var str = "tbl=VwTeacherBranches&status=select&Condition=1=1" ;
			
$.ajax({url: url + 'main.php',
					dataType:'json',
					data : str , 
					type:'post',
					success:function(arr){
						
							var t = "";
							 $.each(arr,function(k, row) {
							 t=t+"<button  class='btn'  data-id='" + row.BranchID  + "' value='"+row.BranchID+"'>"+row.BanchName+"</button>";
								// t=t+"<option value="+row.BranchID+">"+row.BanchName+"</option>";
								
							});
							$("#branches").html(t);
					},
					error: function(E) {alert(E.status + E.statusText)} 
			});

			$(document).on('click'  , '.btn' , function(event) {

							var id = $(this).data("id"); 
							sessionStorage.setItem("branchID" ,  id ) ;
							
			document.getElementById("calendar").innerHTML = "";				
			var str = "tbl=VwCalendarDays&status=select&Condition=BranchCalendarID=1" ;
			console.log(str);
			//alert(str);
			$.ajax({url: url+ 'main.php',
					dataType:'json',
					data : str , 
					type:'post',
					success:function(data){
						//alert(data);
					console.log(data);
					
						
	const calendarEl = document.getElementById('calendar');
      const calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['dayGrid', 'interaction'],
        // plugins: ['dayGrid', 'interaction','timeGrid','list'],
        defaultView: 'dayGridMonth',
        //editable: true,
        //selectable: true,
        eventLimit:true,
		allDay:true,
		allDayDefault:true,
		hiddenDays: [0] ,
        header: { 
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,dayGridWeek,dayGridDay'
          // right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: data,
		
     validRange: function () {
      return {
        start: ('2019-11-10'),
        end: ('2020-06-05')
      };
    },

      });
	  
	    calendar.render();
						 
		},
					error: function(E) {alert(E.status + E.statusText)} 
		
  
  });
  
  
   // document.addEventListener('DOMContentLoaded', function () {





return false;
			
		
	});	
});	

</script>
	
	
	
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div id="event" class="col-sm-2">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Calendar Options</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
              	<div class="col-md-12 col-sm-12">
		   <div id="branches">
		</div>
		</div>
              </div>
            </div>
            
          </div>
       
        </div>
     
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar">
			</div>
        </div>
	</div>
</div>
    
      </div>
   
    </section>
   
  </div>



  
  <div class="control-sidebar-bg"></div>
</div>

<script src="../bower_components/fastclick/lib/fastclick.js"></script>

<script src="../dist/js/adminlte.min.js"></script>


</body>
</html>
