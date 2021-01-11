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
Route::prefix('sanctum')->namespace('App\Http\Controllers\API')->group(function() {
    Route::post('register', 'AuthController@register');
    Route::post('token', 'AuthController@token');
});

Route::middleware('auth:sanctum')->namespace("App\Http\Controllers")->group(function (){
    Route::post('articles', 'ArticleController@store');
    Route::get('logout', 'API\AuthController@deleteToken');
    Route::put('articles/{article}', 'ArticleController@update');
    Route::delete('articles/{article}', 'ArticleController@delete');
    Route::get('/name', 'API\AuthController@getUserInfo');

});

Route::get('articles', 'App\Http\Controllers\ArticleController@index');

Route::get('articles/{article}', 'App\Http\Controllers\ArticleController@show');

