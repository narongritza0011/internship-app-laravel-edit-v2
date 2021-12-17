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
// Route::get('/', function () {
//     return view('auth/login');
// });

use App\Http\Controllers\FormController;

Route::get('/', ['middleware' => 'guest', function () {
    return view('auth/login');
}]);

Auth::routes();


//
Route::get('register', [FormController::class, 'index']);
Route::post('register/store', [FormController::class, 'store'])->name('register.save');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'home'], function () {
        Route::resource('dashboard', 'HomeController');
    });








    Route::group(['prefix' => 'manage'], function () {


        Route::resource('customer', 'CustomersController');
        Route::get('editCus/{id}', 'CustomersController@editCus');
        Route::get('delCus/{id}', 'CustomersController@delCus');
    });
});
