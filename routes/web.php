<?php

use App\Models\Computer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/museum', App\Http\Controllers\MuseumController::class);

Route::resource('/computer', App\Http\Controllers\ComputerController::class);
Route::resource('/magazine', App\Http\Controllers\MagazineController::class);
Route::resource('/software', App\Http\Controllers\SoftwareController::class);
Route::resource('/peripheral', App\Http\Controllers\PeripheralController::class);
Route::resource('/book', App\Http\Controllers\BookController::class);
Route::resource('/image', App\Http\Controllers\ImageController::class);


Route::get('/', function () {
    return view('welcome');
});