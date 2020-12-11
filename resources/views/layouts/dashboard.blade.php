<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ url('public/assets/img/icon.ico') }}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{url('public/assets/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ url("public/assets/css/fonts.min.css") }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/assets/css/atlantis.css') }}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="{{ route('home') }}" class="logo">
					<i class="fas fa-store" style="color: white">  Aplikasi Pemilihan</i>
					{{-- <img src="{{asset('assets/img/logo.svg') }}" alt="navbar brand" class="navbar-brand"> --}}
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
							</ul>
						</li>
						
					</ul>
				</div>
				@auth
				<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
					<li class="nav-item">
						<a href="#" class="nav-link quick-sidebar-toggler" data-toggle="modal" data-target="#logoutModal">
							<i class="fas fa-sign-out-alt"> Keluar</i>
						</a>
					</li>
				</ul>
				@endauth
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					@auth
					<ul class="nav nav-primary">
						<li class="nav-item {{ (request()->is('home')) ? 'active' : ''}}">
							<a  href="{{ route('home') }}" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item {{ (request()->is('calon*')) ? 'active' : ''}}">
							<a  href="{{ route('capil.index') }}" class="collapsed" aria-expanded="false">
								<i class="fas fa-user-tie"></i>
								<p>Calon Kandidat</p>
							</a>
						</li>
						<li class="nav-item {{ (request()->is('pascode*')) ? 'active' : ''}}">
							<a  href="{{ route('pascode.index') }}" class="collapsed" aria-expanded="false">
								<i class="fas fa-tag"></i>
								<p>Pascode</p>
							</a>
						</li>
						<li class="nav-item {{ (request()->is('admin*')) ? 'active' : ''}}">
							<a  href="{{ route('admin.index') }}" class="collapsed" aria-expanded="false">
								<i class="fas fa-address-book"></i>
								<p>Daftar Admin</p>
							</a>
						</li>
					</ul>					
					@endauth
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">

            @yield('content')
            
			<footer class="footer">
				<div class="container-fluid">
					<div class="copyright ml-auto">
						{{ date('Y') }}, made with <i class="fa fa-heart heart text-danger"></i>
					</div>				
				</div>
			</footer>
		</div>
	</div>
	{{-- Logout Modal --}}
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Anda yakin keluar Aplikasi ?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Silahkan klik Keluar untuk menyelesaikan sesi Anda.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					<form method="POST" action="{{route('logout')}}">
						@csrf
						<button type="submit" class="d-none" id='logout'></button>
						<a class="btn btn-primary" href="#" onclick="$('#logout').click()">Keluar</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="{{ url('public/assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ url('public/assets/js/core/popper.min.js') }}"></script>
	<script src="{{ url('public/assets/js/core/bootstrap.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{ url('public/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ url('public/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{ url('public/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

	<!-- Moment JS -->
	<script src="{{ url('public/assets/js/plugin/moment/moment.min.js') }}"></script>

	<!-- Chart JS -->
	<script src="{{ url('public/assets/js/plugin/chart.js/chart.min.js') }}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{ url('public/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

	<!-- Chart Circle -->
	<script src="{{ url('public/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

	<!-- Datatables -->
	<script src="{{ url('public/assets/js/plugin/datatables/datatables.min.js') }}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{ url('public/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	<!-- Bootstrap Toggle -->
	<script src="{{ url('public/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{ url('public/assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ url('public/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

	<!-- Google Maps Plugin -->
	<script src="{{ url('public/assets/js/plugin/gmaps/gmaps.js') }}"></script>

	<!-- Dropzone -->
	<script src="{{url('public/assets/js/plugin/dropzone/dropzone.min.js') }}"></script>

	<!-- Fullcalendar -->
	<script src="{{url('public/assets/js/plugin/fullcalendar/fullcalendar.min.js') }}"></script>

	<!-- DateTimePicker -->
	<script src="{{url('public/assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js') }}"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="{{url('public/assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

	<!-- Bootstrap Wizard -->
	<script src="{{url('public/assets/js/plugin/bootstrap-wizard/bootstrapwizard.js') }}"></script>

	<!-- jQuery Validation -->
	<script src="{{url('public/assets/js/plugin/jquery.validate/jquery.validate.min.js') }}"></script>

	<!-- Summernote -->
	<script src="{{url('public/assets/js/plugin/summernote/summernote-bs4.min.js') }}"></script>

	<!-- Select2 -->
	<script src="{{url('public/assets/js/plugin/select2/select2.full.min.js') }}"></script>

	<!-- Sweet Alert -->
	<script src="{{url('public/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

	<!-- Owl Carousel -->
	<script src="{{url('public/assets/js/plugin/owl-carousel/owl.carousel.min.js') }}"></script>

	<!-- Magnific Popup -->
	<script src="{{url('public/assets/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js') }}"></script>

	<!-- Atlantis JS -->
    <script src="{{url('public/assets/js/atlantis.min.js') }}"></script>
    @yield('script')
</body>
</html>