<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\prodiController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\resmhsController;
use App\Http\Controllers\resprodiController;
use App\Http\Controllers\resprofilController;
use App\Http\Controllers\mahasiswaController;
use Illuminate\Routing\Route as RoutingRoute;


// Route::resource('resprofil', resprofilController::class);
Route::get('/resprofil', [resprofilController::class, 'index']);
Route::get('/resprofil/create', [resprofilController::class, 'create']);
Route::get('/resprofil/update', [resprofilController::class, 'update']);
Route::get('/resprofil/destroy', [resprofilController::class, 'destroy']);

// Route::resource('resprodi', resprodiController::class);
Route::get('/resprodi/create', [resprodiController::class, 'create']);
Route::get('/resprodi/update', [resprodiController::class, 'update']);
Route::get('/resprodi/destroy', [resprodiController::class, 'destroy']);
Route::get('/resprodi', [resprodiController::class, 'index']);

Route::get('/profil', [profilController::class, 'index']);
Route::get('/prodi', [prodiController::class, 'index']);

Route::get('/resmhs', [resmhsController::class, 'index']);
Route::get('/resmhs/create', [resmhsController::class, 'create']);
Route::get('/resmhs/update', [resmhsController::class, 'update']);
Route::get('/resmhs/destroy', [resmhsController::class, 'destroy']);
Route::resource('resmhs', resmhsController::class);

Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
Route::get('/mhs', [mhsController::class, 'index'])->name('mhs');
Route::get('/home', [homeController::class, 'index'])->name('home');
Route::get('/mhs/show', [mhsController::class, 'show'])->name('mhs-show');
Route::get('/mhs/perulangan', [mhsController::class, 'perulangan'])->name('mhs-perulangan');

// Route::get('/mahasiswa', [mahasiswaController::class, 'index'])->name('mahasiswa');
// Route::get('/prodi', [prodiController::class, 'index'])->name('prodi');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function (){
    echo "Selamat Datang";
});

Route::get('/index', function (){
    echo "Uji coba route dengan methode GET";
});

//
Route::post('/save', function (){
    echo "Uji coba route dengan methode POST";
});

//
Route::put('/update', function (){
    echo "Uji coba route PUT";
});

//
Route::delete('/delete', function (){
    echo "Uji coba route DELETE";
});

Route::match(['get','post'], '/kirim', function (){
    echo "Uji coba route dengan methode GET dan POST";
});

Route::get('/show/{id?}', function ($id=1){
    echo "Nilai GET parameter id=".$id;
});


Route::get('/edit/{nama}', function ($nama){
    echo "Nilai GET parameter nama=".$nama;
})->where('nama','[A-Za-z]+');


Route::get('/start', function (){
    echo "<a href='".route('coba')."'>Start</a>";
})->name('start');

Route::get('/coba', function (){
    echo "<a href='".route('start')."'>Kembali</a>";
})->name('coba');

Route::get('/', function (){
    $title = "WebSaya.com";
    $slug = "home";
    $konten = "Ini adalah konten WebSaya.com";
    return view('konten.home', compact('title', 'slug', 'konten'));
});
Route::get('/home', function (){
    $title = "WebSaya.com";
    $slug = "home";
    $konten = "Ini adalah konten WebSaya.com";
    return view('konten.home', compact('title', 'slug', 'konten'));
});
// Route::get('/profil', function (){
//     $title = "WebSaya.com";
//     $slug = "profil";
//     return view('konten.profil', compact('title', 'slug'));
// });
// Route::get('/prodi', function (){
//     $title = "WebSaya.com";
//     $slug = "prodi";
//     return view('konten.prodi', compact('title', 'slug'));
// });

// Route::get('/mahasiswa', function (){
//     $title = "WebSaya.com";
//     $slug = "mahasiswa";
//     return view('konten.mahasiswa', compact('title', 'slug'));
// });
