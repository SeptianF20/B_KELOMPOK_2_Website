<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\AssignOp\Concat;


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
    return view('frontend.home');
});

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('test', function () {
    return view('1error');
})->name('1error');;

Auth::routes();
Route::resource('pendidikan', 'PendidikanController');
Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
