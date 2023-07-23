<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\InstitusiController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\PublicCornerController;
use App\Http\Controllers\ProfilPejabatController;

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


// Route::get('/beranda', function () {
//     return view('beranda');
// });


// Route::get('/visimisi', function(){
//     return view('profil.visimisi',[
//         'halaman' => 'Profil',
//         'title' => 'Visi Misi'
//     ]);
// });
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

Route::get('/public-corner', function(){
    return view('publiccorner.index',[
        'halaman' => 'Halaman Public Corner',
        'title' => 'Public Corner'
    ]);
});

Route::get('/beranda', [BerandaController::class, 'publiccorner']);
Route::get('/public-corner/semua', [PublicCornerController::class, 'semua']);
Route::post('/public-corner/kirimpertanyaan', [PublicCornerController::class, 'kirimpertanyaan']);
Route::get('/public-corner/{public_corner:id}/view', [PublicCornerController::class, 'tampil']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('admin.dashboard');
})->middleware('auth');


Route::get('/institusi', [InstitusiController::class, 'institusi'])->middleware('auth');

//  Front End

Route::get('/visimisi', [InstitusiController::class, 'visimisi']);
Route::get('/motto', [InstitusiController::class, 'motto']);
Route::get('/tujuan', [InstitusiController::class, 'tujuan']);
Route::get('/kebijakan', [InstitusiController::class, 'kebijakan']);
Route::get('/struktur-organisasi', [InstitusiController::class, 'strukturorganisasi']);

Route::get('/institusi/editvisimisi', [InstitusiController::class, 'editVisimisi'])->middleware('auth');
Route::post('/institusi/updatevisimisi', [InstitusiController::class, 'updateVisimisi'])->middleware('auth');
// Route::post('/institusi/visimisi/halamanVisimisi', [InstitusiController::class, 'halamanVisimisi'])->middleware('auth');
Route::post('/institusi/visimisi/createvisimisi', [InstitusiController::class, 'createVisimisi'])->middleware('auth');

Route::get('/institusi/edittujuan', [InstitusiController::class, 'editTujuan'])->middleware('auth');
Route::post('/institusi/updatetujuan', [InstitusiController::class, 'updateTujuan'])->middleware('auth');
Route::post('/institusi/tujuan/halamanTujuan', [InstitusiController::class, 'halamanTujuan']);

Route::get('/institusi/editmotto', [InstitusiController::class, 'editMotto'])->middleware('auth');
Route::post('/institusi/updatemotto', [InstitusiController::class, 'updateMotto'])->middleware('auth');
Route::post('/institusi/motto/halamanMotto', [InstitusiController::class, 'halamanMotto']);

Route::get('/institusi/editkebijakan', [InstitusiController::class, 'editKebijakan'])->middleware('auth');
Route::post('/institusi/updatekebijakan', [InstitusiController::class, 'updateKebijakan'])->middleware('auth');
Route::post('/institusi/kebijakan/halamanKebijakan', [InstitusiController::class, 'halamanKebijakan']);

Route::get('/institusi/editstrukturorganisasi', [InstitusiController::class, 'editStrukturOrganisasi'])->middleware('auth');
Route::post('/institusi/updatestrukturorganisasi', [InstitusiController::class, 'updateStrukturOrganisasi'])->middleware('auth');
Route::post('/institusi/strukturorganisasi/halamanStrukturOrganisasi', [InstitusiController::class, 'halamanStrukturOrganisasi']);

Route::get('/profilpejabat', [ProfilPejabatController::class, 'ProfilPejabat'])->middleware('auth');
Route::get('/profilpejabat/editkepaladinkes', [ProfilPejabatController::class, 'dataKadinkes'])->middleware('auth');
Route::post('/profilpejabat/createkepaladinkes', [ProfilPejabatController::class, 'editKadinkes'])->middleware('auth');
Route::post('/profilpejabat/updatekepaladinkes', [ProfilPejabatController::class, 'updateKadinkes'])->middleware('auth');

