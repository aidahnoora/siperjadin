@extends('layouts.home')

@section('title', 'Perjalanan Dinas Dalam Daerah')

@section('css')

@endsection

@section('breadcrumbs')
<h1>Perjalanan Dinas Dalam Daerah</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">SPT</a></div>
	<div class="breadcrumb-item"><a href="#">Data</a></div>
	<div class="breadcrumb-item active">Tambah</div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Tambah Data SPT</h4>
                <div class="card-header-action">
                    <a href="/cari-sppd" class="btn btn-info">Cari SPT</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('sppd/simpan') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Nomor SPT</label>
                                    <input type="text" name="no_spt" class="form-control form-control-sm" autofocus required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal SPT</label>
                                    <input type="date" name="tgl_spt" class="form-control form-control-sm" autofocus required>
                                </div>
                            </div>
                        </div>
                        <h6><label>Pejabat Pemberi Perintah</label></h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pegawai_id">Nama</label>
                                    <select class="form-control @error('pegawai_id') is-invalid @enderror" id="pegawai_id" name="pegawai_id[]">
                                        <option selected disabled value="">--Pilih Pejabat--</option>
                                        @foreach ($pegawais as $pegawai)
                                        <option value="{{ $pegawai->id }}" data-jabatan="{{ $pegawai->jabatan->nama_jabatan }}" {{old('id')== $pegawai->id ? 'selected' : ''}}>{{ $pegawai->nama_pegawai }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jabatan_id">Jabatan</label>
                                    <input type="text" id="input" class="form-control form-control-sm" autofocus readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tujuan_id">Tujuan Perjalanan</label>
                                    <select class="form-control @error('tujuan_id') is-invalid @enderror" id="tujuan_id" name="tujuan_id">
                                        <option selected disabled value="">--Pilih Tujuan--</option>
                                        @foreach ($tujuans as $tujuan)
                                        <option value="{{ $tujuan->id }}" {{old('id')== $tujuan->id ? 'selected' : ''}}>{{ $tujuan->nama_tujuan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="keperluan">Keperluan</label>
                                    <textarea type="text" name="keperluan" class="form-control form-control-sm" autofocus required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl_berangkat">Tanggal Berangkat</label>
                                    <input type="date" name="tgl_berangkat" class="form-control form-control-sm" autofocus required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tgl_kembali">Tanggal Kembali</label>
                                    <input type="date" name="tgl_kembali" class="form-control form-control-sm" autofocus required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="d-block">Kendaraan</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kendaraan" id="dinas" value="dinas">
                                        <label class="form-check-label" for="dinas"> Dinas</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kendaraan" id="pribadi" value="pribadi">
                                        <label class="form-check-label" for="pribadi"> Pribadi</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="d-block">Lama Perjalanan</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="lama_perjalanan" id="kurang" value="kurang">
                                        <label class="form-check-label" for="kurang"> Kurang dari 8 Jam</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="lama_perjalanan" id="lebih" value="lebih">
                                        <label class="form-check-label" for="lebih"> Lebih dari 8 Jam</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h6><label for="pegawai_id">Yang Melakukan Perjalanan Dinas</label></h6>
                                    <select class="form-control select2 @error('pegawai_id') is-invalid @enderror" id="pegawai_id" name="pegawai_id[]" multiple="multiple">
                                        @foreach ($pegawais as $pegawai)
                                        <option value="{{ $pegawai->id }}" {{old('id')== $pegawai->id ? 'selected' : ''}}>{{ $pegawai->nama_pegawai }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h6><label>Laporan Perjalanan Dinas</label></h6>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="hadir">Hadir dalam Pertemuan</label>
                                    <textarea type="text" name="hadir" class="form-control form-control-sm" autofocus></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="petunjuk">Petunjuk/Arahan yang Diberikan</label>
                                    <textarea type="text" name="petunjuk" class="form-control form-control-sm" autofocus></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="temuan">Masalah/Temuan</label>
                                    <textarea type="text" name="temuan" class="form-control form-control-sm" autofocus></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="saran">Saran Tindakan</label>
                                    <textarea type="text" name="saran" class="form-control form-control-sm" autofocus></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="lain_lain">Lain-lain</label>
                                    <textarea type="text" name="lain_lain" class="form-control form-control-sm" autofocus></textarea>
                                </div>
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
<script>
    $(document).ready(function() {
        $('#pegawai_id').on('change', function() {
            const selected = $(this).find('option:selected');
            const jab = selected.data('jabatan');

            $("#input").val(jab);
        });
    });
</script>
@endsection
