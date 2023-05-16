<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    //gejala
    Route::get('/gejala', [AdminController::class, 'gejala'])->name('gejala.index');
    Route::get('/creategejela', [AdminController::class, 'creategejala'])->name('gejala.create');
    Route::post('/creategejela', [AdminController::class, 'storegejala'])->name('gejala.store');
    Route::get('/editgejala/{id}', [AdminController::class, 'editgejala'])->name('gejala.edit');
    Route::post('/editgejala/{id}/update', [AdminController::class, 'updategejala'])->name('gejala.update');
    Route::post('/destroygejala/{id}/destroy', [AdminController::class, 'destroygejala'])->name('gejala.destroy');
    //penyakit
    Route::get('/penyakit', [AdminController::class, 'penyakit'])->name('penyakit.index');
    Route::get('/createpenyakit', [AdminController::class, 'createpenyakit'])->name('penyakit.create');
    Route::post('/createpenyakit', [AdminController::class, 'storepenyakit'])->name('penyakit.store');
    Route::get('/editpenyakit/{id}', [AdminController::class, 'editpenyakit'])->name('penyakit.edit');
    Route::post('/editpenyakit/{id}/update', [AdminController::class, 'updatepenyakit'])->name('penyakit.update');
    Route::post('/destroypenyakit/{id}/destroy', [AdminController::class, 'destroypenyakit'])->name('penyakit.destroy');
    //basis pengetahuan
    Route::get('/basispengetahuan', [AdminController::class, 'basispengetahuan'])->name('basis.index');
    Route::get('/createbasispengetahuan', [AdminController::class, 'createbasis'])->name('basis.create');
    Route::post('/createbasispengetahuan', [AdminController::class, 'storebasis'])->name('basis.store');
    Route::get('/editbasispengetahuan/{id}', [AdminController::class, 'editbasis'])->name('basis.edit');
    Route::post('/editbasispengetahuan/{id}/update', [AdminController::class, 'updatebasis'])->name('basis.update');
    Route::post('/destroybasispengetahuan/{id}/destroy', [AdminController::class, 'destroybasis'])->name('basis.destroy');
});
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
