<?php

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

Route::get('/', [App\Http\Controllers\ListController::class, 'index'])->name('lists');
Route::get('/lists', [App\Http\Controllers\ListController::class, 'index'])->name('lists');
Route::get('/list/store', [App\Http\Controllers\ListController::class, 'store']);
Route::get('/list/edit/{id}', [App\Http\Controllers\ListController::class, 'edit']);
Route::post('/create', [App\Http\Controllers\ListController::class, 'create']);
Route::post('/update', [App\Http\Controllers\ListController::class, 'update']);
Route::get('/destroy/{id}', [App\Http\Controllers\ListController::class, 'destroy']);
Route::get('/list/detail/{id}', [App\Http\Controllers\ListController::class, 'detail']);