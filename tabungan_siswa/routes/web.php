<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabunganController;
use App\Models\Tabungan;

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



Route::get('/', [TabunganController::class, 'index'])->name('dashboard');
Route::get('/create', [TabunganController::class, 'create'])->name('create');
Route::get('/edit/{id}', [TabunganController::class, 'edit'])->name('edit');
Route::patch('/edit/{id}', [TabunganController::class, 'update'])->name('update');
Route::post('/store', [TabunganController::class, 'store'])->name('store');
Route::get('/wd/{id}', [TabunganController::class, 'withdraw'])->name('wd');
Route::get('/depo/{id}', [TabunganController::class, 'deposit'])->name('depo');
Route::put('/update/wd/{id}', [TabunganController::class, 'updatewd'])->name('withdraw');
Route::put('/update/depo/{id}', [TabunganController::class, 'updatedepo'])->name('deposit');
Route::delete('/delete/{id}', [TabunganController::class, 'destroy'])->name('delete');