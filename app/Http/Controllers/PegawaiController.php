<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Jabatan;
use App\Pangkat;
use App\Instansi;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Pegawai::all();

        return view('pages.pegawai.index', [
            'pegawais' => $pegawais
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatans = Jabatan::all();
        $pangkats = Pangkat::all();
        $instansis = Instansi::all();

        return view('pages.pegawai.create', [
            'jabatans' => $jabatans,
            'pangkats' => $pangkats,
            'instansis' => $instansis
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
            'nama_pegawai' => 'required',
            'id_jabatan' => 'required',
            'id_instansi' => 'required',
        ]);

        Pegawai::create([
            'nama_pegawai' => $request->nama_pegawai,
            'nip' => $request->nip,
            'uh' => $request->uh,
            'um' => $request->um,
            'ut' => $request->ut,
            'tingkat_biaya' => $request->tingkat_biaya,
            'id_jabatan' => $request->id_jabatan,
            'id_pangkat' => $request->id_pangkat,
            'id_instansi' => $request->id_instansi,
        ]);

        return redirect('pegawai');
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
        $pegawais = Pegawai::findorfail($id);
        $jabatans = Jabatan::all();
        $pangkats = Pangkat::all();
        $instansis = Instansi::all();

        return view('pages.pegawai.edit', [
            'pegawais' => $pegawais,
            'jabatans' => $jabatans,
            'pangkats' => $pangkats,
            'instansis' => $instansis
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
            'nama_pegawai' => 'required',
            'id_jabatan' => 'required',
            'id_instansi' => 'required',
        ]);

        $post = Pegawai::findorfail($id);

        $post_data = [
            'nama_pegawai' => $request->nama_pegawai,
            'nip' => $request->nip,
            'uh' => $request->uh,
            'um' => $request->um,
            'ut' => $request->ut,
            'tingkat_biaya' => $request->tingkat_biaya,
            'id_jabatan' => $request->id_jabatan,
            'id_pangkat' => $request->id_pangkat,
            'id_instansi' => $request->id_instansi,
        ];

        $post->update($post_data);

        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawais = Pegawai::find($id);
        $pegawais->delete();

        return redirect('pegawai');
    }
}
