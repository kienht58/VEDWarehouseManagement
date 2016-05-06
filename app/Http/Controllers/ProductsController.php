<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Warehouse;

use App\Models\Category;

use App\Models\Product;

use Response;

class ProductsController extends Controller
{
    public function index($warehouse_id, $category_id) {
    	$products = Warehouse::find($warehouse_id)->categories->find($category_id)->products;
    	return view('products/index', compact('products', 'warehouse_id', 'category_id'));
    }

    public function show($warehouse_id, $category_id, $product_id) {
    	$product = Warehouse::find($warehouse_id)->categories->find($category_id)->products->find($product_id);
    	return view('products/show', compact('product', 'warehouse_id', 'category_id'));
    }

    public function create($warehouse_id, $category_id) {
    	return view('products/new', compact('warehouse_id', 'category_id'));
    }

    public function store(Request $request, $warehouse_id, $category_id) {
    	$product = new Product;

    	$product->category_id = $request->category_id;
    	$product->supplier_id = $request->supplier_id;
        $product->request_code = $request->request_code;
    	$product->serial = $request->serial;
    	$product->serial_from_supplier = $request->serial_from_supplier;
    	$product->status = $request->status;

    	$product->save();

    	return redirect()->route('products.index', compact('warehouse_id', 'category_id'));
    }

    public function edit($warehouse_id, $category_id, $product_id) {
        $product = Warehouse::find($warehouse_id)->categories->find($category_id)->products->find($product_id);
    	return view('products/edit', compact('product', 'warehouse_id', 'category_id'));
    }

    public function update(Request $request, $warehouse_id, $category_id, $product_id) {
        $Product::where('product_id', $product_id)->update($request->except('_method', '_token'));
        return redirect()->route('products.show', compact('warehouse_id', 'category_id', 'product_id'));
    }

    public function destroy($warehouse_id, $category_id, $product_id) {
        Product::where('id', $product_id)->delete();
        return redirect()->route('products.index', compact('warehouse_id', 'category_id'));
    }
}
