<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/',  [PageController::class,'home']);
Route::get('/price',  [PageController::class,'price']);
Route::get('/question',  [PageController::class,'question']);
Route::get('/feedback',  [PageController::class,'feedback']);
Route::post('/feedback/check',  [PageController::class,'feedback_check']);
Route::get('/contact',  [PageController::class,'contact']);
