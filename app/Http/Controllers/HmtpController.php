<?php

namespace App\Http\Controllers;
use App\Models\hmtp;
use Illuminate\Http\Request;

class HmtpController extends Controller
{
    public function index()
    {
        $hmtp = hmtp::all();
        return view('admin.hmtp.index', compact('hmtp'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.hmtp.addhmtp');
    }

    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'id_periode' => 'required',
            'struktur_organisasi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);
        $hmtp = hmtp::create([
            'deskripsi' => $request->deskripsi,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'struktur_organisasi' => $request->struktur_organisasi,
            'id_periode' => $request->id_periode,
        ]);
        return redirect()->route('hmtp.index')
            ->with('success', 'hmtp Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $hmtps = hmtp::where('id', $id)->first();
        return view('hmtpadmin.hmtp.show', compact('hmtp'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $hmtp = hmtp::find($id);

        return $hmtp;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'deskripsi' => 'required',
            'id_periode' => 'required',
            'struktur_organisasi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $hmtp = hmtp::findOrFail($id);
        $hmtp->deskripsi = $request->deskripsi;
        $hmtp->visi = $request->visi;
        $hmtp->misi = $request->misi;
        $hmtp->struktur_organisasi = $request->struktur_organisasi;
        $hmtp->id_periode = $request->id_periode;

        $hmtp->save();

        return redirect()->route('hmtp.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        hmtp::findOrFail($id)->delete();

        return redirect()->route('hmtp.index')
            ->with('delete', 'hmtp Berhasil Dihapus');
    }
}
