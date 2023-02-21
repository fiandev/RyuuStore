<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

Route::middleware(["guest"])->group(function (){
  Route::controller(HomeController::class)->group(function(){
    Route::get("/", "index")->name("home");
  });
  Route::controller(AuthController::class)->group(function(){
    Route::get("/login", "login")->name("login");
    Route::get("/register", "register")->name("register");
    Route::post("/register", "store");
    Route::get("/register/verify", "verify")->name("register.verify");
    Route::put("/register/verify", "verified");
  });
});
