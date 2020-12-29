<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CLayoutBus;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::resource('/cruds', 'CLayoutBus', [
//     'except' => ['edit', 'show', 'store']
//   ]);
Route::get('/busapi', [CLayoutBus::class,'index']);
// /Route::post("/api/savemodel",[LayoutBus::class,"create"]);
Route::post('/busapi/save', [CLayoutBus::class,'store']);
Route::get('/busapi/edit/{id}', 'CLayoutBus@getArticle');
Route::get('/busapi/show/{id}', 'CLayoutBus@getArticle');
Route::put('/busapi/update/{id}', 'CLayoutBus@update');
Route::delete('/busapi/delete/{id}', 'CLayoutBus@delete'); 