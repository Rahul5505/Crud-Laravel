<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
use App\Http\Controllers\crud\UserController;
use App\Http\Controllers\crud\EditController;

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

// Route::get('/', function () {
    
// });
// crud operations view routing here

Route::get('/',[UserController::class,'index']);
Route::post('/',[UserController::class,'store']);
Route::get('/',[EditController::class,'show']);
Route::get('/{id}',[UserController::class,'destroy']);
 Route::get('/crud.edit/{id}',[EditController::class,'edit']);
 Route::post('/crud.edit/{id}',[UserController::class,'update']);
