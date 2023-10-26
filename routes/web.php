<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

//管理画面系・マイページ系のファイル呼び出し
include __DIR__ . '/admin.php';
include __DIR__ . '/mypage.php';


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//フロント
Route::get('/', [HomeController::class, 'top'])->name('top');
