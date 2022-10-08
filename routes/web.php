<?php

use App\Http\Controllers\Admin\ManagementChildrenController;
use App\Http\Controllers\Admin\ManagementGiziController;
use App\Http\Controllers\Admin\ManagementImunitationController;
use App\Http\Controllers\Admin\ManagementKIPIController;
use App\Http\Controllers\Admin\ManagementKPSPController;
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

Route::resource('child', ManagementChildrenController::class);
Route::resource('gizi', ManagementGiziController::class);
Route::resource('kipi', ManagementKIPIController::class);
Route::resource('kpsp', ManagementKPSPController::class);
Route::resource('imunitation', ManagementImunitationController::class);
Route::get('gizi/showtb', [ManagementGiziController::class,'showTb'])->name('gizi.showtb');
Route::get('gizi/bb/list', [ManagementGiziController::class,'listBB'])->name('gizi.list-bb');
Route::post('kpsp/question', [ManagementKPSPController::class,'question'])->name('kpsp.question');
Route::get('kpsp/show-detail', [ManagementKPSPController::class,'showKPSP'])->name('kpsp.show.detail');
Route::get('gizi/bb/detail', [ManagementGiziController::class,'showBb'])->name('gizi.detail-bb');
Route::get('gizi/hd/detail', [ManagementGiziController::class,'showHeadSize'])->name('gizi.detail.head');
Route::get('gizi/hd/list', [ManagementGiziController::class,'listHeadSize'])->name('gizi.list.head');
