<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bus;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayoutBus;

// Route::get('/', function () {
//     return view('home');
// });

//Route::get("/listbus","Bus@listbus");
//Route::get("/listbus",[Bus::class,"listbus"]);
// Route::get("/listbus",function(){
//     return view("bus");
// });
Route::get("/{any}",function(){
    return view('layouts.vue');
})->where('any','.*');
// Route::post("/api/savemodel",[LayoutBus::class,"create"]);
// Route::get("/api/layoutbus",[LayoutBus::class]);
// Route::get("/logins",function(){
//     return view("login");
// });

//Route::get("/route-name",[HomeController::class,"method_name"]);