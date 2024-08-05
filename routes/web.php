<?php

use App\Http\Controllers\AdminTinTucController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TinAdminController;
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


Route::get('/', function () {
    return view('clients.index');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');


//client
Route::get('/', [TinTucController::class, 'index',])->name('home');
Route::get('chitiet/{id}', [TinTucController::class, 'detail']);
Route::get('tintuc/{id}', [TinTucController::class, 'tinTuc']);
Route::get('/search', [TinTucController::class, 'search'])->name('search');
// admin danh mục
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminTinTucController::class, 'index'])->name('admin.index');
    Route::get('/create', [AdminTinTucController::class, 'create'])->name('admin.create');
    Route::post('/', [AdminTinTucController::class, 'store'])->name('admin.store');
    Route::get('/{id}/edit', [AdminTinTucController::class, 'edit'])->name('admin.edit');
    Route::put('/{id}', [AdminTinTucController::class, 'update'])->name('admin.update');
    Route::delete('/{id}', [AdminTinTucController::class, 'destroy'])->name('admin.destroy');
});
// admin tin tức
Route::prefix('tintucadmin')->group(function () {
    Route::get('/', [TinAdminController::class, 'index'])->name('admin.indextt');
    Route::get('/create', [TinAdminController::class, 'create'])->name('admin.creatett');
    Route::post('/', [TinAdminController::class, 'store'])->name('admin.storett');
    Route::get('/{id}/edit', [TinAdminController::class, 'edit'])->name('admin.edittt');
    Route::put('/{id}', [TinAdminController::class, 'update'])->name('admin.updatett');
    Route::delete('/{id}', [TinAdminController::class, 'destroy'])->name('admin.destroytt');
});

