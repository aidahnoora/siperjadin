<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instansi;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instansis = Instansi::all();

        return view('pages.instansi.index', [
            'instansis' => $instansis,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        $instansis = Instansi::findorfail($id);

        return view('pages.instansi.edit', [
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
        $this->validate($request, [
            'nama_instansi' => 'required',
            'alamat' => 'required'
        ]);

        $post = Instansi::findorfail($id);

        if ($request->has('logo')) {
            $logo = $request->logo;
            $new_logo = time().$logo->getClientOriginalName();
            $logo->move('logo/', $new_logo);

            $post_data = [
                'nama_instansi' => $request->nama_instansi,
                'alamat' => $request->alamat,
                'logo' => 'logo/'.$new_logo,
            ];
        } else{
            $post_data = [
                'nama_instansi' => $request->nama_instansi,
                'alamat' => $request->alamat,
            ];
        }

        $post->update($post_data);

        return redirect('instansi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instansis = Instansi::find($id);
        $instansis->delete();

        return redirect('instansi');
    }
}
