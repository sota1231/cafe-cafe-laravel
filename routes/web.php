<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;

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

Route::get('/', [CafeController::class,'top'])->name('top'); //トップページ
Route::get('contact', [CafeController::class,'contact'])->name('contact'); //問い合わせフォーム画面
Route::post('confirm', [CafeController::class, 'confirm'])->name('confirm');  //詳細画面
Route::get('edit', [CafeController::class, 'edit'])->name('edit');  //編集画面
Route::post('edit', [CafeController::class, 'update'])->name('edit');  //更新処理
Route::post('complete', [CafeController::class,'complete'])->name('complete'); //　DB登録、完了画面へ遷移
Route::get('destory', [CafeController::class, 'destory'])->name('destory');  //　削除ボタン

// 遷移
Route::get('confirm', [CafeController::class, 'aaa']); 
Route::get('complete', [CafeController::class, 'uuu']);  