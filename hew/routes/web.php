<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MypageController;

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

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('mypage', [MypageController::class, 'index'])->middleware("auth")->name('mypage');


Route::get('pray/theme', function () {
    return view('pray.theme');
})->name('theme');

Route::get('pray/order', function () {
    return view('pray.order');
})->name('order');

require __DIR__.'/auth.php';
