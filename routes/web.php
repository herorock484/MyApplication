<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\cultureController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', function () {
    return view('index');
});
Route::get('/about', [aboutController::class, 'about']);

Route::get('/culture', [cultureController::class, 'culture']);

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index']);

