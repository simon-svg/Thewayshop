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


// restfull api
Route::get('pages', 'App\Http\Controllers\admin\MenuController@getPages');
Route::get('pages/{id}', 'App\Http\Controllers\admin\MenuController@getPageById');
Route::post('pages', 'App\Http\Controllers\admin\MenuController@pageAdd');  