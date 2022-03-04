<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MypageController;
use App\Http\Controllers\Play\ThemeController;
use App\Http\Controllers\Play\OrderController;
use App\Http\Controllers\Play\InstractionController;

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

/* プレイ画面 */
Route::get('play/theme', function () {
    return view('play.theme');
})->name('theme');
Route::post('play/theme', [ThemeController::class, 'index']);


Route::get('play/order', function () {
    return view('play.order');
})->name('order');
Route::post('play/order', [OrderController::class, 'index'])->name('order');


Route::get('play/instraction', function () {
    return view('play.instraction');
})->name('instraction');

Route::post('play/instraction', [InstractionController::class, 'index']);

require __DIR__.'/auth.php';
