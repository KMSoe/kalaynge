<?php

use App\Http\Controllers\Api\AlphabetController;
use App\Http\Controllers\Api\AnimalController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ColorController;
use App\Http\Controllers\Api\FruitController;
use App\Http\Controllers\Api\HousewareController;
use App\Http\Controllers\Api\NatureController;
use App\Http\Controllers\Api\NumberController;
use App\Http\Controllers\Api\QuizController;
use App\Http\Controllers\Api\ShapeController;
use App\Http\Controllers\Api\VehicleController;
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

    // Natures
    Route::resource('/natures', NatureController::class);

    // Fruits
    Route::resource('/fruits', FruitController::class);

    // Vehicles
    Route::resource('/vehicles', VehicleController::class);

    // Animals
    Route::resource('/animals', AnimalController::class);

    // Housewares
    Route::resource('/housewares', HousewareController::class);

    // Colors
    Route::resource('/colors', ColorController::class);

    // Shapes
    Route::resource('/shapes', ShapeController::class);

    // ပျော်ရွှင်ဖွယ်ရာ ဂိမ်းကမ္ဘာ
    Route::get('quiz-types', [QuizController::class, 'getQuizTypes']);
    Route::resource('quizzes', QuizController::class);

    // Answer Question
    Route::post('quizzes/{id}/answer', [QuizController::class, 'checkAnswer']);
});