Route::get('/profilpejabat/sekretariat', [ProfilPejabatController::class, 'dataSekretariat'])->middleware('auth');
Route::get('/profilpejabat/tambahsekretariat', [ProfilPejabatController::class, 'tambahSekretariat'])->middleware('auth');
Route::post('/profilpejabat/createsekretariat', [ProfilPejabatController::class, 'editSekretariat'])->middleware('auth');
Route::post('/profilpejabat/updatesekretariat', [ProfilPejabatController::class, 'updateSekretariat'])->middleware('auth');

Route::get('/institusi/editmaklumat', [InstitusiController::class, 'editMaklumat'])->middleware('auth');
Route::post('/institusi/updatemaklumat', [InstitusiController::class, 'updateMaklumat'])->middleware('auth');
Route::post('/institusi/maklumat/halamanMaklumat', [InstitusiController::class, 'halamanMaklumat']);

Route::get('/profilpejabat/bidangkesma', [ProfilPejabatController::class, 'dataBidangKesma'])->middleware('auth');
Route::get('/profilpejabat/tambahbidangkesma', [ProfilPejabatController::class, 'tambahBidangKesma'])->middleware('auth');
Route::post('/profilpejabat/createbidangkesma', [ProfilPejabatController::class, 'editBidangKesma'])->middleware('auth');
Route::post('/profilpejabat/updatebidangkesma', [ProfilPejabatController::class, 'updateBidangKesma'])->middleware('auth');

Route::get('/profilpejabat/bidangppk', [ProfilPejabatController::class, 'dataBidangPPK'])->middleware('auth');
Route::get('/profilpejabat/tambahbidangppk', [ProfilPejabatController::class, 'tambahBidangPPK'])->middleware('auth');
Route::post('/profilpejabat/createbidangppk', [ProfilPejabatController::class, 'editBidangPPK'])->middleware('auth');
Route::post('/profilpejabat/updatebidangppk', [ProfilPejabatController::class, 'updateBidangPPK'])->middleware('auth');

Route::get('/profilpejabat/bidangpk', [ProfilPejabatController::class, 'dataBidangPK'])->middleware('auth');
Route::get('/profilpejabat/tambahbidangpk', [ProfilPejabatController::class, 'tambahBidangPK'])->middleware('auth');
Route::post('/profilpejabat/createbidangpk', [ProfilPejabatController::class, 'editBidangPK'])->middleware('auth');
Route::post('/profilpejabat/updatebidangpk', [ProfilPejabatController::class, 'updateBidangPK'])->middleware('auth');

Route::get('/profilpejabat/bidangsdk', [ProfilPejabatController::class, 'dataBidangSDK'])->middleware('auth');
Route::get('/profilpejabat/tambahbidangsdk', [ProfilPejabatController::class, 'tambahBidangSDK'])->middleware('auth');
Route::post('/profilpejabat/createbidangsdk', [ProfilPejabatController::class, 'editBidangSDK'])->middleware('auth');
Route::post('/profilpejabat/updatebidangsdk', [ProfilPejabatController::class, 'updateBidangSDK'])->middleware('auth');

Route::get('/ppid/sejarah', [PpidController::class, 'sejarah'])->middleware('auth');
Route::get('/ppid/editsejarah', [PpidController::class, 'editSejarah'])->middleware('auth');
Route::post('/ppid/updatesejarah', [PpidController::class, 'updateSejarah'])->middleware('auth');
Route::post('/ppid/sejarah/halamanSejarah', [PpidController::class, 'halamanSejarah'])->middleware('auth');

Route::get('/ppid/struktur-tupoksi', [PpidController::class, 'stpk'])->middleware('auth');
Route::get('/ppid/tambahstpk', [PpidController::class, 'tambahStpk'])->middleware('auth');
Route::post('/ppid/createstpk', [PpidController::class, 'createStpk'])->middleware('auth');
Route::post('ppid/stpk/{ppid:id}/hapus', [PpidController::class, 'hapusStpk'])->middleware('auth');
Route::get('/ppid/stpk/{ppid:id}/edit', [PpidController::class, 'editStpk'])->middleware('auth');
Route::post('/ppid/stpk/{ppid:id}/update', [PpidController::class, 'updateStpk'])->middleware('auth');

