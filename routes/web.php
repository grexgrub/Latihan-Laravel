<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

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


Route::get('/', [ArtikelController::class, 'index']);
Route::get('/upload', [ArtikelController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/myartikel', [ArtikelController::class, 'myartikel']);
Route::get('/buatartikel', [ArtikelController::class, 'buatartikel']);
