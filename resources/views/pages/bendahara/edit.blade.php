@extends('layouts.home')

@section('title', 'Bendahara')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Bendahara</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Bendahara</a></div>
	<div class="breadcrumb-item"><a href="#">Data</a></div>
	<div class="breadcrumb-item active">Edit</div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Edit Data Pegawai</h4>
                <div class="card-header-action">
                    <a href="/bendahara" class="btn btn-info">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('bendahara/update', $bendaharas->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="pegawai_id">Nama Bendahara</label>
                                <select class="form-control @error('pegawai_id') is-invalid @enderror" id="pegawai_id" name="pegawai_id">
                                    <option selected disabled value="">--Pilih Bendahara--</option>
                                    @foreach ($pegawais as $pegawai)
                                    <option value="{{$pegawai->id}}" {{ $bendaharas->pegawai_id == $pegawai->id ? 'selected' : '' }}>{{ $pegawai->nama_pegawai }}</option>
                                    @endforeach
                                </select>
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
