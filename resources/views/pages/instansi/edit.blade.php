@extends('layouts.home')

@section('title', 'Instansi')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Instansi</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Instansi</a></div>
	<div class="breadcrumb-item"><a href="#">Data</a></div>
	<div class="breadcrumb-item active">Edit</div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Data Instansi</h4>
                <div class="card-header-action">
                  <a href="/instansi" class="btn btn-success">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('instansi/update', $instansis->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Instansi</label>
                                <input type="text" name="nama_instansi" class="form-control form-control-sm" value="{{ $instansis->nama_instansi }}" autofocus required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control form-control-sm" value="{{ $instansis->alamat }}" autofocus required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Logo Instansi</label>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset($instansis->logo) }}" width="100" height="auto">
                            </div>
                            <div class="col-md-8">
                                <input type="file" name="logo" class="form-control" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
