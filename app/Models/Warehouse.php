<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = "warehouses";

    public function categories()
    {
    	return $this->hasMany('App\Models\Category');
    }

    public function requests() {
    	return $this->hasMany('App\Models\WarehouseRequest');
    }
}
