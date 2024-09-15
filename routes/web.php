<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UnittController;
use App\Models\Unitt;

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


Route::resource('/unitts', \App\Http\Controllers\UnittController::class);

Route::get('/dashboard/admin', function () {
    return view('admin.index');
});


Route::get('/penyewa', function () {
    return view('navbar.penyewa');
});


Route::get('/contactus', function () {
    return view('navbar.contactus');
});

Route::get('/unit', function () {
    return view('navbar.unit');
});

Route::get('/datapenyewa', function () {
    return view('navbar.datapenyewa');
});

Route::get('/catatan', function () {
    return view('navbar.catatan');
});

Route::get('/dashboard', function () {
    return view('user.index');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/unitt/store', [UnittController::class, 'store'])->name('unitt.store');
Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register_form']);
Route::post('register', [AuthController::class, 'register']);




Route::post(('/kirim'), [UnittController::class, 'store']);
Route::get('/transaksi', [UnittController::class, 'index']);
Route::get('/unityangdisewa', [UnittController::class, 'index2']);
Route::get('//datapenyewa', [UnittController::class, 'index3']);
Route::get('/posts/{id}/edit', [UnittController::class, 'edit']);
Route::get('posts/{id}', [UnittController::class, 'show']);
Route::patch('/posts/{id}', [UnittController::class, 'update']);
Route::get('Sewa', [UnittController::class, 'create']);
Route::delete('posts/{id}', [UnittController::class, 'destroy']);
Route::get('model/718', [UnittController::class, 'show']);


Route::get('/transaksi/{id}/edit', [UnittController::class, 'edit']);
Route::patch('/transaksi/{id}', [UnittController::class, 'update']);
Route::delete('/transaksi/{id}', [UnittController::class, 'destroy']);
Route::get('/data/{id}/edit', [UnittController::class, 'edit1']);
Route::patch('/data/{id}', [UnittController::class, 'update1']);
Route::delete('/data/{id}', [UnittController::class, 'destroy1']);                                                                                                                                                  
