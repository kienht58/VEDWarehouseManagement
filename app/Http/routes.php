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

Route::group(['prefix' => 'warehouses'], function() {
	Route::get('/', [
		'as' => 'warehouses.index',
		'uses' => 'WarehousesController@index'
		]);

	Route::get('/{warehouse_id}', [
		'as' => 'warehouses.show',
		'uses' => 'WarehousesController@show'
		]);
});

Route::group(['prefix' => '/warehouses/{warehouse_id}/categories'], function(){
	Route::get('/', [
		'as' => 'categories.index',
		'uses' => 'CategoriesController@index'
		]);

	Route::get('/create', [
		'as' => 'categories.create',
		'uses' =>'CategoriesController@create'
		]);

	Route::get('/{category_id}', [
		'as' => 'categories.show',
		'uses' => 'CategoriesController@show'
		]);

	Route::get('/{category_id}/edit', [
		'as' => 'categories.edit',
		'uses' => 'CategoriesController@edit'
		]);

	Route::post('/', [
		'as' => 'categories.store',
		'uses' => 'CategoriesController@store'
		]);

	Route::put('/{category_id}', [
		'as' => 'categories.update',
		'uses' => 'CategoriesController@update'
		]);
});

Route::group(['prefix' => '/warehouses/{warehouse_id}/categories/{category_id}/products'], function() {
	Route::get('/', [
		'as' => 'products.index',
		'uses' => 'ProductsController@index'
		]);

	Route::get('/create', [
		'as' => 'products.create',
		'uses' => 'ProductsController@create'
		]);

	Route::get('/{product_id}', [
		'as' => 'products.show',
		'uses' => 'ProductsController@show'
		]);

	Route::get('/{product_id}/edit', [
		'as' => 'products.edit',
		'uses' => 'ProductsController@edit'
		]); 

	Route::post('/', [
		'as' => 'products.store',
		'uses' => 'ProductsController@store'
		]);

	Route::put('/{product_id}', [
		'as' => 'products.update',
		'uses' => 'ProductsController@update'
		]);

	Route::delete('/{product_id}', [
		'as' => 'products.destroy',
		'uses' => 'ProductsController@destroy'
		]);
});

Route::group(['prefix' => '/warehouses/{warehouse_id}/requests'], function() {
	Route::get('/', [
		'as' => 'warehouse_requests.index',
		'uses' => 'WarehouseRequestsController@index'
		]);

	Route::get('/create', [
		'as'=> 'warehouse_requests.create',
		'uses' => 'WarehouseRequestsController@create'
		]);

	Route::get('/{request_id}', [
		'as' => 'warehouse_requests.show',
		'uses' => 'WarehouseRequestsController@show'
		]);

	Route::get('/{request_id}/approve', [
		'as' => 'warehouse_requests.approve',
		'uses' => 'WarehouseRequestsController@approve'
		]);
	
	Route::get('/{request_id}/export', [
		'as' => 'warehouse_requests.export',
		'uses' => 'WarehouseRequestsController@export'
		]);

	Route::get('/{request_id}/edit', [
		'as' => 'warehouse_requests.edit',
		'uses' => 'WarehouseRequestsController@edit'
		]);

	Route::post('/', [
		'as' => 'warehouse_requests.store',
		'uses' => 'WarehouseRequestsController@store'
		]);
	
	Route::put('/{request_id}', [
		'as' => 'warehouse_requests.update',
		'uses' => 'WarehouseRequestsController@update'
		]);
});

Route::group(['prefix' => '/inventories'], function() {
	Route::get('/', [
		'as' => 'inventories.index',
		'uses' => 'InventoriesController@index'
		]);
	Route::post('/', [
		'as' => 'inventories.promptRequest',
		'uses' => 'InventoriesController@promptRequest'
		]);
	Route::get('/{warehouse_id}/categories', [
		'as' => 'inventories.show_categories',
		'uses' => 'InventoriesController@showCategories'
		]);
	Route::get('/{warehouse_id}/categories/{categories_id}/products', [
		'as' => 'inventories.show_products',
		'uses' => 'InventoriesController@showProducts'
	]);
});

Route::put('/update', [
	'as' => 'inventories.update',
	'uses' => 'InventoriesController@update'
	]);