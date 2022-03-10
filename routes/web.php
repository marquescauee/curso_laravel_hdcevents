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

Route::resource('events', App\Http\Controllers\EventController::class)->except('index', 'show')->middleware('auth');

Route::get('/', [App\Http\Controllers\EventController::class, 'index']);
Route::get('/events/{id}', [App\Http\Controllers\EventController::class, 'show'])->name('events.show');

Route::get('/dashboard', [App\Http\Controllers\EventController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::post('/events/join/{id}', [App\Http\Controllers\EventController::class, 'joinEvent'])->middleware('auth');
Route::delete('/events/leave/{id}', [App\Http\Controllers\EventController::class, 'leaveEvent'])->middleware('auth');

