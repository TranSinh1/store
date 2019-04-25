<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCateRequest;
use Illuminate\Support\Str;
use App\Product;

class CategoryController extends Controller
{
	protected $categoryRepository;

	public function __construct(CategoryRepositoryInterface $categoryRepository)
	{
		$this->categoryRepository = $categoryRepository;
	}
    public function list(Request $request)
    {
    	$categories = $this->categoryRepository->model()->paginate(config('customer.paginate.category'));
    	$keyword = $request->keyword;
    	if($keyword) {
    		$categories = $this->categoryRepository->model()->where('name', 'like', "%$keyword%")->paginate(config('customer.paginate.category'));
    		$categories->setPath(route('list.cate'));
            $categories->withPath('?keyword=' . $keyword);
    	}

    	return view('admin.category.list', compact('categories'));
    }

    public function getCreate()
    {
    	return view('admin.category.create');
    }

    public function postCreate(CategoryRequest $request)
    {
    	$name = $request->name;
    	$slug = str::slug($name);
    	$data = $request->all();
    	$data['slug'] = $slug;
    	$this->categoryRepository->create($data);

    	return redirect(route('create.cate'))->with('alert', 'Bạn đã thêm thành công');
    }

    public function getUpdate($id)
    {
    	$cate = $this->categoryRepository->find($id);

    	return view('admin.category.update', compact('cate'));
    }

    public  function postUpdate(UpdateCateRequest $request, $id)
    {
    	$name = $request->name;
    	$slug = str::slug($name);
    	$data = $request->all();
    	$data['slug'] = $slug;
    	$this->categoryRepository->update($id, $data);

    	return redirect(route('update.cate', ['id' => $id]))->with('alert', 'Bạn đã sửa thành công');
    }

    public function delete(Request $request)
    {
    	$this->categoryRepository->delete($request->id);
        $products = Product::where('category_id', $request->id);
        $products->delete();
    }
}

