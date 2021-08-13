<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

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

Route::get('home', [MemoController::class,'showHome'])->name('home');

Route::get('submit/{id?}', [MemoController::class,'showSubmit'])->name('submit');

Route::post('/submit/{id?}', [MemoController::class,'postSubmit'])->name('submit');

Route::get('/delete/{id}', [MemoController::class,'deleteMemo'])->name('delete');