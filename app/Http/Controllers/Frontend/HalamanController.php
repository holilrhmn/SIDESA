<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pengumuman;

class HalamanController extends Controller
{
    public function pengumuman()
    {
        $pengumumans = Pengumuman::paginate(10);
        return view('frontend.pengumuman.all',[
            'pengumumans'=> $pengumumans,
        ]);
    }

    public function kontak()
    {
        return view('frontend.kontak.index');
    }
}
