<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>SISTEM VOTE</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/atlantis2.css">
</head>
<body>
	<div class="wrapper">
		
		<div class="main-header" data-background-color="purple">
			<div class="nav-top">
			</div>
		</div>
		<div class="main-panel">
			<div class="container">
                <img src="{{ url('public/calon/foto/HKBP.png') }}" alt="">
				<div class="page-inner">
					{{-- <h2>SELAMAT DATANG PEMILIH PRAESES SINODE GODANG HKBP KE-65</h2> --}}
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Silahkan isi Kode Pemilih Anda</div>
									</div>
                                </div>
                                <form action="{{ route('validasi.index') }}" method="post">
									@csrf
                                    <div class="card-body">
										{{-- <div class="form-group">
                                            <label for="email1">Kode Pemilihan Anda : {{ rand(10000,99999) }}</label>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="email2">Kode</label>
                                            <input type="number" class="form-control" id="email2" name="kode" value="{{ old('kode') }}">
                                            @if ($errors->has('kode'))
                                                <span class="text-danger">{{$errors->first('kode')}}</span>
                                            @endif
                                        </div>
                                        <br>
                                        <div class="pull-right">
                                            <input type="submit" class="btn btn-next btn-success" name="next" value="LANJUTKAN">
                                        </div>
                                    </div>
                                </form>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!--   Core JS Files   -->
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="../assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="../assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="../assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="../assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Dropzone -->
	<script src="../assets/js/plugin/dropzone/dropzone.min.js"></script>

	<!-- Fullcalendar -->
	<script src="../assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

	<!-- DateTimePicker -->
	<script src="../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput -->
	<script src="../assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

	<!-- Bootstrap Wizard -->
	<script src="../assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

	<!-- jQuery Validation -->
	<script src="../assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

	<!-- Summernote -->
	<script src="../assets/js/plugin/summernote/summernote-bs4.min.js"></script>

	<!-- Select2 -->
	<script src="../assets/js/plugin/select2/select2.full.min.js"></script>

	<!-- Sweet Alert -->
	<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="../assets/js/atlantis2.min.js"></script>

</body>
</html>