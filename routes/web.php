<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\SessionController;

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

Route::get('/', function () {
    return view('home');
});

Route::resource('mahasiswa', mahasiswaController::class);
Route::resource('kelas', kelasController::class);

Route::get('/dashboard', function(){
    return view('admin.dashboard_admin');
});

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('sesi/login', [SessionController::class, 'login']);
Route::get('sesi/logout', [SessionController::class, 'logout']);
Route::get('sesi/register', [SessionController::class, 'register']);
Route::post('sesi/create', [SessionController::class, 'create']);