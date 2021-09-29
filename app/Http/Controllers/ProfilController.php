<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $Profil = Profil::all();
        return view('admin.Profil.index', compact('Profil'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.Profil.tambah');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'pertanyaan' => 'required',
        //     'jawaban' => 'required',
        // ]);
            $Profil = Profil::create([
                'foto_struktur' => $request->foto_struktur,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'tugas' => $request->tugas,
                'fungsi' => $request->fungsi,

            ]);
        return redirect()->route('Profil.index')
            ->with('success', 'Profil Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $Profil = Profil::where('id', $id)->first();
        return view('admin.Profil.show', compact('Profil'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $Profil = Profil::find($id);

        return $Profil;
    }

    public function update(Request $request, $id)
    {


        $Profil = Profil::findOrFail($id);
        $Profil->judul = $request->judul;
        $Profil->link = $request->link;
        $Profil->jenis = $request->jenis;
        $Profil->save();


        return redirect()->route('Profil.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        Profil::where('id', $id)->delete();

        return redirect()->route('Profil.index')
            ->with('delete', 'Profil Berhasil Dihapus');
    }
}

