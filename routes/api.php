<?php

use App\Http\Controllers\BloodTypeController;
use App\Http\Controllers\DonarController;
use App\Http\Controllers\GovernorateController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/blood-types',[BloodTypeController::class,'index']);
Route::post('/blood-types/create',[BloodTypeController::class,'store']);

Route::post('/governorate',[GovernorateController::class,'index']);




//Route::get('/donar', [DonarController::class, 'index']);
