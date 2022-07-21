@extends('layouts.home')

@section('title', 'Dasar SPT')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Instansi</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Dasar SPT</a></div>
	<div class="breadcrumb-item"><a href="#">Data</a></div>
	<div class="breadcrumb-item active">Edit</div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Data Dasar SPT</h4>
                <div class="card-header-action">
                    <a href="/dasar_spt" class="btn btn-success">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('dasar_spt/update', $dasars->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama Dasar SPT</label>
                        <input type="text" name="nama_spt" class="form-control form-control-sm" value="{{ $dasars->nama_spt }}" autofocus required>
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" name="file" class="form-control" value="{{ $dasars->file }}" autofocus>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
