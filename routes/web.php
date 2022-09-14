<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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



Route::get("/",[\App\Http\Controllers\HomeController::class,"index"]);


Route::get("/users",[\App\Http\Controllers\AdminController::class,"user"]);

Route::get("/FoodMenu",[\App\Http\Controllers\AdminController::class,"FoodMenu"]);
Route::post("/uploadfood",[\App\Http\Controllers\AdminController::class,"upload"]);

Route::get("/booktb",[\App\Http\Controllers\AdminController::class,"booktb"]);
Route::post("/uploadbook",[\App\Http\Controllers\AdminController::class,"upload2"]);

Route::get("/deleteuser/{id}",[\App\Http\Controllers\AdminController::class,"deleteuser"]);

Route::get("/redirects",[\App\Http\Controllers\HomeController::class,"redirects"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
