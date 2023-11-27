<?php

use App\Http\Controllers\OrderCreateController;
use App\Http\Controllers\OrderEditController;
use App\Http\Controllers\OrderIndexController;
use App\Http\Controllers\OrderStoreController;
use App\Http\Controllers\OrderUpdateController;
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
    return view('welcome');
});

Route::get('/orders/create', OrderCreateController::class);
Route::post('/orders', OrderStoreController::class);
Route::get('/orders/{order}/edit', OrderEditController::class);
Route::patch('/orders/{order}', OrderUpdateController::class);
Route::get('/orders', OrderIndexController::class);
