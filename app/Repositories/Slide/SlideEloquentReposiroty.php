<?php

namespace App\Repositories\Slide;

use App\Repositories\EloquentRepository;
use App\Repositories\Slide\SlideRepositoryInterface;

class SlideEloquentRepository extends EloquentRepository implements SlideRepositoryInterface
{
	public function getModel()
	{
		return \App\Slide::class;
	}
}
