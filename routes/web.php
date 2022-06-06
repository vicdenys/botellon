<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuUploadController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [MenuUploadController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/upload-menu', [MenuUploadController::class, 'store'])->middleware(['auth'])->name('upload-menu');
Route::delete('/delete-menu/{id}', [MenuUploadController::class, 'destroy'])->middleware(['auth'])->name('delete-menu');
Route::put('/make-active-menu/{id}', [MenuUploadController::class, 'update'])->middleware(['auth'])->name('make-active-menu');

require __DIR__.'/auth.php';
