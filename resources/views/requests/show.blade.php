@extends('layout.layout')

@section('title')
<title>Warehouse Request</title>
@stop

@section('content')
<h2 style="text-align: center">Request details</h2>
    <div class="row">
        <div id="panel-table">

            <div class="col-md-10">
                <ul class="list-group" style="text-align: center">
                    <li class="list-group-item" id="tble-content">Request code: {{$full_request->code}}</li>
                    <li class="list-group-item" id="tble-content">Request type: {{$full_request->type}}</li>
                    <li class="list-group-item" id="tble-content">Request status: <p id ="approve">{{$full_request->status}}</p></li>
                    <li class="list-group-item" id="tble-content">Supplier: {{$full_request->supplier_id}}</li>
                    <li class="list-group-item" id="tble-content">Quantity: {{$full_request->quantity}}</li>
                    <li class="list-group-item" id="tble-content">Date of request: {{$full_request->date}}</li>
                    <li class="list-group-item" id="tble-content">Cost per unit: {{$full_request->cost_per_unit}}</li>
                    <li class="list-group-item" id="tble-content">
                        <a href="{{route('warehouse_requests.export', [$warehouse_id, $full_request->id])}}" id="center"><button class="btn btn-success">Export to excel</button></a>
                        <a href="{{route('warehouse_requests.approve', [$warehouse_id, $full_request->id])}}" id="approved"><button class="btn btn-primary">Approve Request</button></a>
                    </li>
                </ul>
            
                <h3 style="text-align: center">List of products in request</h3>
                <table class="table table-striped table-bordered table-list" style="text-align: center">
                    <thead>
                        <tr>
                            <th id="tble-content">Suplier</th>
                            <th id="tble-content">Serial</th>
                            <th id="tble-content">Serial from supplier</th>
                            <th id="tble-content">Status</th>
                            <th><center><em class="fa fa-cog"></em></center></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td id="tble-content">{{$product->supplier_id}}</td>
                            <td id="tble-content">{{$product->serial}}</td>
                            <td id="tble-content">{{$product->serial_from_supplier}}</td>
                            <td id="tble-content">{{$product->status}}</td>
                            <td id="tble-content">
                                <a href="{{route('products.edit', [$warehouse_id, $product->category_id, $product->id])}}"><button class="btn btn-primary">Edit</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 

<script>
    if(document.getElementById("approve").textContent == '2') {
        console.log("ahihi");
        document.getElementById("approved").style.visibility = "hidden";
        document.getElementById("center").style.textAlign = "right";
    }
</script>
@stop