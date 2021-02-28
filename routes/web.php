<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContacController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
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


Route::get('/home', [HomeController::class,'index']);

Route::prefix('game')->group(function(){
    Route::get('/list-game', [ProductController::class,'product']);
});

Route::get('news', function () {
    return view('news',[NewsController::class, 'news' => 'news','topic' => 'educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19']);
});

Route::prefix('program')->group(function(){
    Route::get('/daftar-program', [ProgramController::class,'program']);
});

Route::get('/about-us', [AboutController::class,'about']);


Route::resource('contact', ContacController::class);

