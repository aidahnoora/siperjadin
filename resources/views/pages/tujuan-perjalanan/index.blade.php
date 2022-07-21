@extends('layouts.home')

@section('title', 'Tujuan Perjalanan')

@section('css')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
@endsection

@section('breadcrumbs')
<h1>Tujuan Perjalanan</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Tujuan Perjalanan</a></div>
	<div class="breadcrumb-item active"><a href="#">Data</a></div>
	{{-- <div class="breadcrumb-item">Tes</div> --}}
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Data Tujuan Perjalanan</h4>
                <div class="card-header-action">
                    <a href="/tujuan_perjalanan/tambah" class="btn btn-info">Tambah</a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table id="tujuan" class="table table-bordered">
                    <caption>List of Tujuan Perjalanan</caption>
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Instansi</th>
                            <th scope="col">Nama Pejabat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tujuans as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama_tujuan }}</td>
                            <td>{{ $item->nama_pejabat }}</td>
                            <td class="text-center">
                                <a href="{{ route('tujuan_perjalanan/edit', $item->id) }}" class="btn btn-icon btn-sm btn-warning">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="{{ route('tujuan_perjalanan/delete', $item->id) }}" class="btn btn-icon btn-sm btn-danger">
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
        $('#tujuan').DataTable();
    });
</script>
@endsection
