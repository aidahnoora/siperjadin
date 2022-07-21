@extends('layouts.home')

@section('title', 'Instansi')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Instansi</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Instansi</a></div>
	<div class="breadcrumb-item active"><a href="#">Data</a></div>
	{{-- <div class="breadcrumb-item">Tes</div> --}}
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Data Instansi</h4>
            </div>
            @foreach($instansis as $item)
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Instansi</label>
                            <input type="text" name="nama_instansi" class="form-control form-control-sm" value="{{ $item->nama_instansi }}" autofocus disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control form-control-sm" value="{{ $item->alamat }}" autofocus disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Logo Instansi</label>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset($item->logo) }}" width="100" height="auto">
                        </div>
                        <div class="col-md-8">
                            <input type="file" name="logo" class="form-control" autofocus disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="{{ route('instansi/edit', $item->id) }}" class="btn btn-warning">
                    Edit Data
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
