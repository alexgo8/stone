<?php

use App\Http\Controllers\Stone\CreateController;
use App\Http\Controllers\Stone\IndexController;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'stone'], function() {
  Route::get('/stone', [IndexController::class, 'index'])->name('stone.index');
  Route::get('/stone/create', [CreateController::class, 'create'])->name('create.index');
});
