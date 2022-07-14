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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index']);
Route::get('/buku/create', [App\Http\Controllers\BukuController::class, 'create']);
Route::post('/buku', [App\Http\Controllers\BukuController::class, 'store']);
Route::get('/buku/{id}/edit', [App\Http\Controllers\BukuController::class, 'edit']);
Route::patch('/buku/{id}', [App\Http\Controllers\BukuController::class, 'update']);
Route::delete('/buku/{id}', [App\Http\Controllers\BukuController::class, 'destroy']);

Route::get('/pengarang', [App\Http\Controllers\PengarangController::class, 'index']);
Route::get('/pengarang/create', [App\Http\Controllers\PengarangController::class, 'create']);
Route::post('/pengarang', [App\Http\Controllers\PengarangController::class, 'store']);
Route::get('/pengarang/{id}/edit', [App\Http\Controllers\PengarangController::class, 'edit']);
Route::patch('/pengarang/{id}', [App\Http\Controllers\PengarangController::class, 'update']);
Route::delete('/pengarang/{id}', [App\Http\Controllers\PengarangController::class, 'destroy']);