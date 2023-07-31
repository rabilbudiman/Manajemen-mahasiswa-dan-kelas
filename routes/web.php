<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\MataKuliah;

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

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);


Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/tambahFormMatakuliah', function () {
    return view('course.create');
});
Route::post('/matakuliah/tambah', [MatakuliahController::class, 'create']);
Route::delete('/matakuliah/hapus/{matakuliah}',[MatakuliahController::class, 'delete']);


Route::resource('mahasiswa', mahasiswaController::class);
Route::resource('kelas', kelasController::class);

// Route::get('/dashboard', function(){
//     return view('admin.dashboard_admin');
// });