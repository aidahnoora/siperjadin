@extends('layouts.home')

@section('title', 'Dasar SPT')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Instansi</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Dasar SPT</a></div>
	<div class="breadcrumb-item"><a href="#">Data</a></div>
	<div class="breadcrumb-item active">Tambah</div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Dasar SPT</h4>
            </div>
            <div class="card-body">
                {{-- <div class="alert alert-info">
                  <b>Note!</b> Not all browsers support HTML5 type input.
                </div> --}}
                <div class="form-group">
                    <label>Nama Dasar SPT</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>File</label>
                    <input type="file" class="form-control">
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Tambah</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
