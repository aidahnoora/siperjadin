@extends('layouts.home')

@section('title', 'Pegawai')

@section('css')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
@endsection

@section('breadcrumbs')
<h1>Pegawai</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Pegawai</a></div>
	<div class="breadcrumb-item active"><a href="#">Data</a></div>
	{{-- <div class="breadcrumb-item">Tes</div> --}}
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Data Pegawai</h4>
                <div class="card-header-action">
                    <a href="/pegawai/tambah" class="btn btn-success">Tambah</a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table id="pegawai" class="table table-bordered">
                    <caption>List of Pegawai</caption>
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Pangkat</th>
                            <th scope="col">Jabatan / Intansi</th>
                            <th scope="col">UH</th>
                            <th scope="col">UM</th>
                            <th scope="col">UT</th>
                            <th>Tingkat Biaya</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawais as $item)
                        <tr>
                            <th scope="row" style="text-align: center">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama_pegawai }}</td>
                            <td>{{ $item->nip }}</td>
                            <td>{{ $item->pangkat->golru }}, ({{ $item->pangkat->nama_pangkat }})</td>
                            <td>{{ $item->jabatan->nama_jabatan }} / {{ $item->instansi->nama_instansi }}</td>
                            <td style="text-align: right">{{ $item->uh }}</td>
                            <td style="text-align: right">{{ $item->um }}</td>
                            <td style="text-align: right">{{ $item->ut }}</td>
                            <td style="text-align: right">{{ $item->tingkat_biaya }}</td>
                            <td class="text-center">
                                <a href="{{ route('pegawai/edit', $item->id) }}" class="btn btn-icon btn-sm btn-warning">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="{{ route('pegawai/delete', $item->id) }}" class="btn btn-icon btn-sm btn-danger">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#pegawai').DataTable();
    });
</script>
@endsection
