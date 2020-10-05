<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Lost document app</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->

    

    <link rel="stylesheet" type="text/css" href="{{asset('master/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master/src/plugins/jquery-steps/jquery.steps.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master/vendors/styles/style.css')}}">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">

				<div class="login-menu">
					<ul>
						<li><a href="register.html">LostDocApp</a></li>
					</ul>
				</div>
			</div>
			<div style="margin-left:1000px" class="login-menu">
				<ul>
					<li><a href="{{route('login')}}">Login</a></li>
					
			
				</ul>
				
				

				
			</div>

			<div class="login-menu">
				<ul>
					
					<li><a class="btn btn-outline-primary" href="{{route('register')}}}">Register</a></li>
			
				</ul>
				
				

				
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<marquee width = "100%">Report found or lost document here.....</marquee>
					<img src="{{asset('master/vendors/images/login-page-img.png')}}" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login To LostDocApp</h2>
						</div>
                        <form method="POST" action="{{ route('login') }}">
							@csrf
							<div class="input-group custom">
                                <input id="email" type="email"  class="form-control form-control-lg @error('email') is-invalid @enderror"   placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                <div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror

								
							</div>
							<div class="input-group custom">
								<input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="**********"   name="password" required autocomplete="current-password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                                

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
							</div>
							<div class="row pb-30">
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Remember</label>
									</div>
								</div>
								<div class="col-6">
									<div class="forgot-password"><a href="{{ route('password.request') }}">Forgot Password</a></div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
                                     
                                        
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Sign In
                                        </button>
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
									<div class="input-group mb-0">
									<a class="btn btn-outline-primary btn-lg btn-block" href="{{route('register')}}">Register To Create Account</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
    <script src="{{asset('master/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('master/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('master/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('master/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('master/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
	<script src="{{asset('master/vendors/scripts/steps-setting.js')}}"></script>
</body>
</html>