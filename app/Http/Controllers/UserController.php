<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;

class UserController extends Controller
{
	protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
    	$this->categoryRepository = $categoryRepository;
    }
}
