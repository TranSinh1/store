<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded = ['id'];

    public function product()
    {
    	return $this->belongsToMany('App\Product', 'invoice_detail', 'invoice_id', 'product_id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
