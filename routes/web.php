<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\TotaluserController;

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

Route::resource('/program', ProgramController::class);

// Route::get('/simpanprogram', function(){
//     return view('simpanprogram');
// })->middleware('auth')->name('simpan.program'); 

Route::resource('/donatur', DonaturController::class);
//Route::get('/donatur', function(){
    //return view('donatur');
//})->middleware('auth')->name('donatur');

//Route::get('/tambahdonatur', function(){
   // return view('tambahdonatur');
//})->middleware('auth')->name('tambah.donatur');

Route::resource('/totaluser', TotaluserController::class);
//Route::get('/totaluser', function(){
    //return view('totaluser');
//})->middleware('auth')->name('totaluser');


Route::get('/profile', function(){
    return view('profile');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
