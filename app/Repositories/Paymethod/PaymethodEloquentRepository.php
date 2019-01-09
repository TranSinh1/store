<?php

namespace App\Repositories\Paymethod;

use App\Repositories\Paymethod\PaymethodRepositoryInterface;
use App\Repositories\EloquentRepository;

class PaymethodEloquentRepository extends EloquentRepository implements PaymethodRepositoryInterface
{
	public function getModel()
	{
		return \App\Paymethod::class;
	}
}
