<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    protected $table = 'invoice_detail';
    protected $fillable = ['invoice_id', 'product_id', 'unit_price', 'quantity', 'created_at', 'updated_at'];
}
