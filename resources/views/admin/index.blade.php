@extends('layouts.dashboard')
@section('title', 'Data Admin')
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
                        <div class="card-title">Data Admin</div>
                        <div class="card-tools">
                            <a href="{{ route('capil.create') }}" class="btn btn-info btn-border btn-round">
                                <span class="btn-label">
                                    <i class="fas fa-plus-circle"></i>
                                </span>
                                Tambah Admin
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($calon as $data)
                                <tr>
                                    <td>{{ $data->nomor_urut }}</td>
                                    <td><img src="{{ url('calon/foto/'.$data->foto) }}" alt="" height="100"></td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->kontak }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>
                                       <div class="form-button-action">
                                            <a href="" type="button" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="" method="post">
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
                                                    <i class="fa fa-times"></i>
                                                    </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection