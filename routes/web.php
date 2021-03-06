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

Route::get('/', function () {
    return view('index');
});

Route::get('/settings', function () {
    return view('settings');
});

Auth::routes();

Route::get('/settings', [App\Http\Controllers\HomeController::class, 'index'])->name('settings');
Route::post('/save', [\App\Http\Controllers\TestController::class, 'update']);
