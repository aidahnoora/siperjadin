<?php

namespace App\Http\Controllers;
use App\Sppd;
use App\Pegawai;
use App\TujuanPerjalanan;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

        if($request->tujuan_id) {
            $tujuan_id = $request->tujuan_id;
            $sppds->whereHas('tujuan', function ($query) use ($tujuan_id) {
                $query->where('tujuan_id', $tujuan_id);
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
            'tujuan_id' => 'required',
            'keperluan' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_kembali' => 'required',
            'kendaraan' => 'required',
            'lama_perjalanan' => 'required',
            'hadir',
            'petunjuk',
            'temuan',
            'saran',
            'lain_lain'
        ]);

        $post = Sppd::create([
            'no_spt' => $request->no_spt,
            'tgl_spt' => $request->tgl_spt,
            'tujuan_id' => $request->tujuan_id,
            'keperluan' => $request->keperluan,
            'tgl_berangkat' => $request->tgl_berangkat,
            'tgl_kembali' => $request->tgl_kembali,
            'kendaraan' => $request->kendaraan,
            'lama_perjalanan' => $request->lama_perjalanan,
            'hadir' => $request->hadir,
            'petunjuk' => $request->petunjuk,
            'temuan' => $request->temuan,
            'saran' => $request->saran,
            'lain_lain' => $request->lain_lain,
        ]);

        $post->pegawai()->attach($request->pegawai_id);

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
        $sppds = Sppd::findorfail($id);
        $pegawais = Pegawai::all();
        $tujuans = TujuanPerjalanan::all();

        return view('pages.sppd.index', [
            'sppds' => $sppds,
            'pegawais' => $pegawais,
            'tujuans' => $tujuans,
        ]);
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
        $perintahs = Pegawai::all();
        $pegawais = Pegawai::all();
        $tujuans = TujuanPerjalanan::all();

        return view('pages.sppd.edit', [
            'sppds' => $sppds,
            'perintahs' => $perintahs,
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
        $request->validate([
            'no_spt' => 'required',
            'tgl_spt' => 'required',
            'tujuan_id' => 'required',
            'keperluan' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_kembali' => 'required',
            'kendaraan' => 'required',
            'lama_perjalanan' => 'required',
            'pegawai_id' => 'required',
            'hadir',
            'petunjuk',
            'temuan',
            'saran',
            'lain_lain'
        ]);

        $post = Sppd::findorfail($id);

        $post_data = [
            'no_spt' => $request->no_spt,
            'tgl_spt' => $request->tgl_spt,
            'tujuan_id' => $request->tujuan_id,
            'keperluan' => $request->keperluan,
            'tgl_berangkat' => $request->tgl_berangkat,
            'tgl_kembali' => $request->tgl_kembali,
            'kendaraan' => $request->kendaraan,
            'lama_perjalanan' => $request->lama_perjalanan,
            'pegawai_id' => $request->pegawai_id,
            'hadir' => $request->hadir,
            'petunjuk' => $request->petunjuk,
            'temuan' => $request->temuan,
            'saran' => $request->saran,
            'lain_lain' => $request->lain_lain,
        ];

        $post->update($post_data);

        return redirect('cari-sppd');
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
