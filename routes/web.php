<?php

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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

use App\Http\Controllers\listController;
Route::get('menu',listController::class)->name('menu');

use App\Http\Controllers\subscribeController;
Route::post('subscribe',subscribeController::class);


/*
|--------------------------------------------------------------------------
| Web Routes for Backend Area
|--------------------------------------------------------------------------
*/ 

Route::get('admin', function () {
    return view('back.admin');
})->name('admin');

use App\Http\Controllers\menuController;
Route::resource("menus",menuController::class);

use App\Http\Controllers\emailController;
Route::resource("emails",emailController::class);

