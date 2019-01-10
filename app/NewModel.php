<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
	protected $table = 'news';
    protected $guarded = ['id'];
}
