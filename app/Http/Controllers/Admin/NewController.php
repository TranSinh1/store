<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\NewRepository\NewRepositoryInterface;
use App\Http\Requests\NewRequest;

class NewController extends Controller
{
    protected $newRepository;

	public function __construct(NewRepositoryInterface $newRepository)
	{
		$this->newRepository = $newRepository;
	}

	public function list(Request $request)
    {
    	$news = $this->newRepository->model()->orderBy('id', 'desc')->paginate(config('customer.paginate.new'));
    	$keyword = $request->keyword;
    	if($keyword) {
    		$news = $this->newRepository->model()->where('name', 'like', "%$keyword%")->paginate(config('customer.paginate.new'));
    		$news->setPath(route('list.new'));
            $news->withPath('?keyword=' . $keyword);
    	}

    	return view('admin.new.list', compact('news'));
    }

    public function getCreate()
    {
    	return view('admin.new.create');
    }

    public function postCreate(NewRequest $request)
    {
    	$data = $request->all();
    	if($request->hasFile('image')) {
    		$this->validate($request,
    			[
    				'image' => 'image'
    			],
    			[
    				'image.image' => 'Not file image'
    			]);
    		$file = $request->image;

    		$name_image = uniqid()."_".$file->getClientOriginalName();

    		$path = $file->storeAs('images/news', $name_image);

    		$data['image'] = $path;

    	}

    	$this->newRepository->create($data);

    	return redirect(route('create.new'))->with('alert', 'Bạn đã thêm thành công');
    }

    public function getUpdate($id)
    {
    	$new = $this->newRepository->find($id);

    	return view('admin.new.update', compact('new'));
    }

    public  function postUpdate(NewRequest $request, $id)
    {
  		$data = $request->all();
  		$image_old = $this->newRepository->find($id)->image;
  		//bo chuoi images/products/ khoi ten image de co the unlink
  		$image_old = str_replace("images/news/", '', $image_old);

  		if($request->hasFile('image')) {
  			$this->validate($request,
    			[
    				'image' => 'image'
    			],
    			[
    				'image.image' => 'Not file image'
    			]);
  			if(!empty($image_old)) {
  				//kiem tra file anh va xoa anh trong folder
	  			if(file_exists(public_path('images/news/'.$image_old)))
	  			{
	  				unlink(public_path('images/news/'.$image_old));
	  			}
	  		}

  			$file = $request->image;

    		$name_image = uniqid()."_".$file->getClientOriginalName();

    		$path = $file->storeAs('images/news', $name_image);

    		$data['image'] = $path;
  			
  		}

  		$this->newRepository->update($id, $data);

  		return redirect(route('update.new', ['id' => $id]))->with('alert', 'Bạn đã sửa thành công');
    }

    public function delete($id)
    {
    	$image_old = $this->newRepository->find($id)->image;
  		//bo chuoi images/products/ khoi ten image de co the unlink
  		$image_old = str_replace("images/news/", '', $image_old);
  		if(!empty($image_old)) {
	  		//kiem tra ton tai cua file anh cu va xoa di
	  		if(file_exists(public_path('images/news/'.$image_old)))
	  			{
	  				unlink(public_path('images/news/'.$image_old));
	  			}
  		}
     	$this->newRepository->delete($id);

    	return redirect(route('list.new'))->with('alert', 'Bạn đã xóa thành công');
    }
}
