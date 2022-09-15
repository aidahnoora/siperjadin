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
                                <label for="tujuan_id">Tujuan Perjalanan </label>
                                <select name="tujuan_id" id="tujuan_id" class="form-control-sm">
                                    <option value="">Pilih Tujuan</option>
                                    @foreach ($tujuans as $tujuan)
                                        <option value="{{ $tujuan->id }}">{{ $tujuan->nama_tujuan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
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
                                    <td class="text-center">
                                        <a href="" class="btn btn-icon btn-sm btn-info">
                                            <i class="fas fa-print"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm btn-secondary" id="detail" data-toggle="modal" data-target="#detail{{ $item->id }}">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a href="{{ route('sppd/edit', $item->id) }}"
                                            class="btn btn-icon btn-sm btn-warning">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a href="{{ route('sppd/delete', $item->id) }}"
                                            class="btn btn-icon btn-sm btn-danger">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @foreach($sppds as $item)
                    <div id="detail{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="detail{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Lihat Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('cari-sppd', $item->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="no_spt">Nomor SPT</label>
                                            <input type="text" class="form-control" id="no_spt" name="no_spt" value="{{ $item->no_spt }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_spt">Tanggal SPT</label>
                                            <input type="date" class="form-control" id="tgl_spt" name="tgl_spt" value="{{ $item->tgl_spt }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="tujuan_id">Tujuan Perjalanan</label>
                                            <input type="text" class="form-control" id="tujuan_id" name="tujuan_id" value="{{ $item->tujuan->nama_tujuan }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="keperluan">Keperluan</label>
                                            <input type="text" class="form-control" id="keperluan" name="keperluan" value="{{ $item->keperluan }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_berangkat">Tanggal Berangkat</label>
                                            <input type="date" class="form-control" id="tgl_berangkat" name="tgl_berangkat" value="{{ $item->tgl_berangkat }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_kembali">Tanggal Kembali</label>
                                            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="{{ $item->tgl_kembali }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="kendaraan">Kendaraan</label>
                                            <input type="text" class="form-control" id="kendaraan" name="kendaraan" value="{{ $item->kendaraan }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="lama_perjalanan">Lama Perjalanan</label>
                                            <input type="text" class="form-control" id="lama_perjalanan" name="lama_perjalanan" value="{{ $item->lama_perjalanan }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="hadir">Hadir dalam Pertemuan</label>
                                            <input type="text" class="form-control" id="hadir" name="hadir" value="{{ $item->hadir }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="petunjuk">Petunjuk/Arahan yang Diberikan</label>
                                            <input type="text" class="form-control" id="petunjuk" name="petunjuk" value="{{ $item->petunjuk }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="temuan">Masalah/Temuan</label>
                                            <input type="text" class="form-control" id="temuan" name="temuan" value="{{ $item->temuan }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="saran">Saran Tindakan</label>
                                            <input type="text" class="form-control" id="saran" name="saran" value="{{ $item->saran }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="lain_lain">Lain-lain</label>
                                            <input type="text" class="form-control" id="lain_lain" name="lain_lain" value="{{ $item->lain_lain }}" disabled>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#sppd').DataTable();
        });

    </script>
@endsection
