<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use App\Models\Profil;
use App\Models\Ppid;
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

        $institusi_visimisi = DB::table('institusi')->where('profil_id', '=', 1)->get();

        return view('profil.visimisi', [
            'halaman' => 'Profil',
            'title' => 'Visi Misi',
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_visimisi', $institusi_visimisi);

    }

    public function motto(){

        $institusi_motto = DB::table('institusi')->where('profil_id', '=', 3)->get();

        return view('profil.motto', [
            'halaman' => 'Profil',
            'title' => 'Motto',
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_motto', $institusi_motto);

    }
    public function tujuan(){

        $institusi_tujuan = DB::table('institusi')->where('profil_id', '=', 2)->get();

        return view('profil.tujuan', [
            'halaman' => 'Profil',
            'title' => 'Tujuan',
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_tujuan', $institusi_tujuan);

    }
    public function kebijakan(){

        $institusi_kebijakan = DB::table('institusi')->where('profil_id', '=', 4)->get();

        return view('profil.kebijakan', [
            'halaman' => 'Profil',
            'title' => 'Kebijakan',
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_kebijakan', $institusi_kebijakan);

    }
    public function strukturorganisasi(){

        $institusi_struktur_organisasi = DB::table('institusi')->where('profil_id', '=', 5)->get();

        return view('profil.strukturorganisasi', [
            'halaman' => 'Profil',
            'title' => 'Struktur Organisasi',
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_struktur_organisasi', $institusi_struktur_organisasi);

    }

    public function halamanVisimisi(Request $request){

        dd($request);
        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|dimensions:min_width=100,min_height=200',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function createVisimisi(Request $request){

        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => ''
        ]);

        // dd($validatedData);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function editVisimisi()
    {
        $institusi_visimisi = DB::table('institusi')->where('profil_id', '=', 1)->get();

        return view('admin.institusi.editvisimisi', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
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

        return redirect('/institusi')->with('success', 'New post has been added!');
        }

    public function halamanTujuan(Request $request){

        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function editTujuan()
    {
        $institusi_tujuan = DB::table('institusi')->where('profil_id', '=', 2)->get();

        return view('admin.institusi.edittujuan', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_tujuan', $institusi_tujuan);

    }

    public function updateTujuan(Request $request, Institusi $institusi){
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

        Institusi::where('profil_id', '=', 2)->update($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function halamanMotto(Request $request){

        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function editMotto()
    {
        $institusi_motto = DB::table('institusi')->where('profil_id', '=', 3)->get();

        return view('admin.institusi.editmotto', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_motto', $institusi_motto);

    }

    public function updateMotto(Request $request, Institusi $institusi)
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

        Institusi::where('profil_id', '=', 3)->update($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }



    public function halamanKebijakan(Request $request){

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

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function editKebijakan()
    {
        $institusi_kebijakan = DB::table('institusi')->where('profil_id', '=', 4)->get();

        return view('admin.institusi.editkebijakan', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_kebijakan', $institusi_kebijakan);

    }

    public function updateKebijakan(Request $request, Institusi $institusi)
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

        Institusi::where('profil_id', '=', 4)->update($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }


    public function halamanStrukturOrganisasi(Request $request){

        $validatedData = $request->validate([
            'profil_id' => 'required',
            'judul' => 'required|max:255',
            'bidang_id' => 'required',
            'image' => 'image',
            'body' => ''
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        // dd($validatedData);

        Institusi::create($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function editStrukturOrganisasi()
    {
        $institusi_struktur_organisasi = DB::table('institusi')->where('profil_id', '=', 5)->get();

        return view('admin.institusi.editstrukturorganisasi', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_struktur_organisasi', $institusi_struktur_organisasi);

    }

    public function updateStrukturOrganisasi(Request $request, Institusi $institusi)
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

        Institusi::where('profil_id', '=', 5)->update($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function halamanMaklumat(Request $request){
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

        return redirect('/institusi')->with('success', 'New post has been added!');

    }

    public function editMaklumat(){
        $institusi_maklumat = DB::table('institusi')->where('profil_id', '=', 7)->get();

        return view('admin.institusi.editmaklumat', [
            'bidang' => Bidang::all(),
            'profil' => Profil::all(),
            'institusi' => Institusi::all()
        ])->with('institusi_maklumat', $institusi_maklumat);
    }

    public function updateMaklumat(Request $request, Institusi $institusi){
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

        Institusi::where('profil_id', '=', 7)->update($validatedData);

        return redirect('/institusi')->with('success', 'New post has been added!');
    }

}