Route::get('/ppid/checkSlug', [PpidController::class, 'checkSlug'])->middleware('auth');

Route::get('/ppid/tata-cara-permohonan', [PpidController::class, 'tcp'])->middleware('auth');
Route::get('/ppid/tambahtcp', [PpidController::class, 'tambahTcp'])->middleware('auth');
Route::post('/ppid/createtcp', [PpidController::class, 'createTcp'])->middleware('auth');
Route::post('ppid/tcp/{ppid:id}/hapus', [PpidController::class, 'hapusTcp'])->middleware('auth');
Route::get('/ppid/tcp/{ppid:id}/edit', [PpidController::class, 'editTcp'])->middleware('auth');
Route::post('/ppid/tcp/{ppid:id}/update', [PpidController::class, 'updateTcp'])->middleware('auth');

Route::get('/ppid/daftar-informasi-publik', [PpidController::class, 'dip'])->middleware('auth');
Route::get('/ppid/tambahdip', [PpidController::class, 'tambahDip'])->middleware('auth');
Route::post('/ppid/createdip', [PpidController::class, 'createDip'])->middleware('auth');
Route::post('ppid/dip/{ppid:id}/hapus', [PpidController::class, 'hapusDip'])->middleware('auth');
Route::get('/ppid/dip/{ppid:id}/edit', [PpidController::class, 'editDip'])->middleware('auth');
Route::post('/ppid/dip/{ppid:id}/update', [PpidController::class, 'updateDip'])->middleware('auth');

Route::get('/admin/public-corner', [PublicCornerController::class, 'publiccorner'])->middleware('auth');
Route::get('/admin/public-corner/{public_corner:id}/edit', [PublicCornerController::class, 'jawabPertanyaan'])->middleware('auth');
Route::post('/admin/public-corner/{public_corner:id}/update', [PublicCornerController::class, 'updateJawaban'])->middleware('auth');

Route::get('/konfig/user', [KonfigurasiController::class, 'datauser'])->middleware('auth');
Route::get('/konfig/tambahuser', [KonfigurasiController::class, 'tambahUser'])->middleware('auth');
Route::post('/konfig/createuser', [KonfigurasiController::class, 'createUser'])->middleware('auth');
Route::post('konfig/user/{user:id}/hapus', [KonfigurasiController::class, 'hapusUser'])->middleware('auth');
Route::get('/konfig/user/{user:id}/edit', [KonfigurasiController::class, 'editUser'])->middleware('auth');
Route::post('/konfig/user/{user:id}/update', [KonfigurasiController::class, 'updateUser'])->middleware('auth');

Route::get('/konfig/bidang', [KonfigurasiController::class, 'databidang'])->middleware('auth');
Route::get('/konfig/tambahbidang', [KonfigurasiController::class, 'tambahBidang'])->middleware('auth');
Route::post('/konfig/createbidang', [KonfigurasiController::class, 'createBidang'])->middleware('auth');
Route::post('konfig/bidang/{bidang:id}/hapus', [KonfigurasiController::class, 'hapusBidang'])->middleware('auth');

Route::get('/konfig/sosial-media', [KonfigurasiController::class, 'sosialmedia'])->middleware('auth');
Route::get('/konfig/tambahsm', [KonfigurasiController::class, 'tambahSm'])->middleware('auth');
Route::post('/konfig/createsm', [KonfigurasiController::class, 'createSm'])->middleware('auth');
Route::post('/konfig/sm/{sosial_media:id}/hapus', [KonfigurasiController::class, 'hapusSm'])->middleware('auth');

Route::get('/konfig/popup', [KonfigurasiController::class, 'popup'])->middleware('auth');
Route::get('/konfig/tambahpopup', [KonfigurasiController::class, 'tambahPopup'])->middleware('auth');
Route::post('/konfig/createpopup', [KonfigurasiController::class, 'createPopup'])->middleware('auth');
Route::post('/konfig/popup/updatepopup', [KonfigurasiController::class, 'updatePopup'])->middleware('auth');

