<?php

namespace App\Http\Controllers;
use App\Models\PPID;
use Illuminate\Http\Request;

class PPIDController extends Controller
{
    public function index()
    {
        $PPID = PPID::all();
        return view('admin.PPID.index', compact('PPID'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.PPID.tambah');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'pertanyaan' => 'required',
        //     'jawaban' => 'required',
        // ]);
            $PPID = PPID::create([
                'judul' => $request->judul,
                'link' => $request->link,
                'jenis' => $request->jenis,
            ]);
        return redirect()->route('PPID.index')
            ->with('success', 'PPID Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $PPID = PPID::where('id', $id)->first();
        return view('admin.PPID.show', compact('PPID'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $PPID = PPID::find($id);

        return $PPID;
    }

    public function update(Request $request, $id)
    {


        $PPID = PPID::findOrFail($id);
        $PPID->judul = $request->judul;
        $PPID->link = $request->link;
        $PPID->jenis = $request->jenis;
        $PPID->save();


        return redirect()->route('PPID.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        PPID::where('id', $id)->delete();

        return redirect()->route('PPID.index')
            ->with('delete', 'PPID Berhasil Dihapus');
    }
}
