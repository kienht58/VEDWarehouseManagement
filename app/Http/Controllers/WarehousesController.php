<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Warehouse;

use Response;

class WarehousesController extends Controller
{
    public function index()
    {
    	$warehouses = Warehouse::all();
    	return view('warehouses/index', compact('warehouses'));
    }

    public function show($warehouse_id) {
    	$warehouse = Warehouse::find($warehouse_id);
        $categories = Warehouse::find($warehouse_id)->categories;
    	return view('warehouses/show', compact('warehouse', 'categories'));
    }
}