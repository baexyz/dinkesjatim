<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InstitusiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/visimisi', function(){
    return view('profil.visimisi',[
        'halaman' => 'Profil',
        'title' => 'Visi Misi'
    ]);
});
Route::get('/motto', function(){
    return view('profil.motto',[
        'halaman' => 'Profil',
        'title' => 'Motto'
    ]);
});
Route::get('/tujuan', function(){
    return view('profil.tujuan',[
        'halaman' => 'Profil',
        'title' => 'Tujuan'
    ]);
});
Route::get('/kebijakan', function(){
    return view('profil.kebijakan',[
        'halaman' => 'Profil',
        'title' => 'Kebijakan'
    ]);
});
Route::get('/struktur-organisasi', function(){
    return view('profil.strukturorganisasi',[
        'halaman' => 'Profil',
        'title' => 'Struktur Organisasi'
    ]);
});
Route::get('/profil-pejabat', function(){
    return view('profil.profilpejabat',[
        'halaman' => 'Profil',
        'title' => 'Profil Pejabat'
    ]);
});
Route::get('/penghargaan', function(){
    return view('profil.penghargaan',[
        'halaman' => 'Profil',
        'title' => 'Penghargaan'
    ]);
});
Route::get('/maklumat', function(){
    return view('profil.maklumat',[
        'halaman' => 'Profil',
        'title' => 'Maklumat Pelayanan'
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('admin.dashboard');
})->middleware('auth');


Route::get('/institusi/visimisi', [InstitusiController::class, 'visimisi'])->middleware('auth');
