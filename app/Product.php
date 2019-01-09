<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id');
    }

    public function invoice()
    {
    	return $this->belongsToMany('App\Invoice', 'invoice_detail', 'invoice_id', 'product_id');
    }
}
