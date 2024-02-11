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

Route::get('/', function () {
    return view('view.index');
});
Route::get('contact', [CafeController::class,'contact'])->name('contact'); //問い合わせフォーム
Route::get('confirm', [CafeController::class, 'confirm'])->name('confirm');  //詳細画面
Route::post('confirm', [CafeController::class, 'confirm'])->name('confirm');  //詳細画面
Route::get('edit', [CafeController::class, 'edit'])->name('edit');  //編集画面
// Route::get('/', [PlayersController::class,'index'])->name('players.return');           //topページに戻る
Route::get('complete', [CafeController::class,'complete'])->name('complete'); //カラムを１に
// Route::post('/update/{id}', [PlayersController::class, 'update'])->name('players.update');  //　編集ボタン