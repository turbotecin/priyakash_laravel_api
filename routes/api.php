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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::get('customer/report', 'API\CustomerController@list');
});



Route::post('login', 'UserController@index');

// Route::post("login",[UserController::class,'index']);