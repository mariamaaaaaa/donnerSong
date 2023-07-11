<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',['\App\Http\Controllers\homeController','index'])->name('home');
Route::get('/information',['\App\Http\Controllers\informationController','index'])->name('information');
Route::get('/Apropos',['\App\Http\Controllers\proposController','index'])->name('Apropos');

Route::get('/patients', function () {
    return view('patients');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/consiel', function () {
    return view('consiel');
});

Route::get('/donneur',['\App\Http\Controllers\donneurController','index'])->name('donneur');
Route::post('/donneur',['\App\Http\Controllers\donneurController','store'])->name('storeDonneur');





Route::post('/connexion',['\App\Http\Controllers\loginController','login'])->name('connexion');
Route::get('/connexion',['\App\Http\Controllers\loginController','show'])->name('connexion');

Route::get('/Déconnexion',['\App\Http\Controllers\loginController','logout'])->name('logout');


Route::get('/Inscription',['\App\Http\Controllers\inscriptionController','index'])->name('Inscription');
Route::post('/Inscription',['\App\Http\Controllers\inscriptionController','store'])->name('store')->middleware('Donneur');