<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\IconController;
use App\Http\Controllers\PublicInstractionsController;
use App\Http\Controllers\FriendProfileController;
use APP\Http\Controllers\SortController;
use APP\Http\Controllers\FriendController;

use App\Http\Controllers\Play\ThemeController;
use App\Http\Controllers\Play\OrderController;
use App\Http\Controllers\Play\InstractionController;
use App\Http\Controllers\Play\FinishController;


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

//遊び方
Route::get('how_to_play', function () {
    $user = Auth::user();
    return view('how_to_play',compact("user"));
})->name('how_to_play');

/* マイページ */
Route::get('mypage', [MypageController::class, 'index'])->middleware("auth")->name('mypage');

/* プレイ画面 */
Route::get('play/theme', [ThemeController::class, 'index'])->name('theme');
Route::post('play/theme', [ThemeController::class, 'post']);

Route::get('play/order', [OrderController::class, 'index'])->name('order');
Route::post('play/order', [OrderController::class, 'post']);

Route::get('play/instraction', [InstractionController::class, 'index'])->name('instraction');
Route::post('play/instraction', [InstractionController::class, 'post']);

Route::get('play/finish', [FinishController::class, 'index'])->middleware("auth")->name('finish');
Route::post('play/finish', [FinishController::class, 'post']);

/* みんなのやることリスト */
Route::get('public_instractions', [PublicInstractionsController::class, 'index'])->name('public_instractions');
Route::post('public_instractions', [PublicInstractionsController::class, 'post']);

/* 友達のプロフィール */
Route::get('friend_prof', [FriendController::class, 'index'])->name('friend_prof');
Route::post('friend_prof', [FriendController::class, 'post']);

/* 色変えAPI */
Route::get('color',[ColorController::class, 'index'])->name('color');

Route::get('mg',[IconController::class, 'index'])->name('img');

Route::get('sort',[SortController::class, 'index'])->name('sort');

Route::get('friendProf',[FriendProfileController::class, 'index'])->name('friendProf');

require __DIR__.'/auth.php';
