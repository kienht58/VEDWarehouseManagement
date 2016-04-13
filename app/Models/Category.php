<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function warehouse()
    {
    	return $this->belongsTo('App\Models\Warehouse');
    }

    public function products() {
    	return $this->hasMany('App\Models\Product');
    }
}
