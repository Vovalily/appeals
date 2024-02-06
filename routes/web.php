<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppealController;
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

Route::resource('/appeals', AppealController::class)->except('destroy');
Route::get('/appeals/delete/{appeal}', [AppealController::class, 'destroy'])->name('appeals.destroy');
Route::resource('/admin', AdminController::class);
Route::post('/answer/{appeal}', [AppealController::class, 'answer'])->name('answer.add');
