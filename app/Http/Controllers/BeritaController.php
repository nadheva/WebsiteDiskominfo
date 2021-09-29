<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $Berita = Berita::all();
        return view('admin.Berita.index', compact('Berita'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.Berita.tambah');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'pertanyaan' => 'required',
        //     'jawaban' => 'required',
        // ]);
            $Berita = Berita::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'link' => $request->link,
                'foto' => $request->foto,
                'jenis_berita' => $request->jenis_berita,
            ]);
        return redirect()->route('Berita.index')
            ->with('success', 'Berita Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $Berita = Berita::where('id', $id)->first();
        return view('admin.Berita.show', compact('Berita'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $Berita = Berita::find($id);

        return $Berita;
    }

    public function update(Request $request, $id)
    {


        $Berita = Berita::findOrFail($id);
        $Berita->judul = $request->judul;
        $Berita->link = $request->link;
        $Berita->jenis = $request->jenis;
        $Berita->save();


        return redirect()->route('Berita.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        Berita::where('id', $id)->delete();

        return redirect()->route('Berita.index')
            ->with('delete', 'Berita Berhasil Dihapus');
    }
}
