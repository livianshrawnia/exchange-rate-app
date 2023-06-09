<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExchangeRateController;

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

Route::get('/', [ExchangeRateController::class, 'index']);
Route::post('/rate', [ExchangeRateController::class, 'fetchRate']);
Route::get('/history', [ExchangeRateController::class, 'showHistory']);
