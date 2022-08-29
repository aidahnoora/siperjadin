<?php

namespace App\Http\Controllers;
use App\Sppd;
use App\Pegawai;
use App\TujuanPerjalanan;

use Illuminate\Http\Request;

class SppdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sppds = Sppd::query();
        $tujuans = TujuanPerjalanan::all();

        if($request->id_tujuan) {
            $id_tujuan = $request->id_tujuan;
            $sppds->whereHas('tujuan', function ($query) use ($id_tujuan) {
                $query->where('id_tujuan', $id_tujuan);
                }
            );
        }

        $sppds = $sppds->orderBy('created_at', 'DESC')->get();

        return view('pages.sppd.index', [
            'sppds' => $sppds,
            'tujuans' => $tujuans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawais = Pegawai::all();
        $tujuans = TujuanPerjalanan::all();

        return view('pages.sppd.create', [
            'pegawais' => $pegawais,
            'tujuans' => $tujuans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_spt' => 'required',
            'tgl_spt' => 'required',
            'id_tujuan' => 'required',
            'keperluan' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_kembali' => 'required',
            'kendaraan' => 'required',
            'lama_perjalanan' => 'required',
            'id_pegawai' => 'required',
            'hadir',
            'petunjuk',
            'temuan',
            'saran',
            'lain_lain'
        ]);

        Sppd::create([
            'no_spt' => $request->no_spt,
            'tgl_spt' => $request->tgl_spt,
            'id_tujuan' => $request->id_tujuan,
            'keperluan' => $request->keperluan,
            'tgl_berangkat' => $request->tgl_berangkat,
            'tgl_kembali' => $request->tgl_kembali,
            'kendaraan' => $request->kendaraan,
            'lama_perjalanan' => $request->lama_perjalanan,
            'id_pegawai' => $request->id_pegawai,
            'hadir' => $request->hadir,
            'petunjuk' => $request->petunjuk,
            'temuan' => $request->temuan,
            'saran' => $request->saran,
            'lain_lain' => $request->lain_lain,
        ]);

        return redirect('sppd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sppds = Sppd::findorfail($id);
        $pegawais = Pegawai::all();
        $tujuans = TujuanPerjalanan::all();

        return view('pages.sppd.edit', [
            'sppds' => $sppds,
            'pegawais' => $pegawais,
            'tujuans' => $tujuans,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
