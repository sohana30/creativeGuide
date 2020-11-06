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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/photo','App\Http\Controllers\PhotoController@savePhoto');
Route::get('/photos','App\Http\Controllers\PhotoController@listPhotos');
Route::get('/photo/{id}','App\Http\Controllers\PhotoController@getPhoto');
Route::get('/photographers','App\Http\Controllers\PhotographerController@listPhotographers');
Route::get('/photographer/{id}','App\Http\Controllers\PhotographerController@getPhotographer');

