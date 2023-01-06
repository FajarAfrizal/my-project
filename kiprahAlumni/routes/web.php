<?php

use App\Http\Controllers\AlumniController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AlumniController::class, 'index'])->name('home');

Route::get('/allData', [AlumniController::class, 'allData'])->name('allData');
Route::get('/logout', [AlumniController::class, 'logout'])->name('logout');

Route::middleware(['isLogin', 'cekRole:admin'])->group(function () {
    Route::get('/alumni/alldata', [AlumniController::class, 'adminData'])->name('admin.data');
});

Route::middleware(['isLogin', 'cekRole:admin,user'])->group(function () {
    Route::get('/alumni', [AlumniController::class, 'data'])->name('data');
    Route::get('/alumni/create', [AlumniController::class, 'create'])->name('alumni.create');
    Route::get('/alumni/edit/{id}', [AlumniController::class, 'edit'])->name('alumni.edit');
    Route::post('/alumni/store', [AlumniController::class, 'store'])->name('store');
    Route::post('/alumni/update/{id}', [AlumniController::class, 'update'])->name('update');
    Route::post('/alumni/delete/{id}', [AlumniController::class, 'destroy'])->name('delete');

});
Route::middleware('isGuest')->group(function () {
    Route::get('/login', [AlumniController::class, 'login'])->name('login');
    Route::post('/authLogin', [AlumniController::class, 'authLogin'])->name('authLogin');
    Route::get('/register', [AlumniController::class, 'register'])->name('register');
    Route::post('/authRegister', [AlumniController::class, 'authRegister'])->name('authRegister');
});
