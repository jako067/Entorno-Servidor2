<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CookFAQController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\StudioController;
use App\Models\Studio;

Route::resource('actors', ActorController::class);
;


Route::get('faq',  [CookFAQController::class,'faq'])
->name("FAQ");
Route::get('cookies', [CookFAQController::class,'cookies'])
->name("cookies");

Route::get('/', IndexController::class)
->name("index");

Route::resource('movies',MovieController::class);

Route::resource('studios',StudioController::class);
Route::resource('animes', AnimeController::class);
Route::resource('characters',CharacterController::class);


