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

// Route::get('/', function () {
//     return view('welcome');
// });

//登録とログイン
Route::get('/register', [\App\Http\Controllers\RegisterController::class,'create'])->middleware('guest')->name('register');
Route::Post('/register',[\App\Http\Controllers\RegisterController::class,'store'])->middleware('guest');

Route::get('/login', [\App\Http\Controllers\LoginController::class,'index'])->middleware('guest')->name('login');
Route::Post('/login',[\App\Http\Controllers\LoginController::class,'authenticate'])->middleware('guest');
//ログアウト
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

//ホームページ
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

//店情報登録
Route::get('restaurant/edit', [\App\Http\Controllers\RestaurantController::class,'edit'])->middleware('auth');
Route::get('restaurant', [\App\Http\Controllers\RestaurantController::class,'show'])->middleware('auth')->name('restaurant');
Route::put('restaurant', [\App\Http\Controllers\RestaurantController::class,'update'])->middleware('auth');

//メニュー種類作成
Route::get('menu_kind/edit', [\App\Http\Controllers\RestMenuKindController::class,'edit'])->middleware('auth')->name('menu_kind.edit');
Route::get('menu_kind/delete/{menu_kind_id}', [\App\Http\Controllers\RestMenuKindController::class,'delete'])->middleware('auth')->name('menu_kind.delete');
Route::post('menu_kind/add', [\App\Http\Controllers\RestMenuKindController::class,'add'])->middleware('auth')->name('menu_kind.add');

//メニュー作成
Route::get('menu/edit/{menu}', [\App\Http\Controllers\MenuController::class,'edit'])->middleware('auth');
Route::put('menu/update/{menu}', [\App\Http\Controllers\MenuController::class,'update'])->middleware('auth');
Route::get('menu', [\App\Http\Controllers\MenuController::class,'show'])->middleware('auth')->name('menu');
Route::put('menu/store', [\App\Http\Controllers\MenuController::class,'store'])->middleware('auth');
Route::get('menu/create', [\App\Http\Controllers\MenuController::class,'create'])->middleware('auth');

//QR code
Route::get('qrcode', [\App\Http\Controllers\QrCodeController::class,'index'])->middleware('auth')->name('qrcode');