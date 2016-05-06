<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarehouseRequest extends Model
{
    protected $table = 'requests';

    public function warehouse()
    {
    	return $this->belongsTo('App\Models\Warehouse');
    }
}
