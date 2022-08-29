@extends('layouts.home')

@section('title', 'SPT')

@section('css')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
@endsection

@section('breadcrumbs')
<h1>SPT</h1>
<div class="section-header-breadcrumb">
	<div class="breadcrumb-item"><a href="#">SPT</a></div>
	<div class="breadcrumb-item active"><a href="#">Data</a></div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Rekapitulasi SPT</h4>
            </div>
            <div class="card-body table-responsive">
                <form method="GET">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="id_tujuan">Tujuan Perjalanan </label>
                            <select name="id_tujuan" id="id_tujuan" class="form-control-sm">
                                <option value="">Pilih Tujuan</option>
                                @foreach ($tujuans as $tujuan)
                                    <option value="{{ $tujuan->id }}">{{ $tujuan->nama_tujuan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                               <button type="submit" class="btn btn-sm btn-warning">
                                    <i class="fas fa-search"> Filter</i>
                                </button>
                           </div>
                       </div>
                    </div>
                </form>
                <div class="divider"></div>
                <table id="sppd" class="table table-bordered">
                    <caption>List of SPT</caption>
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nomor dan Tanggal SPT</th>
                            <th scope="col">Tujuan</th>
                            <th scope="col">Keperluan</th>
                            <th scope="col">Pemberi Tugas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sppds as $item)
                        <tr>
                            <th scope="row" style="text-align: center">{{ $loop->iteration }}</th>
                            <td>{{ $item->no_spt }}, {{ $item->tgl_spt }}</td>
                            <td>{{ $item->tujuan->nama_tujuan }}</td>
                            <td>{{ $item->keperluan }}</td>
                            <td>{{ $item->pegawai->nama_pegawai }}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-icon btn-sm btn-info">
                                    <i class="fas fa-print"></i>
                                </a>
                                <a href="" class="btn btn-icon btn-sm btn-secondary">
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('sppd/edit', $item->id) }}" class="btn btn-icon btn-sm btn-warning">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="{{ route('sppd/delete', $item->id) }}" class="btn btn-icon btn-sm btn-danger">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#sppd').DataTable();
    });
</script>
@endsection
