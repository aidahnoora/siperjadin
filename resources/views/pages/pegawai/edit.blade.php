@extends('layouts.home')

@section('title', 'Pegawai')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Pegawai</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">Pegawai</a></div>
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
                    <a href="/pegawai" class="btn btn-info">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('pegawai/update', $pegawais->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Pegawai</label>
                                <input type="text" name="nama_pegawai" class="form-control form-control-sm" value="{{ $pegawais->nama_pegawai }}" autofocus required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" name="nip" class="form-control form-control-sm" value="{{ $pegawais->nip }}" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_jabatan">Jabatan</label>
                                <select class="custom-select @error('id_jabatan') is-invalid @enderror" id="id_jabatan" name="id_jabatan">
                                    <option selected disabled value="">--Pilih Jabatan--</option>
                                    @foreach ($jabatans as $jabatan)
                                    <option value="{{ $jabatan->id }}" {{ $pegawais->id_jabatan== $jabatan->id ? 'selected' : '' }}>{{ $jabatan->nama_jabatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_pangkat">Pangkat</label>
                                <select class="custom-select @error('id_pangkat') is-invalid @enderror" id="id_pangkat" name="id_pangkat">
                                    <option selected disabled value="">--Pilih Pangkat--</option>
                                    @foreach ($pangkats as $pangkat)
                                    <option value="{{$pangkat->id}}" {{ $pegawais->id_pangkat== $pangkat->id ? 'selected' : ''}}>{{ $pangkat->nama_pangkat }}, ({{ $pangkat->golru }})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="id_instansi">Instansi</label>
                                <select class="custom-select @error('id_instansi') is-invalid @enderror" id="id_instansi" name="id_instansi">
                                    <option selected disabled value="">--Pilih Instansi--</option>
                                    @foreach ($instansis as $instansi)
                                    <option value="{{$instansi->id}}" {{ $pegawais->id_instansi== $instansi->id ? 'selected' : '' }}>{{ $instansi->nama_instansi }}</option>
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
