<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Category;

use App\Models\Warehouse;

use Response;

class CategoriesController extends Controller
{
    public function index($warehouse_id) {
    	$categories = Warehouse::find($warehouse_id)->categories;
    	return view('categories/index', compact('categories', 'warehouse_id'));
    }

    public function show($warehouse_id, $category_id) {
    	$category = Warehouse::find($warehouse_id)->categories->find($category_id);
        $products = $category->products;
    	return view('categories/show', compact('category', 'products'));
    }

    public function create($warehouse_id) {
    	return view('categories/new', compact('warehouse_id'));
    }

    public function store(Request $request, $warehouse_id) {
    	$category = new Category;
    	$category->warehouse_id = $warehouse_id;
    	$category->code = $request->code;
    	$category->name = $request->name;
    	$category->unit = $request->unit;
    	$category->save();

    	return redirect()->route('categories.index', compact('warehouse_id'));
    }

    public function edit($warehouse_id, $category_id) {
    	$category = Warehouse::find($warehouse_id)->categories->find($category_id);
    	return view('categories/edit', compact('category', 'warehouse_id'));
    }

    public function update(Request $request, $warehouse_id, $category_id) {
    	Category::where('id', $category_id)->update($request->except('_method', '_token'));
    	return redirect()->route('categories.show', compact('warehouse_id' ,'category_id'));
    }
}