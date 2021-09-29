<?php

namespace App\Http\Controllers;
use App\Models\calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $calendar = calendar::all();
        return view('admin.calendar.index', compact('calendar'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.calendar.tambah');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'pertanyaan' => 'required',
        //     'jawaban' => 'required',
        // ]);
            $calendar = calendar::create([
                'deskripsi' => $request->deskripsi,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'struktur_organisasi' => $request->struktur_organisasi,
                'id_periode' => $request->id_periode,
            ]);
        return redirect()->route('calendar.index')
            ->with('success', 'calendar Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $calendars = calendar::where('id', $id)->first();
        return view('calendar.show', compact('calendar'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $calendar = calendar::find($id);

        return view('calendar.editcalendar', compact('calendar'));
    }

    public function update(Request $request, $id)
    {


        $calendar = calendar::find($id);
        $calendar->nama_calendar = $request->get('nama_calendar');
        $calendar->isi = $request->get('isi');
        $calendar->urutan = $request->get('urutan');

        $calendar->save();


        return redirect()->route('calendar.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        calendar::where('id', $id)->delete();

        return redirect()->route('calendar.index')
            ->with('delete', 'calendar Berhasil Dihapus');
    }
}
