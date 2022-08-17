<!DOCTYPE html>
<html>
<head>
<style>
#btn{ color:black;
	  font-weight:bold;
	  font-family:textarea;
	  letter-spacing:2px;
}

</style>

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
<link type="text/css" rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script type="text/javascript">
        $(function () {
            $('#btnclick').click(function () {
                $("#popupdiv").dialog({
                    width: 550,
                    height: 540,
                    modal: true,
                    buttons: {
                        
                    }
                });
            });
        })
    </script>

</head>
<body>
 <div>
        <div id="popupdiv" title="Administrator Login" style="display: none">
            <div class="limiter">

<div class="wrap-login100">
<form action="../server/login.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-49" id="btn">
						Login
					</span>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
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
        <table align="center" style="margin-top: 200px">
            <tr>
                <td>
                    <input type="button" id="btnclick" value="Show Modal Popup" />
                </td>
            </tr>
        </table>
		
    </div>
	</body>
	</html>