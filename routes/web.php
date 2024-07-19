<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinTucController;

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

Route::get('/', [TinTucController::class,'index',])->name('home');
Route::get('chitiet/{id}', [TinTucController::class,'detail']);
Route::get('tintuc/{id}', [TinTucController::class,'tinTuc']);
Route::get('/search', [TinTucController::class, 'search'])->name('search');
