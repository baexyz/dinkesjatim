<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;

class InstitusiController extends Controller
{
    public function visimisi(){
        return view('admin.institusi.visimisi', [
            'bidang' => Bidang::all()
        ]);
    }
}
