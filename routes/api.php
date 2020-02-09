<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

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
* Snippet for a quick route reference
*/
Route::get('/', function (Router $router) {
    return collect($router->getRoutes()->getRoutesByMethod()["GET"])->map(function($value, $key) {
        return url($key);
    })->values();
});

//Route::group(['middleware' => 'auth'], function()
//{
//    Route::apiResource('customers', '\App\Http\Controllers\API\CustomerAPIController');
//});

//Route::middleware('auth:api')->get('/user', function(Request $request) {
//    return $request->user();
//});

Route::apiResource('customers', '\App\Http\Controllers\API\CustomerAPIController');

Route::apiResource('emails', '\App\Http\Controllers\API\EmailAPIController');

Route::apiResource('phones', '\App\Http\Controllers\API\PhoneAPIController');

Route::apiResource('pictures', '\App\Http\Controllers\API\PictureAPIController');
