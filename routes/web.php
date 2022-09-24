<?php

use App\Http\Controllers\Admin\ManagementChildrenController;
use App\Http\Controllers\Admin\ManagementGiziController;
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

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('child', ManagementChildrenController::class);
Route::resource('gizi', ManagementGiziController::class);
Route::get('gizi/showtb', [ManagementGiziController::class,'showTb'])->name('gizi.showtb');
Route::get('gizi/bb/list', [ManagementGiziController::class,'listBB'])->name('gizi.list-bb');
Route::get('gizi/bb/detail', [ManagementGiziController::class,'showBb'])->name('gizi.detail-bb');
