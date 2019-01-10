<?php

namespace App\Repositories\NewRepository;

use App\Repositories\EloquentRepository;
use App\Repositories\NewRepository\NewRepositoryInterface;

class NewEloquentRepository extends EloquentRepository implements NewRepositoryInterface
{
	public function getModel()
	{
		return \App\NewModel::class;
	}
}
