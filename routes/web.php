<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentCardController;

use App\Http\Controllers\ToyController;
use App\Http\Controllers\AgentController;
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
    return view('start');
});

Route::get('/auth', function () {
    return view('auth');
});
Route::get('product',[ToyController::class,'index']);
Route::get('agent', [AgentController::class,'index']);
Route::get('agentcard', [AgentCardController::class,'index']);
