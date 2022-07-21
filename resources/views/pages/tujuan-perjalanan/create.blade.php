@extends('layouts.home')

@section('title', 'Tujuan Perjalanan')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Instansi</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Tujuan Perjalanan</a></div>
	<div class="breadcrumb-item"><a href="#">Data</a></div>
	<div class="breadcrumb-item active">Tambah</div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Tambah Data Tujuan Perjalanan</h4>
                <div class="card-header-action">
                    <a href="/tujuan_perjalanan" class="btn btn-success">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('tujuan_perjalanan/simpan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Instansi</label>
                                <input type="text" name="nama_tujuan" class="form-control form-control-sm" autofocus required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pejabat</label>
                                <input type="text" name="nama_pejabat" class="form-control form-control-sm" autofocus required>
                            </div>
                        </div>
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
