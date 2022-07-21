<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DasarSpt;

class DasarSptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dasars = DasarSpt::all();

        return view('pages.dasar-spt.index', [
            'dasars' => $dasars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dasar-spt.create');
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
            'nama_spt' => 'required',
            'file' => 'file|mimes:doc,pdf,docx,xlsx,xls|max:2000|nullable',
        ]);

        if ($request->has('file')) {
            $file = $request->file('file');
            $namafile = time()."_".$file->getClientOriginalName();

            $tujuanupload = 'file_spt';
            $file->move($tujuanupload, $namafile);

            DasarSpt::create([
                'nama_spt' => $request->nama_spt,
                'file' => $namafile,
            ]);
        } else {
            DasarSpt::create([
                'nama_spt' => $request->nama_spt,
            ]);
        }

        return redirect('dasar_spt');
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
        $dasars = DasarSpt::findorfail($id);

        return view('pages.dasar-spt.edit', [
            'dasars' => $dasars
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
            'nama_spt' => 'required',
            'file' => 'file|mimes:doc,pdf,docx,xlsx,xls|max:2000|nullable',
        ]);

        $post = DasarSpt::findorfail($id);

        if ($request->has('file')) {
            $file = $request->file('file');
            $namafile = time()."_".$file->getClientOriginalName();

            $tujuanupload = 'file_spt';
            $file->move($tujuanupload, $namafile);

            $post_data = [
                'nama_spt' => $request->nama_spt,
                'file' => $namafile,
            ];
        } else {
            $post_data = [
                'nama_spt' => $request->nama_spt,
            ];
        }

        $post->update($post_data);

        return redirect('dasar_spt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dasars = DasarSpt::find($id);
        $dasars->delete();

        return redirect('dasar_spt');
    }
}
