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
    	return Response::json($warehouses);
    }
}
