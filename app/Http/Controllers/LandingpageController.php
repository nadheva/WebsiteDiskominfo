<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use App\Models\Profil;

class LandingpageController extends Controller
{
    public function visi_misi()
    {
        $Profil = Profil::all()->first();
        return view('visimisi', compact('Profil'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function struktur_organisasi()
    {
        $Profil = Profil::all()->first();
        return view('struktur_organisasi', compact('Profil'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function tugas_fungsi()
    {
        $Profil = Profil::all()->first();
        return view('tugasfungsi', compact('Profil'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
