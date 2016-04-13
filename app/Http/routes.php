<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/warehouses', 'WarehousesController@index');
Route::get('/warehouses/{id}/categories', 'CategoriesController@index');
Route::get('/warehouses/{warehouseID}/categories/{categoryID}/products', 'ProductsController@index');