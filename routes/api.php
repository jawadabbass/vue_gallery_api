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


/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::namespace('API\v1')->prefix('v1')->group(function () {

    Route::get('users', 'UserController@index')
        ->name('users.index');

    Route::post('users', 'UserController@store')
        ->name('users.store');

    Route::get('users/{userId}', 'UserController@show')
        ->name('users.show')
        ->where(['id' => '[0-9]+']);

    Route::put('users/{user}', 'UserController@update')
        ->name('users.update')
        ->where(['id' => '[0-9]+']);

    Route::delete('users/{userId}', 'UserController@destroy')
        ->name('users.destroy')
        ->where(['id' => '[0-9]+']);

    /******************************************* */

    Route::get('categories', 'CategoryController@index')
        ->name('categories.index');

    Route::post('categories', 'CategoryController@store')
        ->name('categories.store');

    Route::get('categories/{categoryId}', 'CategoryController@show')
        ->name('categories.show')
        ->where(['id' => '[0-9]+']);

    Route::put('categories/{categoryId}', 'CategoryController@update')
        ->name('categories.update')
        ->where(['id' => '[0-9]+']);

    Route::delete('categories/{categoryId}', 'CategoryController@destroy')
        ->name('categories.destroy')
        ->where(['id' => '[0-9]+']);

    /******************************************* */

    Route::get('images', 'ImageController@index')
        ->name('images.index');

    Route::post('images', 'ImageController@store')
        ->name('images.store');

    Route::get('images/{imageId}', 'ImageController@show')
        ->name('images.show')
        ->where(['id' => '[0-9]+']);

    Route::put('images/{imageId}', 'ImageController@update')
        ->name('images.update')
        ->where(['id' => '[0-9]+']);

    Route::delete('images/{imageId}', 'ImageController@destroy')
        ->name('images.destroy')
        ->where(['id' => '[0-9]+']);
});
