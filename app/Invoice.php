<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
	protected $table = 'invoice';
    protected $guarded = ['id'];

    public function product()
    {
    	return $this->belongsToMany('App\Product', 'invoice_detail', 'invoice_id', 'product_id')->withPivot('id', 'unit_price', 'quantity')->withTimestamps();
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function paymethod()
    {
        return $this->belongsTo('App\Paymethod', 'paymethod_id');
    }

    public function status()
    {
        return $this->belongsTo('App\StatusInvoice', 'status_id');
    }
}
