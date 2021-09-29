<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\kategoriFoto;
use App\Models\galeriVidio;
use App\Models\galeriFoto;
use App\Models\Berita;
use App\Models\PPID;
use App\Models\Profil;

class LandingpageController extends Controller
{
    public function visi_misi()
    {
        $Profil = Profil::all()->first();
        return view('front.profil.visimisi', compact('Profil'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function struktur_organisasi()
    {
        $Profil = Profil::all()->first();
        return view('front.profil.struktur_organisasi', compact('Profil'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function tugas_fungsi()
    {
        $Profil = Profil::all()->first();
        return view('front.profil.tugasfungsi', compact('Profil'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function Berita()
    {
        $Profil = Profil::all()->first();
        return view('front.profil.tugasfungsi', compact('Profil'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // PPID
    public function daftarinformasipublik()
    {
        $PPID = PPID::where("jenis","Daftar Informasi Publik")->get();
        return view('front.PPID.informasi_publik', compact('PPID'));
    }
    public function informasiyangsertamerta()
    {
        $PPID = PPID::where("jenis","Informasi Yang Serta Merta")->get();
        return view('front.PPID.informasi_serta_merta', compact('PPID'));
    }

    public function informasiyangtersediasetiapsaat()
    {
        $PPID = PPID::where("jenis","Informasi Yang Tersedia Setiap Saat")->get();
        return view('front.PPID.informasi_setiap_saat', compact('PPID'));
    }
    public function informasiyangdiumumkansecaraberkala()
    {
        $PPID = PPID::where("jenis","Informasi Yang Diumumkan Secara Berkala")->get();
        return view('front.PPID.informasi_yang_diumumkan', compact('PPID'));
    }

    public function SOP()
    {
        $PPID = PPID::where("jenis","SOP")->get();
        return view('front.PPID.SOP', compact('PPID'));
    }

}
