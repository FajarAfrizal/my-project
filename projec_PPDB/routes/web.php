<?php

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Artisan;
use SebastianBergmann\FileIterator\Facade;


use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return view('home');
});
Route::middleware(['isLogin', 'cekRole:admin'])->group(function () {
    Route::get('/detail/{id}', [StudentController::class, 'detail'])->name('detail');
    Route::get('/lihat/{id}', [StudentController::class, 'lihat'])->name('lihat');
    Route::patch('/validasi/{id}', [StudentController::class, 'validasi'])->name('validasi');
    Route::patch('/tolak/{id}', [StudentController::class, 'tolak'])->name('tolak');
});

    Route::middleware(['isLogin', 'cekRole:admin,user'])->group(function () {
    Route::get('/dashboard', [StudentController::class, 'indexes'])->name('dashboard');
    Route::get('/pembayaran', [StudentController::class, 'pembayaran'])->name('pembayaran');
    Route::post('/transaksi/pembayaran', [StudentController::class, 'transaksiPembayaran'])->name('transaksi.pembayaran');
    Route::patch('/edit/pembayaran/{id}', [StudentController::class, 'editPembayaran'])->name('edit.pembayaran');
});


Route::middleware('isGuest')->group(function () {
    Route::get('/register', [StudentController::class, 'register'])->name('register');
    Route::post('/auth/register', [StudentController::class, 'authRegister'])->name('auth.register');
    Route::get('/login', [StudentController::class, 'login'])->name('login');
    Route::post('/auth/login', [StudentController::class, 'authLogin'])->name('auth.login');
    Route::get('/pdf', [StudentController::class, 'pdf'])->name('pdf');

});

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('/logout', [StudentController::class, 'logout'])->name('logout');
Route::get('/error', [StudentController::class, 'error'])->name('error');