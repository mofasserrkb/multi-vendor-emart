<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\VendorController;
// use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
//admin
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
Route::get('/dashboard',[AdminController::class,'admin'])->name('admin');
Route::resource('banner', BannerController::class);
});
//vendor
Route::group(['prefix'=>'vendor','middleware'=>'auth'],function(){
    Route::get('/dashboard',[VendorController::class,'vendor'])->name('vendor');

    });

require __DIR__.'/auth.php';
