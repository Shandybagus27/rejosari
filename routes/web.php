<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BidangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\PaketwisController;
use App\Http\Controllers\ProgramdarwisController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Barang;

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
    return view('blog');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/peta', function () {
    return view('peta');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pokdarwis', function () {
    return view('pokdarwis');
});

Route::get('/pertanian', function () {
    return view('pertanian');
});

Route::get('/perternakan', function () {
    return view('perternakan');
});

Route::get('/alam', function () {
    return view('alam');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/paket', function () {
    return view('paket');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/produk', function () {
    return view('produk');
});

// Route::get('/warung', function () {
//     return view('e-commerce');
// });

Route::get('/warung', [BarangController::class, 'index'])->name('e-commerce');

// Auth::routes();\

// Route::usermiddleware('auth', 'verified')->group(function () {
//     Route::get('/dashboard', function(){
//         return view('dashboard.index', [
//             'title' => 'Dashboard'
//         ]);
//     });
//});
// Route::middleware(['auth'])->group(function () {
//     Route::get('/warung', [BarangController::class, 'index'])->name('e-commerce');
//     Route::get('/pesanwarung', function () {
//         return view('pesan');
//     });
//     Route::get('pesanwarung/{id}', [PesanController::class, 'index'])->name('pesan.index');
//     Route::post('pesanwarung/{id}', [PesanController::class, 'pesan'])->name('pesan.pesan');

//     Route::get('check-out', [PesanController::class, 'check_out'])->name('pesan.check_out');
//     Route::delete('check-out/{id}', [PesanController::class, 'delete'])->name('pesan.delete');

//     Route::get('konfirmasi-check-out', [PesanController::class, 'konfirmasi'])->name('pesan.konfirmasi');
// });

Route::get('/pesanwarung', function () {
    return view('pesan');
});

Route::get('pesanwarung/{id}',[PesanController::class,'index'])-> name('pesan.index');
Route::post('pesanwarung/{id}',[PesanController::class,'pesan'])-> name('pesan.pesan');

Route::get('check-out',[PesanController::class,'check_out'])-> name('pesan.check_out');
Route::delete('check-out/{id}', [PesanController::class,'delete'])->name('pesan.delete');

Route::get('konfirmasi-check-out', [PesanController::class,'konfirmasi'])->name('pesan.konfirmasi');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


Route::get('history', [HistoryController::class, 'index'])->name('history.index');
Route::get('history/{id}', [HistoryController::class, 'detail'])->name('history.detail');



Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');

Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard.admin');
// Route::get('/admin', function () {
//     return view('dashboard/admin');
// });

Route::get('/loginuser', [UserController::class, 'index'])->name('loginuser');
Route::post('/loginuser', [UserController::class, 'loginuser'])->name('loginuser');
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/login', function () {
    return view('auth.Login');
})->name('login');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginadmin'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);

// Route::middleware('auth', 'verified')->group(function () {
//     Route::get('/dashboard', function(){
//         return view('dashboard.index', [
//             'title' => 'Dashboard'
//         ]);
//     });

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     // Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
//     // Route::get('/admin/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
//     Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard.admin');
//     // Route::get('/admin', function () {
//     //     return view('dashboard/admin');
//     // });
// });

Route::get('/pesananbarang', [PesanController::class, 'index1'])->name('dashboard.pesanbarang.index');

Route::get('/pesanpaket/create', [PesananController::class, 'create'])->name('pesanpaket.create');
Route::post('/pesanpaket', [PesananController::class, 'store'])->name('pesanpaket.store');

Route::get('/barang', [BarangController::class, 'index1'])->name('dashboard.barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('dashboard.barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('dashboard.barang.store');

Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('dashboard.barang.edit');
Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('dashboard.barang.update');
Route::delete('/barang/{id}', [BarangController::class, 'delete'])->name('dashboard.barang.delete');

Route::get('/paketwis', [PaketController::class, 'index'])->name('dashboard.paket.index');
Route::get('/paketwis/create', [PaketController::class, 'create'])->name('dashboard.paket.create');
Route::post('/paketwis', [PaketController::class, 'store'])->name('dashboard.paket.store');
Route::get('/paketwis/edit/{id}', [PaketController::class, 'edit'])->name('dashboard.paket.edit');
Route::put('/paketwis/update/{id}', [PaketController::class, 'update'])->name('dashboard.paket.update');
Route::delete('/paketwis/{id}', [PaketController::class, 'delete'])->name('dashboard.paket.delete');

Route::get('/paketuser', [PaketwisController::class, 'index']);
Route::get('/pesan/{id}', [PaketwisController::class, 'show'])->name('pesan.user');


// Route::middleware('auth', 'verified')->group(function () {
// Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/pesanwis', [PesananController::class, 'index'])->name('dashboard.pesanpaket.index');

//Route::get('/pesanwis/show', [PesananController::class, 'show'])->name('dashboard.pesanpaket.show');

Route::get('/pesanwis/create', [PesananController::class, 'create'])->name('dashboard.pesanpaket.create');
Route::post('/pesanwis', [PesananController::class, 'store'])->name('dashboard.pesanpaket.store');

Route::get('/pesanwis/edit/{id}', [PesananController::class, 'edit'])->name('dashboard.pesanpaket.edit');
Route::put('/pesanwis/update/{id}', [PesananController::class, 'update'])->name('dashboard.pesanpaket.update');
Route::delete('/pesanwis/{id}', [PesananController::class, 'delete'])->name('dashboard.pesanpaket.delete');


Route::get('/jenis', [JenisController::class, 'index'])->name('dashboard.jns_paket.index');

Route::get('/jenis/create', [JenisController::class, 'create'])->name('dashboard.jns_paket.create');

Route::post('/jenis', [JenisController::class, 'store'])->name('dashboard.jns_paket.store');

Route::get('/jenis/edit/{id}', [JenisController::class, 'edit'])->name('dashboard.jns_paket.edit');

Route::put('/jenis/update/{id}', [JenisController::class, 'update'])->name('dashboard.jns_paket.update');

Route::delete('/jenis/{id}', [JenisController::class, 'delete'])->name('dashboard.jns_paket.delete');


Route::get('/kategori', [KategoriController::class, 'index'])->name('dashboard.kategori.index');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('dashboard.kategori.create');
Route::post('/kategori', [KategoriController::class, 'store'])->name('dashboard.kategori.store');
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('dashboard.kategori.edit');
Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('dashboard.kategori.update');
Route::delete('/kategori/{id}', [KategoriController::class, 'delete'])->name('dashboard.kategori.delete');


Route::get('/bidangpokdar', [BidangController::class, 'index']);
Route::get('/bidangpokdar/create', [BidangController::class, 'create'])->name('dashboard.bidangpokdar.create');

Route::get('/programpokdar', [ProgramdarwisController::class, 'index']);
Route::get('/programpokdar/create', [ProgramdarwisController::class, 'create'])->name('dashboard.programpokdar.create');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
