<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SuccessController;
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


Route::get('/success', [SuccessController::class, 'index'])->name('success');

Route::get('/', [ReviewController::class, 'index'])->name('review.index');
Route::post('/', [ReviewController::class, 'store'])->name('review.store');
