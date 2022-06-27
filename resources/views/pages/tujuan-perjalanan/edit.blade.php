@extends('layouts.home')

@section('title', 'Tujuan Perjalanan')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Instansi</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Tujuan Perjalanan</a></div>
	<div class="breadcrumb-item"><a href="#">Data</a></div>
	<div class="breadcrumb-item active">Edit</div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Tujuan Perjalanan</h4>
            </div>
            <div class="card-body">
                {{-- <div class="alert alert-info">
                  <b>Note!</b> Not all browsers support HTML5 type input.
                </div> --}}
                <div class="form-group">
                    <label>Nama Instansi</label>
                    <input type="text" name="" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Pejabat</label>
                    <input type="text" name="" class="form-control" value="">
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
