<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\NewRepository\NewRepositoryInterface;

class HomepageController extends Controller
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
        if(!$category)
        {
            return "404 notfound";
        }
        $products = $category->product()->orderBy('id', 'desc')->paginate(8);
         if(!$products)
        {
            return "404 notfound";
        }

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
    public function addCart(Request $request)
    {
        $item = $this->productRepository->find($request->id);
        if(!$item) {
            return "404 notfound!";
        }
        //check xem co gio hang hay chua
        // chua co => tao moi
        $cart = session()->has('cart') == true ? session('cart') : [];
        $flag = -1;
        // kiem tra san pham xem co trong gio hang hay chua
        foreach ($cart as $key => $val) {
            if($val['id'] === $item->id)
            {
                $flag = $key;
                break;
            }
        }
        // 1 - chua co => chuyen $item => mang | add quantity = 1
        if($flag === -1) {
            $item->quantity = 1;
            array_push($cart, $item->toArray());
        }
        // 2 - da co trong gio hang => xac dinh index
        // cart[index][quantity]++
        else {
            $cart[$flag]['quantity']++;
        }
        //cap nhat cart
        session(['cart' => $cart]);
        return response()->json(['succsess' => true, 'data' => $cart]);
    }
    public function deleteCart(Request $request)
    {
        //lay ra product cos id la id ben ajax gui vao
        $product = $this->productRepository->find($request->id);
        if(!$product) {
            return "404 notfound!";
        }
        //tao bien cart chua cac produc con lai trong gio hang
        $cart = [];
        //kiem tra ton tai cua gio hang
        if(session()->has('cart') == true) {
            //kiem tra xem product co trong gio hang hay ko neu co thi delete
            foreach (session('cart') as $key => $value) {
                if($value['id'] === $product->id)
                {
                    unset($value[$key]);
                }
                else
                {
                    array_push($cart, $value);
                }
            }
            session(['cart' => $cart]);
        }
        return response()->json(['succsess' => true, 'data' => $cart]);
    }
}
