@extends('layouts.home')

@section('title', 'Jabatan')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Instansi</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Jabatan</a></div>
	<div class="breadcrumb-item"><a href="#">Data</a></div>
	<div class="breadcrumb-item active">Tambah</div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Tambah Data Jabatan</h4>
                <div class="card-header-action">
                  <a href="/jabatan" class="btn btn-success">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('jabatan/simpan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Jabatan</label>
                        <input type="text" name="nama_jabatan" class="form-control form-control-sm" autofocus required>
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
