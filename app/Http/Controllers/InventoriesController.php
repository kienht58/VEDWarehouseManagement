<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Warehouse;
use DB;

class InventoriesController extends Controller
{
    public function index() {
    	$warehouses = Warehouse::select('id', 'name')->lists('name', 'id');
    	return view('inventories/index', compact('warehouses'));
    }
    public function promptRequest(Request $request) {
    	$warehouse_id = $request->warehouse_id;
    	return redirect()->route('inventories.show_categories', compact('warehouse_id'));
    }

    public function showCategories($warehouse_id) {
    	$categories = Warehouse::find($warehouse_id)->categories;
    	return view('inventories/show_categories', compact('categories', 'warehouse_id'));
    }

    public function showProducts($warehouse_id, $category_id) {
    	$products = Warehouse::find($warehouse_id)->categories->find($category_id)->products;
        $status = DB::table('dictionaries')->lists('name', 'id');
    	return view('inventories/show_products', compact('products', 'warehouse_id', 'category_id', 'status'));
    }

    public function update(Request $request) {
        dd($request);
    }
}
