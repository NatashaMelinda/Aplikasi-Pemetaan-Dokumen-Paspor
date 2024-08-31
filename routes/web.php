<?php

use App\Http\Controllers\CobaCobaController;
use App\Http\Controllers\CreateDataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatawnaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\DokumenWnaController;
use App\Http\Controllers\PenyimpananWnaController;
use App\Http\Controllers\PenyimpananWniController;
use App\Http\Controllers\PenyimpananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\HttpKernel\Profiler\Profile;


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
    return view('welcome');
})->middleware('auth');

Route::get('login', [AuthController::class,'login'])->name('login');
Route::post('login', [AuthController::class,'authenticating']);
Route::get('register', [AuthController::class,'register']);
Route::post('register', [AuthController::class,'registerProcess']);

Route::middleware('auth')->group(function () {
    Route::post('/datawni/search', [DokumenController::class, 'search'])->name('dokumen.search');
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('profile', [UserController::class, 'profile']);

    Route::get('datawni', [DokumenController::class, 'datawni']);
    Route::get('datawna', [DatawnaController::class, 'datawna']);
    Route::get('dashboard', [DashboardController::class, 'index']);
    //RouteWNI
    Route::get('create', [DokumenController::class, 'create'])->name('create');
    Route::get('edit', [DokumenController::class, 'datawni'])->name('darawni');
    Route::get('edit/{dokumen}', [DokumenController::class, 'edit'])->name('edit');
    // Route::get('/store/{dokumen}', [DokumenController::class, 'edit'])->name('edit');
    Route::put('update/{dokumen}', [DokumenController::class, 'update'])->name('update');

    // Route::post('create', [DokumenController::class, 'create'])->name('create');
    Route::post('/store', [DokumenController::class, 'store'])->name('store');
    // Route::post('/update', [DokumenController::class,'update'])->name('update');
    // Route::get('/destroy', [DokumenController::class,'destory'])->name('destroy');
    Route::delete('/dokumens/{dokumen}', [DokumenController::class, 'destroy'])->name('destroy');
    // Route::post('/update/{id}', [DokumenController::class,'update']);
    // Route::put('/update/{dokumen}', [DokumenController::class,'update'])->name('update');

    // web.php
    // Route::post('/user/store', [UserController::class, 'store']);
    // Route::post('/update/{id}', [DokumenController::class,'update']);
    // Route::get('/destroy/{id}', [DokumenController::class,'destory']);
    // Route::delete('dokumen/{dokumen}', [DokumenController::class, 'destroy'])->name('destroy');
    Route::get('/datawni', [DokumenController::class, 'datawni'])->name('datawni');
    Route::get('/cetak', [DokumenController::class, 'cetak'])->name('cetak');
    //RouteWNA
    Route::get('createwna', [DokumenWnaController::class, 'createwna'])->name('createwna');
    // Route::get('editwna', [DokumenWnaController::class, 'datawna'])->name('datawna');
    // Route::get('editwna/{dokumenwna}', [DokumenWnaController::class, 'editwna'])->name('editwna');
    //Route::put('/dokumens/{dokumenwna}', [DokumenWnaController::class, 'updatewna'])->name('updatewna');
    Route::get('/datawna', [DokumenWnaController::class, 'datawna'])->name('datawna');
    Route::post('/storewna', [DokumenWnaController::class, 'storewna'])->name('storewna');
    Route::delete('/dokumenswna/{dokumenwna}', [DokumenWnaController::class, 'destroywna'])->name('destroywna');
    //Route::post('/updatewna/{id}', [DokumenWnaController::class,'updatewna']);
    Route::put('updatewna/{dokumenwna}', [DokumenWnaController::class, 'updatewna'])->name('updatewna');


    Route::get('insert', [DokumenController::class, 'insertdokumen']);

    Route::get('penyimpananwni', [PenyimpananWniController::class, 'penyimpananwni']);
    Route::get('penyimpananwna', [PenyimpananWnaController::class, 'penyimpananwna']);

    Route::get('penyimpanan', [PenyimpananController::class, 'penyimpanan']);

    Route::get('logout', [AuthController::class, 'logout']);
});
Route::get('cobacoba', [CobaCobaController::class, 'cobacoba']);

//exel
Route::get('export', [DokumenController::class, 'export'])->name('export');