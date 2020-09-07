<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pengumuman;
use App\Perkebunan;
use App\Warga;
use App\Profil;
class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::paginate(2);
        return view('frontend.pengumuman.index',[
            'pengumuman'=> $pengumuman,
        ]);
    }

    public function profil()
    {
        $warga = Warga::all()->count();
        $kebun = Perkebunan::all()->count();
        $profil = Profil::all();
        return view('frontend.profil.index',compact('warga','kebun','profil'));
    }

    public function show(Pengumuman $pengumuman)
    {
        return view('frontend.pengumuman.show',[
            'pengumuman'=> $pengumuman,
        ]);
    }


}
