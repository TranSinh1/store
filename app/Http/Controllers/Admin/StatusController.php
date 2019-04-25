<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Status\StatusRepositoryInterface;

class StatusController extends Controller
{
    protected $statusRepository;

    public function __construct(StatusRepositoryInterface $statusRepository)
    {
    	$this->statusRepository = $statusRepository;
    }

    public function list(Request $request)
    {
    	$status = $this->statusRepository->model()->paginate(5);
    	$keyword = $request->keyword;
    	if($keyword) {
    		$status = $this->statusRepository->model()->where('name', 'like', "%$keyword%")->paginate(5);
    		$status->setPath(route('list.status'));
            $status->withPath('?keyword=' . $keyword);
    	}

    	return view('admin.status.list', compact('status'));
    }
}
