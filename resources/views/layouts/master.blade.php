<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>IT- MIS</title>

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
	<link rel="stylesheet" type="text/css" href="{{asset('master/vendors/styles/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master/src/plugins/switchery/switchery.min.css')}}">

	<!-- bootstrap-tagsinput css -->
	<link rel="stylesheet" type="text/css" href="{{asset('master/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="{{asset('master//plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('master//styles/style.css')}}">



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
	<div class="pre-loader">
		<div class="pre-loader-box">
		
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>


			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						@if(Auth::user()->unreadNotifications->count()>0)
						<span class="badge notification-active"></span>
						
							
						@endif
						
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>

							<li><a href="{{route('markAsRead')}}">Mark all as Read</a></li>
								@foreach (Auth::user()->unreadNotifications as $notification)
								<li class="bg-light">

								@if($notification->type="App\Notifications\DocumentFoundNotification")
								<a href="{{route('lost_documents.show',$notification->data['lost_document'])}}">
										
									<h3>Found document</h3>
									<p>Document with {{$notification->data['document_number']}} has found.</p>
								</a>
								@endif
							
									
								</li>
								@endforeach



								@foreach (Auth::user()->readNotifications as $notification)
								<li>

								@if($notification->type="App\Notifications\DocumentFoundNotification")
								<a href="{{route('lost_documents.show',$notification->data['lost_document'])}}">
										
									<h3>Found document</h3>
									<p>Document with {{$notification->data['document_number']}} has found.</p>
								</a>
								@endif
							
									
								</li>
								@endforeach
								
							
								
								
							
							
							</ul>
						</div>
					</div>
				</div>
			</div>



			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="">
						</span>
					<span class="user-name">{{ Auth::user()->name}}</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="{{route('profiles.edit',Auth::user()->id)}}"><i class="dw dw-user1"></i> Profile</a>
					<!--	<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a> -->
						
						<a class="dropdown-item" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						   <i class="dw dw-logout"></i> Log Out</a>
						   
						   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

    @yield('menu')
    

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">


			<div class="row">
				<div class="col-md-6 col-sm-12">
					@yield('path')
				</div>
			</div>	
			
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

                    @yield('content')
    

				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				All right reserved to MIS.
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('master/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('master/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('master/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('master/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('master/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('master/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('master/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('master/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<!-- buttons for Export datatable -->
	<script src="{{asset('master/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('master/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('master/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('master/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('master/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
	<script src="{{asset('master/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
	<script src="{{asset('master/src/plugins/datatables/js/vfs_fonts.js')}}"></script>
	<!-- Datatable Setting js -->
	<script src="{{asset('master/vendors/scripts/datatable-setting.js')}}"></script>

	<script src="{{asset('master/src/plugins/switchery/switchery.min.js')}}"></script>
	<!-- bootstrap-tagsinput js -->
	<script src="{{asset('master/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>
	<!-- bootstrap-touchspin js -->
	<script src="{{asset('master//plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
	<script src="{{asset('master/vendors/scripts/advanced-components.js')}}"></script>
</body>
</html>