<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\api2\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. TheseА
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::apiResource('user', UserController::class);

//GET           - /user             - index
//POST          - /user             - store
//PUT/PATCH     - /user/{user}      - update
//DELETE        - /user/{user}      - delete









//Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
//
//    Route::post('login', [AuthController::class, 'login']);
//    Route::post('register', [AuthController::class, 'register']);
//    Route::post('logout', [AuthController::class, 'logout']);
//    Route::post('refresh', [AuthController::class, 'refresh']);
//    Route::get('user-profile', [AuthController::class, 'userProfile']);
//
//});

//PHPDoc, типизация,

//Route::middleware('auth')->prefix('auth')->group(function(){
//
//    Route::apiResource('task', TaskController::class);
//
//});
