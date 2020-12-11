@extends('layouts.dashboard')
@section('title', 'Kode Pemilih')
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
                        <div class="card-title">Kode Pemilih</div>
                        <div class="card-tools">
                            <a href="{{ route('pascode.store') }}" class="btn btn-info btn-border btn-round">
                                <span class="btn-label">
                                    <i class="fas fa-plus-circle"></i>
                                </span>
                                Tambah Kode Pemilih
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="basic-datatables" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    {{-- <th>No</th> --}}
                                    <th>Kode</th>
                                    <th>Status</th>
                                    {{-- <th>Admin</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pascode as $data)
                                <tr>
                                    {{-- <td>{{ $data->id }}</td> --}}
                                    <td>{{ $data->pascode }}</td>
                                    @if ($data->status == 1)
                                        <td>Belum Terpakai</td>
                                    @else
                                        <td>Sudah Dipakai</td>
                                    @endif
                                    {{-- <td>{{ $data->user->name }}</td> --}}
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