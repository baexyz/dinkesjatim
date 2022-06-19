<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\Profil;
use App\Models\Ppid;
use App\Models\Institusi;
use App\Models\PublicCorner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BerandaController extends Controller
{
    public function visimisi(){
        return view('visimisi', [
            'halaman' => 'Profil',
            'title' => 'Visi Misi'
        ]);
    }

    public function publiccorner(){
        $publiccorner = DB::table('public_corner')->where('tampil', '=', 1)->get();

        return view('beranda',[
            'publiccorner' => PublicCorner::all()
        ])->with('publiccorner', $publiccorner);

        // return view('beranda', [
        //     'halaman' => 'Halaman Public Corner',
        //     'title' => 'Public Corner',
        //     'public_corner' => PublicCorner::all()
        // ])->with('publiccorner', $publiccorner);
    }
}
