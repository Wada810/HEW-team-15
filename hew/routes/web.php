<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ColorController;
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
    $user = Auth::user();
    session()->forget('theme');
    session()->forget('order');
    return view('home',compact("user"));
});

Route::get('home', function () {
    $user = Auth::user();
    session()->forget('theme');
    session()->forget('order');
    return view('home',compact("user"));
})->name('home');

/* マイページ */
Route::get('mypage', [MypageController::class, 'index'])->middleware("auth")->name('mypage');

/* プレイ画面 */
Route::get('play/theme', [ThemeController::class, 'index'])->name('theme');
Route::post('play/theme', [ThemeController::class, 'post']);

Route::get('play/order', [OrderController::class, 'index'])->name('order');
Route::post('play/order', [OrderController::class, 'post']);

Route::get('play/instraction', [InstractionController::class, 'index'])->name('instraction');
Route::post('play/instraction', [InstractionController::class, 'post']);

/* 友達のプロフィール */
Route::get('friend_prof', function (){
    return view('friend_prof');
})->name('friend_prof');

/* 色変えAPI */
Route::get('color',[ColorController::class, 'index'])->name('color');

require __DIR__.'/auth.php';
