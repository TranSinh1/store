<?php

namespace App\Repositories\Product;

use App\Repositories\EloquentRepository;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductEloquentRepository extends EloquentRepository implements ProductRepositoryInterface
{
	public function getModel()
	{
		return \App\Product::class;
	}
}
