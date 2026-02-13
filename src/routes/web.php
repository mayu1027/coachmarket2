<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Requests\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


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

Route::get('/',[ItemController::class, 'index'])->name('items.list');
Route::get('/item/{item}',[ItemController::class, 'detail'])->name('item.detail');
Route::get('/item', [ItemController::class, 'search']);

Route::get('/sell',[ItemController::class, 'sellView']);
Route::post('/sell',[ItemController::class, 'sellCreate']);

Route::get('/mypage/profile', [UserController::class, 'profile']);
Route::post('/mypage/profile', [UserController::class, 'updateProfile']);