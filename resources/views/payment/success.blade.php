<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('master/vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master/vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master/vendors/styles/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master/src/plugins/switchery/switchery.min.css')}}">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="error-page d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="pd-10">
			<div class="error-page-wrap text-center">
                
                <div class="alert alert-success"><h3><img style="with:40px;height:30px" src="{{asset('master/vendors/images/success.png')}}" alt="modal">  You have paid successfully.</h3></div>

			
				
				<div class="pt-20 mx-auto max-width-200">
                <a href="{{route('home')}}" class="btn btn-primary btn-block btn-lg">Back To Home</a>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('master/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('master/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('master/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('master/vendors/scripts/layout-settings.js')}}"></script>

</body>
</html>