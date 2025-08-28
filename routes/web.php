<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MaklonController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CategoryController;

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

//CV Generator Login
Route::controller(CVController::class)->group(function () {
    Route::get('/cv-generator', [CVController::class, 'create'])->name('cv.create');
    Route::post('/cv/preview', [CVController::class, 'preview'])->name('cv.preview');
    Route::post('/cv/download', [CVController::class, 'download'])->name('cv.download');
});

//Maklon Dashboard Route
Route::controller(MaklonController::class)->group(function () {
    Route::get('/', 'index')->name('maklon.index');
    Route::get('daftar-sekarang', 'register')->name('maklon.register');
    Route::get('menulis-sekarang', 'write')->name('maklon.write');
    Route::get('bagikan-sekarang', 'sharing')->name('maklon.sharing');
    Route::get('optimasi-sekarang', 'optimization')->name('maklon.optimization');
    Route::get('desain-sekarang', 'designNow')->name('maklon.designnow');
    Route::get('video-sekarang', 'videoNow')->name('maklon.videonow');
    
    Route::get('faq','faq')->name('maklon.faq');
    Route::get('tentang-kita','tentangKita')->name('maklon.aboutus');
    Route::get('karir','karir')->name('maklon.carrer');
    Route::get('kebijakan-privasi','kebijakanPrivasi')->name('maklon.privacy');
    Route::get('contact-us','contactUs')->name('maklon.contact');
});

//Maklon Admin Login Route
Route::controller(UserController::class)->group(function () {
    Route::get('login', 'index')->name('user.login');
    Route::get('daftar','register')->name('user.register');
    Route::get('lost-password','lostPassword')->name('user.lostpassword');
});


Route::prefix('admin/article')->controller(ArticleController::class)->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article', [ArticleController::class, 'store'])->name('article.store');
    Route::post('/suggest-ai', [ArticleController::class, 'suggestAIContent'])->name('article.suggest-ai');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('article.show');
    Route::get('/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/{id}', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');
    Route::post('/generate-ai', [ArticleController::class, 'generateAIContent'])->name('article.generate-ai');
});

Route::get('/category/{id}', [CategoryController::class, 'get'])->name('category.get');

// Route::controller(ArticleController::class)->group(function () {
//     Route::get('article','index')->name('article.index');
//     Route::get('/article/create', 'create')->name('article.create');
//     Route::post('/article', 'store')->name('article.store');
//     Route::get('/article/{id}/edit', 'edit')->name('article.edit');
//     Route::put('/article/{id}', 'update')->name('article.update');
//     Route::delete('/article/{id}', 'destroy')->name('article.destroy');
// });


//Admin Menu Routes
Route::controller(ContentController::class)->name('content.')->group(function () {
    //Admin Menu Route
    Route::get('dashboard', 'index')->name('dashboard');
    Route::get('seo-tools','seoTools')->name('seo-tools');
    Route::get('monetization','monetization')->name('monetization');
    Route::get('user-setting','userSetting')->name('user-setting');
    Route::get('setting','setting')->name('setting');
    Route::get('category','category')->name('category');
    Route::get('tag','tag')->name('tag');
    Route::get('template','template')->name('template');
    Route::get('keyword','keyword')->name('keyword');
    Route::get('role','role')->name('role');
    Route::get('monetization-setting','monetizationSetting')->name('monetization-setting');
    Route::get('media-library','mediaLibrary')->name('media-library');
    Route::get('languange','language')->name('language');
});

