@extends('layouts.dashboard')
@section('title', 'Tambah Calon')
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
                        <div class="card-title">Tambah Calon</div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('capil.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="nomor_urut" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor Urut <span class="required-label">(opsional)</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="nomor_urut" name="nomor_urut" placeholder="Nomor Urut Calon" value="{{ old('nomor_urut') }}">
                                    @if ($errors->has('nomor_urut'))
                                        <span class="text-danger">{{$errors->first('nomor_urut')}}</span>
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="form-group form-show-validation row">
                                <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Foto Calon <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <div class="input-file input-file-image">
                                        <img class="img-upload-preview img-rounded" width="250" height="250" src="{{ asset('assets/img/no-avatar.png') }}" alt="preview">
                                        <input type="file" class="form-control form-control-file" id="uploadImg" name="foto" accept="image/*" required >
                                        <label for="uploadImg" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload Foto Calon</label>
                                        @if ($errors->has('foto'))
                                            <span class="text-danger">{{$errors->first('foto')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="name" name="name" >
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group form-show-validation row">
                                <label for="email" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Distrik Asal <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <input type="text" class="form-control" id="email" name="kontak" >
                                    @if ($errors->has('kontak'))
                                        <span class="text-danger">{{$errors->first('kontak')}}</span>
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="form-group form-show-validation row">
                                <label for="alamat" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Alamat <span class="required-label">*</span></label>
                                <div class="col-lg-4 col-md-9 col-sm-8">
                                    <textarea class="form-control" id="alamat" rows="5" name="alamat">
                                    </textarea>
                                    @if ($errors->has('alamat'))
                                        <span class="text-danger">{{$errors->first('alamat')}}</span>
                                    @endif
                                </div>
                            </div> --}}
                            {{-- <div class="form-group form-show-validation row">
                                <label for="visi_misi" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Visi & Misi <span class="required-label">(opsional)</span></label>
                                <div class="col-lg-8 col-md-9 col-sm-8">
                                    <div class="card-body">
                                        <div id="visi_misi"></div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="card-action">
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="btn btn-success" type="submit" value="Simpan">
                                    <a href="{{ route('capil.index') }}" class="btn btn-danger">Kembali</a>
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