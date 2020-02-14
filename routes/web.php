<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/admin/', function () {
//    return view('admin.login');
//});
//Route::get('/admin/dashbord', function () { return view('admin.dashbord'); });


//  Admin URL
//Route::group(['prefix' => 'admin'], function () {
////    Route::get('/login', )
////    $router->post('', 'UserController@user_list');
//
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::group(['middleware' => 'auth'], function()
//{
//    Route::resource('customers', 'CustomersController');
//});
Route::group(['middleware' => 'auth'], function () {
    Route::get('customers', 'CustomerController@index')->name('customers.index');
    Route::get('vuesax', 'CustomerController@vuesax_index')->name('vuesax.index');
});

//Route::get('/customers', function () { return view('customers'); });

//Route::group(['middleware' => 'auth'], function()
//{
//    Route::apiResource('customers', '\App\Http\Controllers\API\CustomerAPIController');
//});
