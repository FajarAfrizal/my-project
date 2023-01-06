<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
//     return view('home');
// });
// Route::get('/register', function () {
//     return view('auth.register');
// });

Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('/auth/register', [StudentController::class, 'register'])->name('register');
Route::post('/auth/register', [StudentController::class, 'authRegister'])->name('auth.register');

