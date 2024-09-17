<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\BuyController;

Route::get('/', [ShopController::class, 'index']);
Route::get('/search', [ShopController::class, 'search']);
Route::get('/item/{num}', [ShopController::class, 'item']);
Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register', [AuthController::class, 'postRegister']);
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');;
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'getLogout']);

Route::middleware('auth')->group(function () {
  Route::get('/buy/{num}', [BuyController::class, 'buy']);
  Route::get('/settlement', [BuyController::class, 'settlement']);
  Route::get('/address', [BuyController::class, 'address']);

  Route::get('/item/{num}', [ShopController::class, 'item']);
  Route::get('/mypage', [ShopController::class, 'mypage']);
  Route::get('/profile', [ShopController::class, 'profile']);
  Route::post('/profile/update', [ShopController::class, 'update']);
  Route::get('/bought', [ShopController::class, 'bought']);
  Route::get('/comment/{num}', [ShopController::class, 'comment']);
  Route::post('/comment/confirm', [ShopController::class, 'commentConfirm']);

  Route::get('/home/like', [LikeController::class, 'likeItem']);
  Route::post('/like/{item_id}', [LikeController::class, 'create'])->name('like');
  Route::post('/unlike/{item_id}', [LikeController::class, 'delete'])->name('unlike');

  Route::get('/sell', [SellController::class, 'sell']);
  Route::post('/sell/confirm', [SellController::class, 'sellConfirm']);
});





