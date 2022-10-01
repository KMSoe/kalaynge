<?php

use App\Http\Controllers\Api\AlphabetController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\NumberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/v1')->group(function () {
    // Categories
    Route::resource('/categories', CategoryController::class);

    // Alphabets
    Route::resource('/alphabets', AlphabetController::class);

     // Numbers
     Route::resource('/numbers', NumberController::class);
});