<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/params', function(){
    return 'params';
})->name('params');

Route::get('/support', function(){
    return 'support';
})->name('support');

Route::get('/rent', function(){
    return 'rent';
})->name('rent');

Route::get('/client', function(){
    return 'client';
})->name('client');

Route::get('/car', function(){
    return 'car';
})->name('car');

Route::get('/expense', function(){
    return 'expense';
})->name('expense');

Route::get('/finance', function(){
    return 'finance';
})->name('finance');

Route::get('/user', function(){
    return 'user';
})->name('user');

