<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="assets/Login_v4/images/icons/favicon.ico" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.1.3/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="assets/Login_v4/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/Login_v4/css/main.css">
	<link href='../images/logo.png' rel='SHORTCUT ICON' />
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/Login_v4/images/bg2.png');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="process/cekLogin.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Ketik username...">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Ketik password...">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<br>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-30">
						<a href="pages/register/index.php" class="txt2">
							REGISTER
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<a href="../index.php" class="txt2">
							BACK TO HOME
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<script src="assets/Login_v4/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/Login_v4/vendor/animsition/js/animsition.min.js"></script>
	<script src="assets/Login_v4/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/Login_v4/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/Login_v4/vendor/select2/select2.min.js"></script>
	<script src="assets/Login_v4/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/Login_v4/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="assets/Login_v4/vendor/countdowntime/countdowntime.js"></script>
	<script src="assets/Login_v4/js/main.js"></script>

</body>

</html>
