<!DOCTYPE html>
<html>

<head>
	<style>
		#btn {
			color: black;
			font-weight: bold;
			font-family: textarea;
			letter-spacing: 2px;
		}
	</style>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="../server/login.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-49" id="btn">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
						<span class="label-input100">Username</span>
						<input autocomplete="off" class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input autocomplete="off" class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf191;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" id="btn" name="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- <script>
		$(document).ready(function() {


			var url = sessionStorage.getItem("url");

			$(document).ready(function() {

				$("#f1").on("submit", function(event) {

					str = decodeURIComponent($('#f1').serialize());

					$("#btnMain").prop("disabled", true);

					$("#btnMain").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loggin in...');
					event.preventDefault();
					$.ajax({
						url: url + 'login.php',
						data: str,
						type: 'post',
						dataType: 'json',
						success: function(Arr) {
							console.log(Arr);
							if (Arr.result == "success") {
								if (Arr.info.Verified == 0) {
									alert("Your Account is not Activated Yet!");
								} else {
									if ($_SESSION['role'] === 'admin') {
										window.location.href = "../Admin/index.php";
									} else if ($_SESSION['role'] === 'hospital') {
										window.location.href = "../hospital/index.php";
									} else if ($_SESSION['role'] === 'lab') {
										window.location.href = "../Admin/laboratory.php";
									}

								}
							} else {

								$("#btnMain").prop("disabled", false);

								$("#btnMain").html('Login');

								alert("Invalid Email or Password")
							}
						},
						error: function(E) {
							$("#btnMain").prop("disabled", false);
							$("#btnMain").html('Login');
							alert(E.status + E.statusText)
						}
					});

					return false;
				})
			})
		});
	</script> -->


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

</body>

</html>