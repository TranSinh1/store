<?php

namespace App\Repositories\Status;

use App\Repositories\EloquentRepository;
use App\Repositories\Status\StatusRepositoryInterface;

class StatusEloquentRepository extends EloquentRepository implements StatusRepositoryInterface
{
	public function getModel()
	{
		return \App\StatusInvoice::class;
	}
}