Route::get('/ubah-password', [KonfigurasiController::class, 'gantipassword'])->middleware('auth');
Route::post('/ubah-password', [KonfigurasiController::class, 'ubahpassword'])->middleware('auth');

Route::get('/admin/bank-data-spm', [DataController::class, 'spm'])->middleware('auth');
Route::get('/admin/tambahdataspm', [DataController::class, 'tambahSpm'])->middleware('auth');
Route::post('/admin/createspm', [DataController::class, 'createSpm'])->middleware('auth');
Route::post('/admin/spm/{spm:id}/hapus', [DataController::class, 'hapusSpm'])->middleware('auth');

Route::get('/datainformasi/dokumen-publikasi', [DataController::class, 'dp'])->middleware('auth');
Route::get('/datainformasi/tambahdatadp', [DataController::class, 'tambahDp'])->middleware('auth');
Route::post('/datainformasi/createdp', [DataController::class, 'createDp'])->middleware('auth');
Route::post('/datainformasi/{data:id}/hapus', [DataController::class, 'hapusDp'])->middleware('auth');

Route::get('/datainformasi/peraturan-aturan', [DataController::class, 'pa'])->middleware('auth');
Route::get('/datainformasi/tambahdatapa', [DataController::class, 'tambahPa'])->middleware('auth');
Route::post('/datainformasi/createpa', [DataController::class, 'createPa'])->middleware('auth');
Route::post('/datainformasi/pa/{data:id}/hapus', [DataController::class, 'hapusPa'])->middleware('auth');

Route::get('/datainformasi/laporan-kinerja', [DataController::class, 'lk'])->middleware('auth');
Route::get('/datainformasi/tambahdatalk', [DataController::class, 'tambahLk'])->middleware('auth');
Route::post('/datainformasi/createlk', [DataController::class, 'createLk'])->middleware('auth');
Route::post('/datainformasi/lk/{data:id}/hapus', [DataController::class, 'hapusLk'])->middleware('auth');

Route::get('/datainformasi/saka-bakti-husada', [DataController::class, 'sbh'])->middleware('auth');
Route::get('/datainformasi/tambahdatasbh', [DataController::class, 'tambahSbh'])->middleware('auth');
Route::post('/datainformasi/createsbh', [DataController::class, 'createSbh'])->middleware('auth');
Route::post('/datainformasi/sbh/{data:id}/hapus', [DataController::class, 'hapusSbh'])->middleware('auth');

Route::get('/data/agenda', [DataController::class, 'agenda'])->middleware('auth');
Route::get('/data/tambahagenda', [DataController::class, 'tambahAgenda'])->middleware('auth');
Route::post('/data/createagenda', [DataController::class, 'createAgenda'])->middleware('auth');
Route::post('/data/agenda/{agenda:id}/hapus', [DataController::class, 'hapusAgenda'])->middleware('auth');

Route::get('/data/artikel', [PostController::class, 'artikel'])->middleware('auth');
Route::get('/data/tambahartikel', [PostController::class, 'tambahArtikel'])->middleware('auth');
Route::post('/data/createartikel', [PostController::class, 'createArtikel'])->middleware('auth');
Route::get('/data/artikel/{post:id}/edit', [PostController::class, 'editArtikel'])->middleware('auth');
Route::post('/data/artikel/{post:id}/update', [PostController::class, 'updateArtikel'])->middleware('auth');
Route::post('/data/artikel/{post:id}/hapus', [PostController::class, 'hapusArtikel'])->middleware('auth');

Route::get('/data/berita', [PostController::class, 'berita'])->middleware('auth');
Route::get('/data/tambahberita', [PostController::class, 'tambahBerita'])->middleware('auth');
Route::post('/data/createberita', [PostController::class, 'createBerita'])->middleware('auth');
Route::get('/data/berita/{post:id}/edit', [PostController::class, 'editBerita'])->middleware('auth');
Route::post('/data/berita/{post:id}/update', [PostController::class, 'updateBerita'])->middleware('auth');
Route::post('/data/berita/{post:id}/hapus', [PostController::class, 'hapusBerita'])->middleware('auth');


