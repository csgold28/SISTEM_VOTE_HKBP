@extends('layouts.dashboard')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="container">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Selamat Datang, {{ auth()->user()->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-user-2 text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Jumlah Calon</p>
                                        <h4 class="card-title">@format_angka($calon)</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-price-tag text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Jumlah Kode </p>
                                        <h4 class="card-title">@format_angka(1100)</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-price-tag text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Kode Terpakai</p>
                                        <h4 class="card-title">@format_angka($pascode_terpakai)</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="flaticon-users text-primary"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers">
                                        <p class="card-category">Jumlah Pemilih</p>
                                        <h4 class="card-title">@format_angka($jml_pemilih)</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Hasil Pemilihan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    {{-- <th>Foto</th> --}}
                                    <th>Nama</th>
                                    <th>Jumlah Pemilih</th>
                                    {{-- <th>Persentase</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($row_monitoring as $data)
                                <tr>
                                    <td>{{ $data->nomor_urut }}</td>
                                    {{-- <td><img src="{{ url('calon/foto/'.$data->calon->foto) }}" alt="" height="100"></td> --}}
                                    <td>{{ $data->name }}</td>
                                    <td>@format_angka($data->jumlah_pemilih)</td>
                                    {{-- @if ($data->jumlah_pemilih == 0)
										<td>0 %</td>
									@else
                                    	<td>@format_persen(($data->jumlah_pemilih/$jml_pemilih) *100) %</td>
									@endif --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
@endsection