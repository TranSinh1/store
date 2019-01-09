<?php

namespace App\Repositories\Role;

use App\Repositories\EloquentRepository;
use App\Repositories\Role\RoleRepositoryInterface;

class RoleEloquentRepository extends EloquentRepository implements RoleRepositoryInterface
{
	public function getModel()
	{
		return \App\Role::class;
	}
}
