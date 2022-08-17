<?php
// Set sessions
if (!isset($_SESSION)) {
	session_start();
}
if (!isset($_SESSION['loggedin']) || ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'employee')) {
	header('Location: ../Login/index.php');
	die();
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Donate Now</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin </title>
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

	<link rel="stylesheet" href="./css/bootstrap.css" />

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<link rel="stylesheet" href="./css/jquery-datatable/dataTables.bootstrap4.min.css">



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

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<style>
		#txt {
			border-radius: 6px;
		}

		#th {
			background-color: black;
			color: white;
			border-radius: 2px;
			span: 20%;
		}

		#m {
			border-spacing: 10px;
		}

		#mtbl {
			border-spacing: 3px;
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
			display: block;
			width: 50%;
			height: 520px;
			background: #fff;
			border-radius: 10px;
			border: 3px solid black;
		}

		#x {
			color: white;
			/* background-color: black; */
			font-size: 30px;
			padding: 15px;
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

		#btn1 {
			background-color: white;
			border-color: white;
		}

		#div {
			margin: 3%;
		}

		#btn1 {
			background-color: white;
			border-color: white;
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
			<a href="../Admin/appointment.php" class="logo">

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
									<form action="../server/login.php" method="POST" class="login100-form validate-form">
										<span class="login100-form-title p-b-49" id="btn">
											Administrator Login
										</span>
										<div class="wrap-input100 validate-input m-b-23" data-validate="Enter Your Username">
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
					<div id="dropDownSelect1"></div>
					<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
					<script src="../vendor/animsition/js/animsition.min.js"></script>
					<script src="../vendor/bootstrap/js/popper.js"></script>
					<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
					<script src="../vendor/select2/select2.min.js"></script>
					<script src="../vendor/daterangepicker/moment.min.js"></script>
					<script src="../vendor/daterangepicker/daterangepicker.js"></script>
					<script src="../vendor/countdowntime/countdowntime.js"></script>
					<script src="./js/main.js"></script>
					<li>
						<a href="../Admin/Appointment.php">
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
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">

			<section class="content-header">
				<h1>
					Donate Now

				</h1>

			</section>
			<section class="content">
				<div class="box box-primary">
					<div class="container clearfix">

						<div class="row">
							<div class="col-md-1 col-sm-12"></div>
							<div class="col-md-20 col-sm-12" style="overflow: auto;">
								<div class="form-outline mb-4">
									<form class="example" action="/action_page.php">
										<div id="div">
											<table class="table table-hover js-basic-example dataTable table-custom" id="mtbl">
												<thead class="thead-dark">
													<tr>
														<th id="th">ID</th>
														<th id="th">F. Name</th>
														<th id="th">Father N.</th>
														<th id="th">Mother N.</th>
														<th id="th">BOD</th>
														<th id="th">Birth place</th>
														<th id="th">National Number</th>
														<th id="th">Residence N. </th>
														<th id="th">Phone </th>
														<th id="th">City</th>
														<th id="th">Country</th>
														<th id="th">Comment</th>
													</tr>
												</thead>
												<tbody id="tbl">
										</div>
								</div>
							</div>
						</div>
			</section>
		</div>
		<?php
		$connect = mysqli_connect("localhost:3308", "root", "", "donation");

		$query = "SELECT * FROM donatenow ORDER BY id ASC";
		$result = mysqli_query($connect, $query);
		while ($row = mysqli_fetch_array($result)) {
			echo '  
                          <tr>
						  <th scope="row">' . $row['id'] . '</th>
						  <th scope="row">' . $row['fullname'] . '</th> 
						  <th scope="row">' . $row['fathername'] . '</th> 
						  <th scope="row">' . $row['mothername'] . '</th> 
                          <th scope="row">' . $row['bod'] . '</th> 
						  <th scope="row">' . $row['Birthplace'] . '</th> 
						  <th scope="row">' . $row['nationalNumber'] . '</th> 
						  <th scope="row">' . $row['residencenumber'] . '</th> 
						  <th scope="row">' . $row['phone'] . '</th> 
						  <th scope="row">' . $row['city'] . '</th> 
						  <th scope="row">' . $row['country'] . '</th> 
						  <th scope="row">' . $row['comment'] . '</th>
						 
                          </tr>  ';
		}
		?>
		</tbody>
		</table>
		</form>
	</div>
	</div>
	</div>
	<div class="control-sidebar-bg"></div>
	</div>
	<script src="./js/datatablescripts.bundle.js"></script>
	<script src="./js/tables/jquery-datatable.js"></script>
	<script src="../dist/js/adminlte.min.js"></script>
	<script src="../dist/js/pages/dashboard.js"></script>
	<script src="../dist/js/demo.js"></script>
</body>

</html>