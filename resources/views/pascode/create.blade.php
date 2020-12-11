@extends('layouts.dashboard')
@section('title', 'Tambah Kode Pemilihan')
@section('content')
    <div class="container">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Tambah Kode Pemilihan</div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('pascode.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="pascode" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jumlah Pascode</label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="number" class="form-control" id="pascode" name="pascode">
                                    @if ($errors->has('pascode'))
                                        <span class="text-danger">{{$errors->first('pascode')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="btn btn-success" type="submit" value="Buat">
                                    <a href="{{ route('pascode.index') }}" class="btn btn-danger">Kembali</a>
                                </div>										
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- Summernote -->
    <script src="{{ asset('assets/js/plugin/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $('#visi_misi').summernote({
			placeholder: 'Isi Visi & Misi Calon',
			fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
			tabsize: 2,
			height: 300
		});
    </script>
@endsection