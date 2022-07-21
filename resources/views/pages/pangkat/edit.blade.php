@extends('layouts.home')

@section('title', 'Pangkat')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Pangkat</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Pangkat</a></div>
	<div class="breadcrumb-item"><a href="#">Data</a></div>
	<div class="breadcrumb-item active">Edit</div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Data Pangkat</h4>
                <div class="card-header-action">
                  <a href="/pangkat" class="btn btn-success">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('pangkat/update', $pangkats->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nama Pangkat</label>
                                <input type="text" name="nama_pangkat" class="form-control form-control-sm" value="{{ $pangkats->nama_pangkat }}" autofocus required>
                            </div>
                            <div class="col-md-6">
                                <label>Golongan/Ruang</label>
                                <input type="text" name="golru" class="form-control form-control-sm" value="{{ $pangkats->golru }}" autofocus required>
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
