<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatans = Jabatan::all();

        return view('pages.jabatan.index', [
            'jabatans' => $jabatans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.jabatan.create');
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
            'nama_jabatan' => 'required'
        ]);

        Jabatan::create([
            'nama_jabatan' => $request->nama_jabatan
        ]);

        return redirect('jabatan');
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
        $jabatans = Jabatan::findorfail($id);

        return view('pages.jabatan.edit', [
            'jabatans' => $jabatans
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
            'nama_jabatan' => 'required',
        ]);

        $post = Jabatan::findorfail($id);

        $post_data = [
            'nama_jabatan' => $request->nama_jabatan
        ];

        $post->update($post_data);

        return redirect('jabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatans = Jabatan::find($id);
        $jabatans->delete();

        return redirect('jabatan');
    }
}
