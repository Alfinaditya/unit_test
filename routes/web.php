<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Models\M_Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('0117dashboard', []);
});

//KEGIATAN 1
Route::get('/Home', function () {
    return view('0117home', []);
});

Route::get('/Artikel', function () {
    return view('0117artikel', []);
});

Route::get('/login', function () {
    return view('0017login', []);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'action']);

Route::post('/insert', function (Request $request) {
    Log::alert($request->all());
    $mkaryawan = new M_Karyawan();
    $mkaryawan->nama = $request->nama;
    $mkaryawan->nik = $request->nik;
    $mkaryawan->id_kar = $request->id_kar;
    $mkaryawan->save();
    return response()->json('success', 201);
});
Route::post('/update', function (Request $request) {
    Log::alert($request->all());
    $mkaryawan = new M_Karyawan();
    $mkaryawan->nama = $request->nama;
    $mkaryawan->nik = $request->nik;
    $mkaryawan->id_kar = $request->id_kar;
    $mkaryawan->save();
    return response()->json('success', 201);
});

Route::get('/ContactUs', function () {
    return view('0117contactUs', [
        "nama" => "Mahardika Dwi Rani",
        "kontak" => "0859187420215",
        "email" => "mahardikadwirani@gmail.com",
        "ig" => " @Mahardika_dr",
        "twt" => "@Mahardika",
        "ytb" => "@Mahardika drn",
        "image" => "Dika.png"
    ]);
});

//KEGIATAN 2
Route::get('/Select', [MahasiswaController::class, 'select']);
Route::get('/SelectWhere', [MahasiswaController::class, 'selectWhere']);
Route::get('/SelectJoin', [MahasiswaController::class, 'selectJoin']);
Route::get('/JoinLike', [MahasiswaController::class, 'joinLike']);
//KEGIATAN 4
Route::get('karyawan/generate', [KaryawanController::class, 'generate']);
//KEGIATAN 3
Route::resource('karyawan', KaryawanController::class);
