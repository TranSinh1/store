<?php

namespace App\Repositories\InvoiceDetail;

use App\Repositories\EloquentRepository;
use App\Repositories\InvoiceDetail\InvoiceDetailRepositoryInterface;

class InvoiceDetailEloquentRepository extends EloquentRepository implements InvoiceDetailRepositoryInterface
{
	public function getModel()
	{
		return \App\InvoiceDetail::class;
	}
}
