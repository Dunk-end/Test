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

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create']);

Route::any('{all?}', function () {

    return view('app');
})->where(['all' => '.*']);

