<?php

use App\Http\Controllers\CarsController;
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

Route::get('/cars',[CarsController::class,'index']);
Route::get('/cars/create',[CarsController::class,'create']);
Route::post('/cars',[CarsController::class,'store']);
Route::get('/cars/{id}',[CarsController::class,'show']);
Route::put('/cars/{id}',[CarsController::class,'update']);
Route::delete('/cars/{id}',[CarsController::class,'destroy']);
