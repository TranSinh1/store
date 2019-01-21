<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Http\Requests\ProductRequest;
use App\Category;

class ProductController extends Controller
{
    protected $productRepository;

	public function __construct(ProductRepositoryInterface $productRepository)
	{
		$this->productRepository = $productRepository;
	}
    
    public function list(Request $request)
    {
    	$products = $this->productRepository->model()->paginate(config('customer.paginate.product'));
    	$keyword = $request->keyword;
    	if($keyword) {
    		$products = $this->productRepository->model()->where('name', 'like', "%$keyword%")->paginate(config('customer.paginate.product'));
    		$products->setPath(route('list.product'));
            $products->withPath('?keyword=' . $keyword);
    	}

    	return view('admin.product.list', compact('products'));
    }

    public function getCreate()
    {
    	$categories = Category::all();

    	return view('admin.product.create', compact('categories'));
    }

    public function postCreate(ProductRequest $request)
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

    		$path = $file->storeAs('images/products', $name_image);

    		$data['image'] = $path;

    	}

    	$this->productRepository->create($data);

    	return redirect(route('create.product'))->with('alert', 'Bạn đã thêm thành công');
    }

    public function getUpdate($id)
    {
    	$product = $this->productRepository->find($id);
    	$categories = Category::all();

    	return view('admin.product.update', compact('product', 'categories'));
    }

    public  function postUpdate(ProductRequest $request, $id)
    {
  		$data = $request->all();
  		$image_old = $this->productRepository->find($id)->image;
  		//bo chuoi images/products/ khoi ten image de co the unlink
  		$image_old = str_replace("images/products/", '', $image_old);

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
    			if(file_exists(public_path('images/products/'.$image_old)))
    			{
    				unlink(public_path('images/products/'.$image_old));
    			}
        }

  			$file = $request->image;

    		$name_image = uniqid()."_".$file->getClientOriginalName();

    		$path = $file->storeAs('images/products', $name_image);

    		$data['image'] = $path;
  			
  		}

  		$this->productRepository->update($id, $data);

  		return redirect(route('update.product', ['id' => $id]))->with('alert', 'Bạn đã sửa thành công');
    }

    public function delete(Request $request)
    {
    	$image_old = $this->productRepository->find($request->id)->image;
  		//bo chuoi images/products/ khoi ten image de co the unlink
  		$image_old = str_replace("images/products/", '', $image_old);
      if(!empty($image_old)) {
    		//kiem tra ton tai cua file anh cu va xoa di
    		if(file_exists(public_path('images/products/'.$image_old)))
    			{
    				unlink(public_path('images/products/'.$image_old));
    			}
  		}
    	$this->productRepository->delete($request->id);
    }
}
