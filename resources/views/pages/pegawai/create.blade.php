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
        <div class="card card-primary">
            <div class="card-header">
                <h4>Tambah Data Pegawai</h4>
                <div class="card-header-action">
                    <a href="/pegawai" class="btn btn-info">Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('pegawai/simpan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nama Pegawai</label>
                                <input type="text" name="nama_pegawai" class="form-control form-control-sm" autofocus required>
                            </div>
                            <div class="col-md-6">
                                <label>NIP</label>
                                <input type="text" name="nip" class="form-control form-control-sm" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="jabatan_id">Jabatan</label>
                                <select class="form-control @error('jabatan_id') is-invalid @enderror" id="jabatan_id" name="jabatan_id">
                                    <option selected disabled value="">--Pilih Jabatan--</option>
                                    @foreach ($jabatans as $jabatan)
                                    <option value="{{$jabatan->id}}" {{old('id')== $jabatan->id ? 'selected' : ''}}>{{ $jabatan->nama_jabatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="pangkat_id">Pangkat</label>
                                <select class="form-control @error('pangkat_id') is-invalid @enderror" id="pangkat_id" name="pangkat_id">
                                    <option selected disabled value="">--Pilih Pangkat--</option>
                                    @foreach ($pangkats as $pangkat)
                                    <option value="{{$pangkat->id}}" {{old('id')== $pangkat->id ? 'selected' : ''}}>{{ $pangkat->nama_pangkat }}, ({{ $pangkat->golru }})</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="instansi_id">Unit Organisasi</label>
                                <select class="form-control @error('instansi_id') is-invalid @enderror" id="instansi_id" name="instansi_id">
                                    <option selected disabled value="">--Pilih Instansi--</option>
                                    @foreach ($instansis as $instansi)
                                    <option value="{{$instansi->id}}" {{old('id')== $instansi->id ? 'selected' : ''}}>{{ $instansi->nama_instansi }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="uh">UH</label>
                                <input type="text" name="uh" class="form-control form-control-sm" autofocus>
                            </div>
                            <div class="col-md-3">
                                <label for="um">UM</label>
                                <input type="text" name="um" class="form-control form-control-sm" autofocus>
                            </div>
                            <div class="col-md-3">
                                <label for="ut">UT</label>
                                <input type="text" name="ut" class="form-control form-control-sm" autofocus>
                            </div>
                            <div class="col-md-3">
                                <label for="tingkat_biaya">Tingkat Biaya</label>
                                <input type="text" name="tingkat_biaya" class="form-control form-control-sm" autofocus>
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
