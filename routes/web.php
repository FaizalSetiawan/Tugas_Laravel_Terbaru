<?php

use Illuminate\Support\Facades\Route;

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
//Basic Route

Route::get('/', function () {
    return '<h1>Halo</h1>'
        . '<h2>Selamat Datang Di Web Saya<br></h2>'
        . 'Laravel, Emang Keren';
});

Route::get('/halaman2', function () {
    return view('animals_page');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/about', function () {
    $nama = "Muhammad Faizal Setiawan";
    $jenis_kelamin = "Laki-laki";
    $pendidikan_terakhir = "SMK";
    $pekerjaan = "IT";
    return view('Biodata', compact('nama','jenis_kelamin','pendidikan_terakhir','pekerjaan'));
});

//parameter

Route::get('/sample/{nama}', function (Request $request, $nama) {
    $nama2 = $nama;
    return view('sample', compact('nama2'));
});