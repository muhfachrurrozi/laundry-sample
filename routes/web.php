<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\BayarController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\NamaController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PesanController;

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
    return view('index');
});

Auth::routes();


// Route member sebagai customer
Route::middleware(['auth', 'user-access:member'])->group(function () {

    Route::get('/member/index', [HomeController::class, 'memberHome'])->name('member.index');
    Route::resource('pesans', PesanController::class);
    Route::resource('namas', NamaController::class);
});

// Route kasir sebagai user
Route::middleware(['auth', 'user-access:kasir'])->group(function () {

    Route::get('/kasir/index', [HomeController::class, 'kasirHome'])->name('kasir.index');
});

// Route pemilik sebagai admin
Route::middleware(['auth', 'user-access:pemilik'])->group(function () {

    Route::get('/admin/index', [HomeController::class, 'adminHome'])->name('admin.index');
    Route::resource('tokos', TokoController::class);
    Route::resource('jasas', JasaController::class);
    Route::resource('users', UserController::class);
    Route::resource('proses', ProsesController::class);
    Route::resource('bayars', BayarController::class);
    Route::resource('details', DetailController::class);
    Route::resource('reports', StatusController::class);
});



// route index Home

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');