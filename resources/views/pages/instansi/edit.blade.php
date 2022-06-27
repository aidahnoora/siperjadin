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
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Instansi</h4>
            </div>
            <div class="card-body">
                {{-- <div class="alert alert-info">
                  <b>Note!</b> Not all browsers support HTML5 type input.
                </div> --}}
                <div class="form-group">
                    <label>Nama Instansi</label>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Logo Instansi</label>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="" width="100" height="auto">
                        </div>
                        <div class="col-md-8">
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Update</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
