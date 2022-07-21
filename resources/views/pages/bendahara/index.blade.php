@extends('layouts.home')

@section('title', 'Bendahara')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Bendahara</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Bendahara</a></div>
	<div class="breadcrumb-item active"><a href="#">Data</a></div>
	{{-- <div class="breadcrumb-item">Tes</div> --}}
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Data Bendahara</h4>
            </div>
            @foreach($bendaharas as $item)
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Bendahara</label>
                            <input type="text" name="nama_bendahara" class="form-control form-control-sm" value="{{ $item->nama_bendahara }}" autofocus disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" name="" class="form-control form-control-sm" value="" autofocus disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <a href="{{ route('bendahara/edit', $item->id) }}" class="btn btn-warning">
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
