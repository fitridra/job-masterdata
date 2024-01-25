<?php

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

Route::get('/', [App\Http\Controllers\JobController::class, 'index'])->name('job');
Route::get('/create', [App\Http\Controllers\JobController::class, 'create'])->name('create');
Route::post('/store',[App\Http\Controllers\JobController::class, 'store'])->name('store');
Route::get('/edit/{id}',[App\Http\Controllers\JobController::class, 'edit'])->name('edit');
Route::post('/update/{id}',[App\Http\Controllers\JobController::class, 'update'])->name('update');
Route::get('/destroy/{id}',[App\Http\Controllers\JobController::class, 'destroy'])->name('destroy');