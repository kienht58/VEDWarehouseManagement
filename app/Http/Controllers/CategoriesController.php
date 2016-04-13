<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Category;

use App\Models\Warehouse;

use Response;

class CategoriesController extends Controller
{
    public function index($id)
    {
    	$categories = Warehouse::find($id)->categories;
    	return Response::json($categories);
    }
}
