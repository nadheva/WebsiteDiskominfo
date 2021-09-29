<?php

namespace App\Http\Controllers;
use App\Models\Loker;
use Illuminate\Http\Request;

class LokerController extends Controller
{
    public function index()
    {
        $Loker = Loker::all();
        return view('admin.Loker.index', compact('Loker'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.Loker.tambah');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'pertanyaan' => 'required',
        //     'jawaban' => 'required',
        // ]);
            $Loker = Loker::create([
                'judul' => $request->judul,
                'posisi' => $request->posisi,
                'link' => $request->link,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status,
            ]);
        return redirect()->route('Loker.index')
            ->with('success', 'Loker Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $Lokers = Loker::where('id', $id)->first();
        return view('admin.Loker.show', compact('Loker'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $Loker = Loker::find($id);

        return $Loker;
    }

    public function update(Request $request, $id)
    {


        $Loker = Loker::findorfail($id);
        $Loker->judul = $request->judul;
        $Loker->posisi = $request->posisi;
        $Loker->link = $request->link;
        $Loker->deskripsi = $request->deskripsi;
        $Loker->status = $request->status;
        $Loker->save();


        return redirect()->route('Loker.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        Loker::where('id', $id)->delete();

        return redirect()->route('Loker.index')
            ->with('delete', 'Loker Berhasil Dihapus');
    }
}
