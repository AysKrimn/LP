<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/index", function() {

    return view("home");
});


Route::post("/register", [UserController::class, "register"]);
Route::get("/user/{id}", [UserController::class, "getUser"]);
Route::put("/user/{id}", [UserController::class, "updateUser"]);
Route::delete("/user/{id}", [UserController::class, "deleteUser"]);