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

Route::get('/addForm', function () {
     return view('addForm');
});

// Route::get('/getMahasiswa', [App\Http\Controllers\HomeController::class, 'getMahasiswa']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'getMahasiswa']);
Route::get('/getMahasiswa/{keyword}', [App\Http\Controllers\HomeController::class, 'getMahasiswa']);
Route::get('/deleteMahasiswa/{id}', [App\Http\Controllers\HomeController::class, 'deleteMahasiswa']);
Route::get('/addMahasiswa', [App\Http\Controllers\HomeController::class, 'addMahasiswa']);
Route::get('/editForm/{mahasiswa}', [App\Http\Controllers\HomeController::class, 'getMahasiswaById']);
Route::get('/updateMahasiswa/{id}', [App\Http\Controllers\HomeController::class, 'updateMahasiswa']);
//Route::get('/', [App\Http\Controllers\HomeController::class, 'getMahasiswa']);
