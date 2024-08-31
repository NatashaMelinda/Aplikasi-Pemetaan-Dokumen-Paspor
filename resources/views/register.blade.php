<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['../assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/azzara.min.css">
</head>
<body class="login" style="background-color: #0D014D" >
    <div class="wrapper wrapper-login">
		<div class="container container-login animated fadeIn">
			<h3 class="text-center">Sign Up</h3>
			<form action="" method="post">
				@csrf
				<div>
					<label for="name" class="form-label">Full Name</label>
					<input id="name" name="name" type="name" class="form-control" required>
                </div>
					<div>
						<label for="username" class="form-label">Username</label>
						<input id="username" name="username" type="text" class="form-control" required>
					</div>
					<div>
						<label for="password" class="form-label">Password</label>
						<input id="password" name="password" type="password" class="form-control" required>
					</div>
					<div>
						<label for="address" class="form-label">Address</label>
						<textarea id="address" name="address" type="address" class="form-control" required></textarea>
					</div>
					<div>
						<label for="telp" class="form-label">No Telp</label>
						<input id="telp" name="telp" type="passtelpword" class="form-control" required>
					</div>
				<div class="row form-sub m-0">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="agree" id="agree">
						<label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
					</div>
				</div>
				<div class="login-account">
					<span class="msg">Have Account?</span>
					<a href="login" id="show-signup" class="link">Login</a>
				</div>
				<div class="form-action">
					<a href="login" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a>
					<button href="registerProcess" class="btn btn-primary btn-rounded btn-login">Sign Up</button>
				</div>
		</div>
    </div>
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<script src="../assets/js/ready.js"></script>
</body>
</html>