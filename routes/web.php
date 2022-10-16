<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\SantriController;
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


// Route::controller(GuruController::class)->group(function(){
//     Route::get('/guru', 'index')->name('guru.index');
//     Route::get('/guru/create', 'create')->name('guru.create');
//     Route::post('/guru/store', 'store')->name('guru.store');
//     Route::get('/guru/detail/{id}', 'show')->name('guru.show');
// });

Route::controller(SantriController::class)->group(function(){
    Route::get('/santri', 'index')->name('santri.index');
    Route::get('/santri/create', 'create')->name('santri.create');
    Route::post('/santri/store', 'store')->name('santri.store');
    Route::get('/santri/detail/{id}', 'show')->name('santri.show');
    Route::get('/santri/delete/{id}', 'destroy')->name('santri.destroy');
    Route::get('/santri/edit/{id}', 'edit')->name('santri.edit');
    Route::put('/santri/update/{id}', 'update')->name('santri.update');
});