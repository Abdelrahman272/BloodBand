<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\GovernorateController;
use Illuminate\Routing\Route as RoutingRoute;
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
})->name('index');

Route::get('/city', [CityController::class, 'index'])->name('city');

Route::controller(CityController::class)->group(function (){
    Route::get('/city', 'index')->name('city');
    Route::get('/city/create', 'create')->name('city.create');
    Route::post('/city/store', 'store')->name('city.store');
});


Route::controller(GovernorateController::class)->group(function (){
    Route::resource('governorate', GovernorateController::class);
    Route::get('/governorate', 'index')->name('governorate');
    Route::get('/governorate/create', 'create')->name('governorate.create');
    Route::post('/governorate/store', 'store')->name('governorate.store');
});

Route::controller(CategoryController::class)->group(function (){
    Route::resource('category', CategoryController::class);
    Route::get('/category', 'index')->name('category');
    Route::get('/category/create', 'create')->name('category.create');
    Route::post('/category/store', 'store')->name('category.store');
});


