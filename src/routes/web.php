<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// =======================
// Contact (お問い合わせ系)
// =======================

// PG01 お問い合わせフォーム入力ページ
Route::get('/', [ContactController::class, 'index'])->name('contact.index');

// PG02 お問い合わせフォーム確認ページ
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/', [ContactController::class, 'index']);

Route::get('/confirm-test', [ContactController::class, 'confirmTest']);

// PG03 サンクスページ
Route::get('/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');
//Route::post('/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');


// =======================
// Admin (管理系)
// =======================

// PG04 管理画面
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// PG05 検索
Route::get('/search', [AdminController::class, 'search'])->name('admin.search');

// PG06 検索リセット
Route::get('/reset', [AdminController::class, 'reset'])->name('admin.reset');

// PG07 お問い合わせフォーム削除
Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

// PG11 エクスポート
Route::get('/export', [AdminController::class, 'export'])->name('admin.export');


// =======================
// Auth (認証系)
// =======================

// PG08 ユーザ登録
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'register']);

// PG09 ログイン
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [LoginController::class, 'login']);

// PG10 ログアウト
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
