<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bus;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home');
});

//Route::get("/listbus","Bus@listbus");
//Route::get("/listbus",[Bus::class,"listbus"]);
Route::get("/listbus",function(){
    return view("bus");
});
Route::get("/logins",function(){
    return view("login");
});

//Route::get("/route-name",[HomeController::class,"method_name"]);