<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\Profil;
use App\Models\Institusi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class InstitusiController extends Controller
{

    public function institusi(){
        return view('admin.institusi.intitusi');
    }

    public function visimisi(){

        return view('admin.institusi.visimisi', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all()
        ]);

    }

    public function halamanVisimisi(Request $request){

        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:255',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        // dd($validatedData);

        Institusi::create($validatedData);

        return redirect('/dashboard')->with('success', 'New post has been added!');

    }

    public function editVisimisi()
    {
        $institusi_visimisi = DB::table('institusi')->where('profil_id', '=', 1)->get();

        return view('admin.institusi.editvisimisi', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all()
        ])->with('institusi_visimisi', $institusi_visimisi);

    }

    public function updateVisimisi(Request $request, Institusi $institusi)
    {
        $rules = [
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:255',
            'body' => ''
        ];

        $validatedData = $request->validate($rules);


        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::where('profil_id', '=', 1)->update($validatedData);

        return redirect('/dashboard')->with('success', 'New post has been added!');
        }




}
