<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>System is Signed Off</title>
	<!-- Favicon-->
	<link rel="icon" href="../../assets1/images/favicon.ico" type="image/x-icon">
	<!-- Plugins Core Css -->
	<link href="../../assets1/css/app.min.css" rel="stylesheet">
	<!-- Custom Css -->
	<link href="../../assets1/css/style.css" rel="stylesheet" />
	<link href="../../assets1/css/pages/authentication.css" rel="stylesheet" />
</head>
<body class="login-page">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('login')}}">
					@csrf
					<span class="login100-form-title p-b-45">
						Sign in 
					</span>


					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
						
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-15 p-b-20">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" value=""> Remember me
								<span class="form-check-sign">
									<span class="check"></span>
								</span>
							</label>
					
					</div>
					</div>
				

				<div class="text-danger">
						{{session('failed')}}
						</div>


					<div class="container-login100-form-btn">
						<button type=submit class="login100-form-btn">
							Login
						</button>
					</div>
				
				

					<div class="text-center p-t-45 p-b-20">
					</div>	<div>
		              <a href="#" class="txt1">
						Forgot Password?
						</a>
				</div>

				</form>

				<div class="login100-more" style="background-image: url('../../assets1/images/pages/bg-01.png');">
				</div>
				
	    	</div>
			</div>
			
	</div>
	<!-- Plugins Js -->
	<script src="../../assets1/js/app.min.js"></script>
	<script src="../../assets1/js/pages/examples/pages.js"></script>
</body>
</html>