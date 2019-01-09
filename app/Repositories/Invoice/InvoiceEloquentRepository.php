<?php

namespace App\Repositories\Invoice;

use App\Repositories\EloquentRepository;
use App\Repositories\Invoice\InvoiceRepositoryInterface;

class InvoiceEloquentRepository extends EloquentRepository implements InvoiceRepositoryInterface
{
	public function getModel()
	{
		return \App\Invoice::class;
	}
}
