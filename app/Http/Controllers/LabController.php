<?php

namespace App\Http\Controllers;
use App\Models\lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $Lab = Lab::all();
        return view('admin.Lab.index', compact('Lab'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.Lab.tambah');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'pertanyaan' => 'required',
        //     'jawaban' => 'required',
        // ]);
            $Lab = Lab::create([
                'deskripsi' => $request->deskripsi,
                'kepala_lab' => $request->kepala_lab,
                'asisten_lab' => $request->asisten_lab,
                'id_periode' => $request->id_periode,
            ]);
        return redirect()->route('Lab.index')
            ->with('success', 'Lab Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $Labs = Lab::where('id', $id)->first();
        return view('admin.Lab.show', compact('Lab'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function edit($id)
    {
        $Lab = Lab::find($id);

        return $Lab;
    }

    public function update(Request $request, $id)
    {


        $Lab = Lab::findorfail($id);
        $Lab->deskripsi = $request->deskripsi;
        $Lab->kepala_lab = $request->kepala_lab;
        $Lab->asisten_lab = $request->asisten_lab;
        $Lab->id_periode = $request->id_periode;
        $Lab->save();


        return redirect()->route('Lab.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        Lab::where('id', $id)->delete();

        return redirect()->route('Lab.index')
            ->with('delete', 'Lab Berhasil Dihapus');
    }
}
