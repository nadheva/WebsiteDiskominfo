<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Alumni;
use App\Models\calender;
use App\Models\Jadwal;
use App\Models\Lab;
use App\Models\Loker;
use App\Models\User;
use App\Models\hmtp;
use App\Models\Perpustakaan;
use Illuminate\Http\Request;

use App\Models\Periode;

class LandingpageController extends Controller
{
    public function hmtp()
    {
        $hmtp = hmtp::whereId_periode(Periode::whereStatus("1")->pluck("status")->first())->first();
// dd($hmtp);
        return view('welcome', compact('hmtp'));

    }
}
