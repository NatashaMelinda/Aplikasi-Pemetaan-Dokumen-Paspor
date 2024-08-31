<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/imigrasi_logo.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Poppins:800"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	
	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/azzara.min.css">
</head>
<body class="login" style="background-color: #0D014D">
	<div class="wrapper wrapper-login" >
		<div class="container container-login animated fadeIn" >
			@if (session('status'))
   		 		<div class="alert alert-danger">
        		{{ session('message') }}
    			</div>
			@endif
			<div class="logo_login">
				<div class="text-center " >
					<img src="assets/img/logoim.png" alt="image profile" class="navbar-brand" style="width: 50%;" />
					
				</div>
				<div class="text-center mt-3" >
					<h3 style="font-variant: ">APLIKASI PEMETAAN DOKUMEN PASPOR</h3>
				</div>
			</div>
			
			<form action="{{ route('login') }}" method="post" >
				@if ($errors->any())
						@foreach ($errors->all() as $error)
							{{ $error }}
						@endforeach
					@endif
				@csrf
				<div>
					<label for="username" class="form-label">Username</label>
					<input id="username" name="username" type="text" class="form-control" required>
				</div>
                <div>
					<label for="password" class="form-label">Password</label>
					<input id="password" name="password" type="password" class="form-control" required>
                </div>
				<br>
				<div>
					<button type="submit" class="btn btn-primary form-control">Login</button>
				</div>
				<div class="login-account">
					<span class="msg">Don't have an account yet ?</span>
					<a href="register" id="show-signup" class="link">Sign Up</a>
				</div>
			</form>
		</div>
	</div>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/ready.js"></script>
</body>
</html>