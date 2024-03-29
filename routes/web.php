<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
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
// Route::get('user', [InfoController::class, 'index']);
Route::get('user', [InfoController::class, 'index']);
Route::post('user',[InfoController::class, 'store']);
Route::post('user/{id}',[InfoController::class, 'update']);
Route::delete('user/{id}',[InfoController::class, 'destroy']);
