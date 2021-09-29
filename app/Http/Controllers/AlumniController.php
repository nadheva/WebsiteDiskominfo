<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = alumni::all();
        return view('admin.alumni.index', compact('alumni'));
    }

    public function create()
    {
        return view('admin.alumni.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
        ]);
        alumni::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
        ]);
        return redirect()->route('alumni.index')
            ->with('success', 'alumni Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $alumnis = alumni::where('id', $id)->first();
        return view('alumniadmin.alumni.show', compact('alumni'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $alumni = alumni::find($id);

        return $alumni;
    }

    public function update(Request $request, $id)
    {
        $alumni = alumni::findOrFail($id);
        $alumni->nama = $request->nama;
        $alumni->alamat = $request->alamat;
        $alumni->pekerjaan = $request->pekerjaan;
        $alumni->save();

        return redirect()->route('alumni.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        alumni::where('id', $id)->delete();

        return redirect()->route('alumni.index')
            ->with('delete', 'alumni Berhasil Dihapus');
    }
}
