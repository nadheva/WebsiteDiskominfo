<?php

namespace App\Http\Controllers;
use App\Models\periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        $periode = periode::get();
        
        return view('admin.periode.index', compact('periode'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.periode.addperiode');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required',
            'semester' => 'required',
            'status' => 'required',
        ]);
        $periode = periode::create([
            'tahun' => $request->tahun,
            'semester' => $request->semester,
            'status' => $request->status,
        ]);
        return redirect()->route('periode.index')
            ->with('success', 'periode Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $periode = periode::find($id);
        return $periode;
    }

    public function update(Request $request, $id)
    {
        $periode = periode::findOrFail($id);
        $periode->tahun = $request->tahun;
        $periode->semester = $request->semester;
        $periode->status = $request->status;
        $periode->save();

        return redirect()->route('periode.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        periode::findOrFail($id)->delete();

        return redirect()->route('periode.index')
            ->with('delete', 'periode Berhasil Dihapus');
    }
}
