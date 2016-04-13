<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Warehouse;

use App\Models\Category;

use Response;

class ProductsController extends Controller
{
    public function index($warehouseID, $categoryID)
    {
    	$products = Warehouse::find($warehouseID)->categories->find($categoryID)->products;
    	return Response::json($products);
    }
}
