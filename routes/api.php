<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MainController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\BloodTypeController;
use App\Http\Controllers\GovernorateController;
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


Route::controller(MainController::class)->group(function (){
    Route::get('/blood-types', 'bloodTypes');
    Route::get('/governorate', 'governorates');
    Route::get("/settings","settings");
    Route::get('/cities/{id}', 'cities');
    Route::post("contact-us", "ContactUs");
    Route::get("blogs", "blogs");
});

Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::group(["middleware" => ['check-auth']], function(){
    Route::post('token', [AuthController::class, "token"]);
    Route::post('notification-setting', [AuthController::class, "notificationSetting"]);
    Route::post('/donor-requests/create', [\App\Http\Controllers\Api\DonorRequestController::class, 'create']);
    Route::post("blogs/toggle-active/{id}", [PostController::class, "toggleActive"]);
});




