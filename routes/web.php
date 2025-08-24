<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;
use App\Http\Controllers\MaklonController;

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

// Route::get('/', [CVController::class, 'create'])->name('cv.create');
// Route::post('/cv/preview', [CVController::class, 'preview'])->name('cv.preview');
// Route::post('/cv/download', [CVController::class, 'download'])->name('cv.download');

Route::get('/', [MaklonController::class, 'index'])->name('maklon.index');