<!DOCTYPE html>
<html lang="en">
<head>
	<title>
        Admin Login
    </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login_admin/vendor/bootstrap/css/bootstrap.min.css">
<!--=============================================/login_admin/==================================================-->
	<link rel="stylesheet" type="text/css" href="/login_admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--=============================================/login_admin/==================================================-->
	<link rel="stylesheet" type="text/css" href="/login_admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--=============================================/login_admin/==================================================-->
	<link rel="stylesheet" type="text/css" href="/login_admin/vendor/animate/animate.css">
<!--=============================================/login_admin/==================================================-->	
	<link rel="stylesheet" type="text/css" href="/login_admin/vendor/css-hamburgers/hamburgers.min.css">
<!--=============================================/login_admin/==================================================-->
	<link rel="stylesheet" type="text/css" href="/login_admin/vendor/animsition/css/animsition.min.css">
<!--=============================================/login_admin/==================================================-->
	<link rel="stylesheet" type="text/css" href="/login_admin/vendor/select2/select2.min.css">
<!--=============================================/login_admin/==================================================-->	
	<link rel="stylesheet" type="text/css" href="/login_admin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login_admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="/login_admin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form action="{{route('admin.luu_dangnhap')}}" method="post" class="login100-form">
                    @csrf
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="/login_admin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/login_admin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/login_admin/vendor/bootstrap/js/popper.js"></script>
	<script src="/login_admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/login_admin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/login_admin/vendor/daterangepicker/moment.min.js"></script>
	<script src="/login_admin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/login_admin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/login_admin/js/main.js"></script>

</body>
</html>