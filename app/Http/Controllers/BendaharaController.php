<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bendahara;
use App\Pegawai;

class BendaharaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bendaharas = Bendahara::all();

        return view('pages.bendahara.index', [
            'bendaharas' => $bendaharas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $bendaharas = Bendahara::findorfail($id);
        $pegawais = Pegawai::all();

        return view('pages.bendahara.edit', [
            'bendaharas' => $bendaharas,
            'pegawais' => $pegawais
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
            'pegawai_id' => 'required',
        ]);

        $post = Bendahara::findorfail($id);

        $post_data = [
            'pegawai_id' => $request->pegawai_id,
        ];

        $post->update($post_data);

        return redirect('bendahara');
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
