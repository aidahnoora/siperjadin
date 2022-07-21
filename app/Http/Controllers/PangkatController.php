<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pangkat;

class PangkatController extends Controller
{
    public function index()
    {
        $pangkats = Pangkat::all();

        return view('pages.pangkat.index', [
            'pangkats' => $pangkats
        ]);
    }

    public function create()
    {
        return view ('pages.pangkat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pangkat' => 'required',
            'golru' => 'required'
        ]);

        Pangkat::create([
            'nama_pangkat' => $request->nama_pangkat,
            'golru' => $request->golru
        ]);

        return redirect('pangkat');
    }

    public function edit($id)
    {
        $pangkats = Pangkat::findorfail($id);

        return view('pages.pangkat.edit', [
            'pangkats' => $pangkats
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pangkat' => 'required',
            'golru' => 'required'
        ]);

        $post = Pangkat::findorfail($id);

        $post_data = [
            'nama_pangkat' => $request->nama_pangkat,
            'golru' => $request->golru
        ];

        $post->update($post_data);

        return redirect('pangkat');
    }

    public function destroy($id)
    {
        $pangkats = Pangkat::find($id);
        $pangkats->delete();

        return redirect('pangkat');
    }
}
