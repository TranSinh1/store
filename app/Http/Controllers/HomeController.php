<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\NewRepository\NewRepositoryInterface;

class HomeController extends Controller
{
    protected $categoryRepository;
    protected $productRepository;
    protected $newRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository, ProductRepositoryInterface $productRepository, NewRepositoryInterface $newRepository)
    {
    	$this->categoryRepository = $categoryRepository;
    	$this->productRepository = $productRepository;
    	$this->newRepository = $newRepository;
    }

    public function homePage()
    {
    	$categories = $this->categoryRepository->getAll();
        $hot_product = $this->productRepository->model()->where('hot_product', 1)->orderBy('id', 'desc')->paginate(8);
        $new_product = $this->productRepository->model()->orderBy('id', 'desc')->paginate(8)->take(16);

    	return view('frontend.homePage', compact('categories', 'hot_product', 'new_product'));
    }

    public function category($id)
    {
        $category = $this->categoryRepository->find($id);
        $products = $category->product()->orderBy('id', 'desc')->paginate(8);

        return view('frontend.category', compact('products', 'category'));
    }

    public function productDetail($id)
    {
        $product = $this->productRepository->find($id);
        if(!$product)
        {
            return "404 notfound";
        }

        return view('frontend.product-detail', compact('product'));
    }

    public function new()
    {
        $news = $this->newRepository->model()->orderBy('id', 'desc')->paginate(4);

        return view('frontend.new', compact('news'));
    }

    public function newDetail($id)
    {
        $new = $this->newRepository->find($id);
        if(!$new)
        {
            return "404 notfound";
        }

        return view('frontend.new-detail', compact('new'));
    }
}
