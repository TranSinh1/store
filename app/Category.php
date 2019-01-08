<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function Product()
    {
    	return $this->hasMany('App\Product', 'category_id');
    }
}
