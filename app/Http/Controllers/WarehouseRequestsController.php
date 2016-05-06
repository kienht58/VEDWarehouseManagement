<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Warehouse;
use App\Models\Product;
use App\Models\WarehouseRequest;
use Excel;
use DB;
use Input;

class WarehouseRequestsController extends Controller
{
    public function index($warehouse_id) {
    	$warehouse_requests = Warehouse::find($warehouse_id)->requests;
    	return view('requests/index', compact('warehouse_requests', 'warehouse_id'));
    }

    public function show($warehouse_id, $request_id) {
        $full_request = DB::table('requests')
                                ->join('request_details', 'code', '=', 'request_code')
                                ->select('requests.*', 'request_details.*')->first();
        $products = Product::where('request_code', $full_request->code)->get();
        return view('requests/show', compact('full_request', 'products', 'warehouse_id'));
    }

    public function create($warehouse_id) {
    	return view('requests/new', compact('warehouse_id'));
    }

    public function store(Request $request, $warehouse_id) {
        $warehouse_request = new WarehouseRequest;
        $warehouse_request->warehouse_id = $warehouse_id;
        $warehouse_request->status = 1;
        $warehouse_request->code = $request->code;
        $warehouse_request->type = $request->type;
        $warehouse_request->save();

        DB::table('request_details')->insert([
            'request_code' => $request->code,
            'supplier_id' => $request->supplier_id,
            'quantity' => $request->quantity,
            'cost_per_unit' => $request->cost_per_unit,
            'note' => $request->note
        ]);

        Excel::load(Input::file('file'), function($reader) use($request) {   
            foreach ($reader->toArray() as $key => $value) {
                $product = new Product;
                $product->category_id = $value['category_id'];
                $product->supplier_id = $value['supplier_id'];
                $product->request_code = $request->code;
                $product->serial = $value['serial'];
                $product->serial_from_supplier = $value['serial_from_supplier'];
                $product->status = $value['status'];

                $product->save();
            }
        });

        return redirect()->route('warehouse_requests.index', compact('warehouse_id'));
    }

    public function edit($warehouse_id, $request_id) {
        $warehouse_request = Warehouse::find($warehouse_id)->requests->find($request_id);
        return view('requests/edit', compact('warehouse_request', 'warehouse_id'));
    }

    public function update(Request $request, $warehouse_id, $request_id) {
        WarehouseRequest::where('id', $request_id)->update($request->except('_method', '_token'));
        return redirect()->route('warehouse_requests.show', compact('warehouse_id' ,'request_id'));
    }

    public function export($warehouse_id, $request_id) {
        $warehouse_request = WarehouseRequest::where('id', $request_id)->select('*')->get();
        Excel::create('export data', function ($excel) use($warehouse_request) {
            $excel->sheet('Sheet 1', function($sheet) use($warehouse_request) {
                $sheet->fromArray($warehouse_request);
            });
        })->export('xlsx');
    }

    public function approve($warehouse_id, $request_id) {
        WarehouseRequest::where('id', $request_id)->update(['status' => 2]);
        return redirect()->route('warehouse_requests.show', compact('warehouse_id' ,'request_id'));
    }
}
