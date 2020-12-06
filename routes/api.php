<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::prefix('sanctum')->namespace('App\http\Controllers\API')->group(function() {
    Route::post('register', 'AuthController@register');
    Route::post('token', 'AuthController@token');
});
Route::middleware('auth:sanctum')->get('/name', function (Request $request) {
    return response()->json(['name' => $request->user()->name]);
});
Route::middleware('auth:sanctum')->namespace("App\http\Controllers")->group(function (){
    Route::post('articles', 'ArticleController@store');
    Route::put('articles/{article}', 'ArticleController@update');
    Route::delete('articles/{article}', 'ArticleController@delete');
    Route::get('articles', 'ArticleController@index');
});

//Route::get('articles', 'App\Http\Controllers\ArticleController@index');
Route::get('articles/{article}', 'App\Http\Controllers\ArticleController@show');

