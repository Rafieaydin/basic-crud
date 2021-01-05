<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\builderController;
use App\Http\Controllers\eloquentController;
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
    return view('table.table');
});
Route::get('/data-tables', function () {
    return view('table.data');
});

// Route::get('/user', [UserController::class, 'index']);

// Query builder
Route::get('/builder', [builderController::class, 'index']); // menampilkan route view
Route::get('/builder/create', [builderController::class, 'create']); // menampilkan route tambah
Route::post('/builder', [builderController::class, 'store']); // untuk menambah request ke database
Route::get('/builder/{builder_id}', [builderController::class, 'show']); // untuk menampilkan detail
Route::get('/builder/{builder_id}/edit', [builderController::class, 'edit']); // untuk menampilkan route edit
Route::put('/builder/{builder_id}', [builderController::class, 'update']); // untuk edit
Route::delete('/builder/{builder_id}', [builderController::class, 'destroy']); // untuk hapus

// eloquent
Route::resource('/eloquent', eloquentController::class);

