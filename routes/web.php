<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RentController;
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
Route::get('/skeleton', function(){
    return view('layout.skeleton.content');
})->name('skeleton');

Route::get('/errors/404', function(){
    return view('errors.404.index');
})->name('errors.404');

Route::post('/content', [AjaxController::class, 'content'])->name('ajax.content');

Route::get('/rent', [RentController::class, 'index'])->name('rent');

Route::get('/client', [ClientController::class, 'index'])->name('client');
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');


