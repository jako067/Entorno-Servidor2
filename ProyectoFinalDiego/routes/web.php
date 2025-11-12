<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');
Route::get('shop', ShopController::class)->name('shop');

Route::resource('players',  PlayersController::class);
Route::resource('events',  EventController::class);
Route::resource('messages',  MessageController::class);

Route::resource('events/likeDislike',  [EventController::class,'likeDislike']);
Route::resource('events/delete',  [EventController::class,'delete']);
