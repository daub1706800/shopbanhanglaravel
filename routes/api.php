<?php
use App\Controllers\ArticleController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    Route::get('articles', 'App\Http\Controllers\ArticleController@index');
});

//  Route::get('product','App\Http\Controllers\HomeController@index')->name('home');
Route::get('articles', 'App\Http\Controllers\ArticleController@index');
Route::get('articles/{id}', 'App\Http\Controllers\ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{id}', 'ArticleController@update');
Route::delete('articles/{id}', 'ArticleController@delete');

Route::get('getapi', 'App\Http\Controllers\CategoryProduct@getapi');

Route::get('getapi/{id}', 'App\Http\Controllers\CategoryProduct@getapiid');






