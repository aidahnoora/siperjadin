@extends('layouts.home')

@section('title', 'Pegawai')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Pegawai</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Pegawai</a></div>
	<div class="breadcrumb-item"><a href="#">Data</a></div>
	<div class="breadcrumb-item active">Tambah</div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Data Pegawai</h4>
            </div>
            <div class="card-body">
                {{-- <div class="alert alert-info">
                  <b>Note!</b> Not all browsers support HTML5 type input.
                </div> --}}
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input type="text" name="" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Instansi</label>
                            <select class="custom-select" name="">
                                <option selected>--Pilih Instansi--</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="custom-select" name="">
                                <option selected>--Pilih Jabatan--</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" name="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pangkat</label>
                            <select class="custom-select" name="">
                            <option selected>--Pilih Pangkat--</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
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
