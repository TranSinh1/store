<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Slide\SlideRepositoryInterface;
use App\Http\Requests\SlideRequest;
use App\Http\Requests\UpdateSlideRequest;

class SlideController extends Controller
{
    protected $slideRepository;

    public function __construct(SlideRepositoryInterface $slideRepository)
    {
    	$this->slideRepository = $slideRepository;
    }

    public function list(Request $request)
    {
    	$slidies = $this->slideRepository->model()->paginate(config('customer.paginate.slide'));
    	$keyword = $request->keyword;
    	if($keyword) {
    		$slidies = $this->slideRepository->model()->where('name', 'like', "%$keyword%")->paginate(config('customer.paginate.slide'));
    		$slidies->setPath(route('list.slide'));
            $slidies->withPath('?keyword=' . $keyword);
    	}

    	return view('admin.slide.list', compact('slidies'));
    }

    public function getCreate()
    {
    	return view('admin.slide.create');
    }

    public function postCreate(SlideRequest $request)
    {
    	$data = $request->all();
    	if($request->hasFile('image')) {
    		$file = $request->image;
    		$name_image = uniqid()."_".$file->getClientOriginalName();
    		$path = $file->storeAs('images/slide', $name_image);
    		$data['image'] = $path;
    	}
    	$this->slideRepository->create($data);

    	return redirect(route('create.slide'))->with('alert', 'Bạn đã thêm thành công slide');
    }

    public function getUpdate($id)
    {
    	$slide = $this->slideRepository->find($id);

    	return view('admin.slide.update', compact('slide'));
    }

     public  function postUpdate(UpdateSlideRequest $request, $id)
    {
  		$data = $request->all();
  		$image_old = $this->slideRepository->find($id)->image;
  		//bo chuoi images/products/ khoi ten image de co the unlink
  		$image_old = str_replace("images/slide/", '', $image_old);

  		if($request->hasFile('image')) {
  			if(!empty($image_old)) {
  				//kiem tra file anh va xoa anh trong folder
	  			if(file_exists(public_path('images/slide/'.$image_old)))
	  			{
	  				unlink(public_path('images/slide/'.$image_old));
	  			}
	  		}

  			$file = $request->image;

    		$name_image = uniqid()."_".$file->getClientOriginalName();

    		$path = $file->storeAs('images/slide', $name_image);

    		$data['image'] = $path;
  			
  		}

  		$this->slideRepository->update($id, $data);

  		return redirect(route('list.slide', ['id' => $id]))->with('alert', 'Bạn đã sửa thành công');
    }

   public function delete($id)
    {
    	$image_old = $this->slideRepository->find($id)->image;
  		//bo chuoi images/products/ khoi ten image de co the unlink
  		$image_old = str_replace("images/slide/", '', $image_old);
  		if(!empty($image_old)) {
	  		//kiem tra ton tai cua file anh cu va xoa di
	  		if(file_exists(public_path('images/slide/'.$image_old)))
	  			{
	  				unlink(public_path('images/slide/'.$image_old));
	  			}
  		}
     	$this->slideRepository->delete($id);

    	return redirect(route('list.slide'))->with('alert', 'Bạn đã xóa thành công');
    }
}
