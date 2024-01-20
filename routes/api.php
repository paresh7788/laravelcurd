<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user',function(){
    return "paresh singh";
});

Route::post('/user',function() {
    return response()->json("post api hit successful");
});

Route::delete('/user/{id}',function($id) {
    return response($id,200);
});

Route::put('/user/{id}',function($id) {
    return response("put method".$id,200);
});
