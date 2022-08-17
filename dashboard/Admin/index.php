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
  <title>Blood Bank</title>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  <link rel="icon" type="image/png" href="../../images/icons/favicon.ico" />
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
    #cal {
      height: 600px;
      width: 100%;
    }

    #btn {
      color: black;
      font-weight: bold;
      font-family: Times, "Times New Roman", Georgia, serif;
      letter-spacing: 2px;
      word-spacing: 10px;
      text-shadow: 1px 1px #000000;
    }

    #zero {
      top: 0;
      left: 0;
      position: fixed;
      background: black;
      opacity: 0.4;
      width: 100%;
      height: 100%;
      pointer-events: none;
    }

    #aa {
      position: fixed;
      left: 0;
      right: 0;
      margin: auto;
      top: 50%;
      transform: translateY(-50%);
      width: 40em;
      height: 40em;
      background: #fff;
      border-radius: 10px;
      border: 3px solid black;
    }

    #x {
      color: white;
      background-color: black;
      font-size: 30px;
    }

    #btn x {
      background-color: black;
      width: 3px;
      height: 3px;
    }

    .right {
      float: right;
    }

    #form {
      top: 0%;
      transform: translateY(100%);
      height: 50px;
      float: right;

    }
  </style>
  <script>
    function show() {
      document.getElementById("zero").style.display = "inline-block";
      document.getElementById("aa").style.display = "inline-block";
    }

    function hide() {
      document.getElementById("zero").style.display = "none";
      document.getElementById("aa").style.display = "none";
    }
  </script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <a href="../Admin/generalS2.php" class="logo">

        <span class="logo-mini"><b>S</b>TF</span>

        <span class="logo-lg"><b>Staff Only</b></span>
      </a>
      <nav class="navbar navbar-static-top" style="display: block;">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="../server/logout.php"><span class="hidden-xs">Sign out</span></a>
              </a>
            </li>
          </ul>
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
          <li class="treeview">
            <ul class="treeview-menu">
              <li><a href="generalS.php"><i class="fa fa-circle-o"></i>Home Page</a></li>
            </ul>
          </li>

          <li>
            <a href="generalS2.php">
              <i class="fa fa-group"></i> <span>Blood Bank</span>
            </a>
          </li>
          <li>
            <a href="../hospital/generalS2.php">
              <i class="fa fa-group"></i> <span>Hospital Section</span>
            </a>
          </li>
          <?php
          if ($_SESSION['role'] === 'employee')
            echo '	 <li>
          <div id=zero style="display:none"></div>
          <a href=# target=_self onClick="show()" class=left>
            <i class="fa fa-group"></i> <span>New User</span>
          </a>
        </li>
        ';
          if ($_SESSION['role'] === 'admin')
            echo '	 	<li>
		<div id=zero style="display:none"></div>
          <a href="newuser_view.php" class=left>
            <i class="fa fa-group"></i> <span>New User</span>
          </a>
        </li>
        '
          ?>
  	<div id=aa style="display:none">
		<div id="btn x" style="z-index: 999999;position: fixed;"><a href=# target_self onClick="hide()" id=x class=right>X</a></div>
			<div class="limiter" style="height: 100%;">
				<div class="container-fluid" id="form" style="display: contents;">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="width: 100%;
                  height: 100%;
                  border-radius: 10px;
                  overflow: hidden;
                  padding: 55px 55px 37px 55px;
                  background: #9152f8;
                  background: -webkit-linear-gradient(top, #7579ff, #b224ef);">
				<form action="../server/donatenow.php" method="POST" class="login100-form validate-form" >
					<span class="login100-form-title p-b-49" id="btn">
						Administrator Login
					</span>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Enter Your Username">
						<span class="label-input100">Username</span>
						<input autocomplete="off" class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter Your Password">
						<span class="label-input100">Password</span>
						<input autocomplete="off" class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf191;"></span>
					</div>
					<div class="text-right p-t-8 p-b-31">
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" id="btn 2" name="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
		<script>
				$(document).ready(function() {


				var url = sessionStorage.getItem("url");

				$(document).ready(function() { 
               
               $("#f1").on("submit",function(event)  { 
            
                str= decodeURIComponent($('#f1').serialize());
				   
					 $("#btnMain").prop("disabled", true);
					  
					  $("#btnMain").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loggin in...');	
				
               event.preventDefault(); 
			   
			   console.log (url + 'donatenow.php') ; 
			   
			   console.log(str ) ;
                 $.ajax({url: url + 'donatenow.php', data: str, type: 'post', dataType: 'json',
                  success: function(Arr) {
                        
                           console.log(Arr);

                           if (Arr.result == "success") 
                           {
								window.location.href= "../Admin/donatenow.php" ; 

								if  (Arr.info.Verified == 0 )
								{
									alert("Your Account is not Activated Yet!");
								}
								else
								{									 
								window.location.href= "../Admin/donatenow.php" ; 
									}
								}
                           else
                           {
						
					  $("#btnMain").prop("disabled", false);
					  
					  $("#btnMain").html('Admin');	
				
                              alert("Invalid Email or Password")
                           }                          
                     },
                  error: function(E) {
					  $("#btnMain").prop("disabled", false);
					  $("#btnMain").html('Admin');	
					  alert(E.status + E.statusText)
				  }
                 });
                 
         return false;
          })
})		  
         });
		 
		 </script>

          <div id="dropDownSelect1"></div>


          <li>
            <a href="Appointment.php">
              <i class="fa fa-group"></i> <span>Appointments</span>

            </a>
          </li>

          <li>
            <a href="../Admin/donatenow.php">
              <i class="fa fa-group"></i> <span>Donate Now</span>

            </a>
          </li>

        </ul>
      </section>

    </aside>


    <div class="content-wrapper">

      <section class="content-header">
        <h1>
          Blood Bank

        </h1>

      </section>

      <section class="content">
        <div class="box box-primary">
          <div id="calendar">
            <object id="cal" data="branchCalendarList/bankdam.php"></object>

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

  <script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="../vendor/animsition/js/animsition.min.js"></script>
  <script src="../vendor/bootstrap/js/popper.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../vendor/select2/select2.min.js"></script>
  <script src="../vendor/daterangepicker/moment.min.js"></script>
  <script src="../vendor/daterangepicker/daterangepicker.js"></script>
  <script src="../vendor/countdowntime/countdowntime.js"></script>
  <script src="./js/main.js"></script>

</body>

</html>