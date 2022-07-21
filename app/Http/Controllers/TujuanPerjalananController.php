<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TujuanPerjalanan;

class TujuanPerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tujuans = TujuanPerjalanan::all();

        return view('pages.tujuan-perjalanan.index', [
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
        return view('pages.tujuan-perjalanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_tujuan' => 'required',
            'nama_pejabat' => 'required',
        ]);

        TujuanPerjalanan::create([
            'nama_tujuan' => $request->nama_tujuan,
            'nama_pejabat' => $request->nama_pejabat,
        ]);

        return redirect('tujuan_perjalanan');
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
        $tujuans = TujuanPerjalanan::findorfail($id);

        return view('pages.tujuan-perjalanan.edit', [
            'tujuans' => $tujuans
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
        $this->validate($request, [
            'nama_tujuan' => 'required',
            'nama_pejabat' => 'required',
        ]);

        $post = TujuanPerjalanan::findorfail($id);

        $post_data = [
            'nama_tujuan' => $request->nama_tujuan,
            'nama_pejabat' => $request->nama_pejabat,
        ];

        $post->update($post_data);

        return redirect('tujuan_perjalanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tujuans = TujuanPerjalanan::find($id);
        $tujuans->delete();

        return redirect('tujuan_perjalanan');
    }
}
