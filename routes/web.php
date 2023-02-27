<?php

use App\Http\Controllers\ComputersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;

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

Route::get('/', [StaticController::class, 'index'])->name('home.welcome');

Route::get('/home', [StaticController::class, 'home'])->name('home.index');

Route::get('/about', [StaticController::class, 'about'])->name('home.about');

Route::resource('computers', ComputersController::class);






