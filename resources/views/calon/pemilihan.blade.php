<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>PEMILIHAN</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{asset("assets/css/fonts.min.css") }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/atlantis2.css') }}">
</head>
<body>
	<div class="wrapper">
		
		<div class="main-header" data-background-color="purple">
			<div class="nav-top">
				<div class="container d-flex flex-row">
					<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon">
							<i class="icon-menu"></i>
						</span>
					</button>
					<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
					<!-- Logo Header -->
					<a href="index.html" class="logo d-flex align-items-center">
						
					</a>
					<!-- End Logo Header -->

					<!-- Navbar Header -->
					<nav class="navbar navbar-header navbar-expand-lg p-0">
					</nav>
					<!-- End Navbar -->
				</div>
			</div>
			
		</div>

		<div class="main-panel">
			<div class="container">
				<div class="page-inner">
					<div class="row">
						<div class="col-6 col-sm-4 col-lg-2">
							<div class="card">
								<div class="card-body p-3 text-center">
									<div class="h1 m-0">0</div>
									<div class="text-muted mb-3">Calon Dipilih</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Pilih Calon Anda ( Maksimal 32 Orang)</div>
										<div class="card-tools">
											<button type="submit" class="btn btn-info btn-border btn-round">
												<span class="btn-label">
													<i class="fas fa-check-circle"></i>
												</span>
												Selesai
											</button>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="chart-container" style="min-height: 375px">
										<table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                            <th class="th-sm">Nomor
                                            </th>
                                            <th class="th-sm">Nama
                                            </th>
                                            <th>Pilih</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($calon as $data)
                                            <tr>
                                                <td><a href="">{{ $data->nomor_urut }}</a></td>
                                                <td><a href="">{{ $data->name }}</a></td>
                                               <td><input width="50" type="checkbox" name="chkbox[]" value="{{ $data->id }}"></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        </table>
									</div>
									<div id="myChartLegend"></div>
								</div>
							</div>
							</form>
						</div>
						
					</div>
					
					
					
				</div>
			</div>
		</div>
		
		
	</div>
	<!--   Core JS Files   -->
	<script src="{{asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{asset('assets/js/core/popper.min.js') }}"></script>
	<script src="{{asset('assets/js/core/bootstrap.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

	<!-- Moment JS -->
	<script src="{{asset('assets/js/plugin/moment/moment.min.js') }}"></script>

	<!-- Chart JS -->
	<script src="{{asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

	<!-- Chart Circle -->
	<script src="{{asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

	<!-- Datatables -->
	<script src="{{asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	<!-- Bootstrap Toggle -->
	<script src="{{asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{asset('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

	<!-- Google Maps Plugin -->
	<script src="{{asset('assets/js/plugin/gmaps/gmaps.js') }}"></script>

	<!-- Dropzone -->
	<script src="{{asset('assets/js/plugin/dropzone/dropzone.min.js') }}"></script>

	<!-- Fullcalendar -->
	<script src="{{asset('assets/js/plugin/fullcalendar/fullcalendar.min.js') }}"></script>

	<!-- DateTimePicker -->
	<script src="{{asset('assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js') }}"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="{{asset('assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>

	<!-- Bootstrap Wizard -->
	<script src="{{asset('assets/js/plugin/bootstrap-wizard/bootstrapwizard.js') }}"></script>

	<!-- jQuery Validation -->
	<script src="{{asset('assets/js/plugin/jquery.validate/jquery.validate.min.js') }}"></script>

	<!-- Summernote -->
	<script src="{{asset('assets/js/plugin/summernote/summernote-bs4.min.js') }}"></script>

	<!-- Select2 -->
	<script src="{{asset('assets/js/plugin/select2/select2.full.min.js') }}"></script>

	<!-- Sweet Alert -->
	<script src="{{asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

	<!-- Atlantis JS -->
	<script src="{{asset('assets/js/atlantis2.min.js') }}"></script>
</body>
</html>