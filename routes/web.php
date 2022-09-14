<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\GovernorateController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

 
Auth::routes();

// Route::get('/', function () {
//    return view('auth.login');
// })->name('login`');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::group(['middleware' => ['auth:web']], function() {
   Route::get('/', [MainController::class, 'index'])->name('index');
  
  Route::get('/index', function () {
      return view('index');
  })->name('index');
  
  Route::resource('/cities', CityController::class);
  
  Route::resource('/governorate', GovernorateController::class);
  
  Route::resource('/category', CategoryController::class);
  
  Route::resource('/posts', PostController::class);
  
  Route::resource('/contact', ContactController::class);
  
  Route::resource('/donors', DonorController::class);
  
});

Route::get('/send', function () {

  Mail::to('abdelrahmanhamdy252@gmail.com')->send(new TestMail());

  return response("sending");

});







