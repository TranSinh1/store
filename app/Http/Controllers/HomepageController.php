<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\NewRepository\NewRepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use App\Invoice;
use App\InvoiceDetail;
use App\User;
use Auth;

class HomepageController extends Controller
{
    protected $categoryRepository;
    protected $productRepository;
    protected $newRepository;
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository, CategoryRepositoryInterface $categoryRepository, ProductRepositoryInterface $productRepository, NewRepositoryInterface $newRepository)
    {
    	$this->categoryRepository = $categoryRepository;
    	$this->productRepository = $productRepository;
    	$this->newRepository = $newRepository;
        $this->userRepository = $userRepository;
    }
    public function homePage(Request $request)
    {
    	$categories = $this->categoryRepository->getAll();
        $hot_product = $this->productRepository->model()->where('hot_product', 1)->orderBy('id', 'desc')->paginate(config('customer.paginate.product-front'));
        $keyword = $request->search;
        if($keyword) {
            $products = $this->productRepository->model()->where('name', 'like', "%$keyword%")->paginate(config('customer.paginate.product-front'));
            $products->setPath(route('home.page'));
            $products->withPath('?keyword=' . $keyword);

            return view('frontend.category', compact('products'));
        }
        $new_product = $this->productRepository->model()->orderBy('id', 'desc')->paginate(config('customer.paginate.product-front'))->take(16);
    	return view('frontend.homePage', compact('categories', 'hot_product', 'new_product'));
    }
    public function category($id)
    {
        $category = $this->categoryRepository->find($id);
        if (!$category)
        {
            return "404 notfound";
        }
        $products = $category->product()->orderBy('id', 'desc')->paginate(8);
         if (!$products)
        {
            return "404 notfound";
        }

        return view('frontend.category', compact('products', 'category'));
    }
    public function productDetail($id)
    {
        $product = $this->productRepository->find($id);
        if (!$product)
        {
            return "404 notfound";
        }

        return view('frontend.product-detail', compact('product'));
    }
    public function new(Request $request)
    {
        $news = $this->newRepository->model()
                                        ->where('hot_new', 1)
                                        ->orderBy('id', 'desc')
                                        ->paginate(config('customer.paginate.new-front'));
        $keyword = $request->search;
        if($keyword) {
            $news = $this->newRepository->model()->where('name', 'like', "%$keyword%")
                                                ->where('hot_new', 1)
                                                ->orderBy('id', 'desc')
                                                ->paginate(config('customer.paginate.new-front'));
            $news->setPath(route('new'));
            $news->withPath('?keyword=' . $keyword);

            return view('frontend.new', compact('news'));
        }

        return view('frontend.new', compact('news'));
    }
    public function newDetail($id)
    {
        $new = $this->newRepository->find($id);
        if (!$new)
        {
            return "404 notfound";
        }
        return view('frontend.new-detail', compact('new'));
    }
    public function addCart(Request $request)
    {
        $item = $this->productRepository->find($request->id);
        if (!$item) {
            return "404 notfound!";
        }
        //check xem co gio hang hay chua
        // chua co => tao moi
        $cart = session()->has('cart') == true ? session('cart') : [];
        $flag = -1;
        // kiem tra san pham xem co trong gio hang hay chua
        foreach ($cart as $key => $val) {
            if ($val['id'] === $item->id)
            {
                $flag = $key;
                break;
            }
        }
        // 1 - chua co => chuyen $item => mang | add quantity = 1
        if ($flag === -1) {
            $item->quantity = 1;
            if ($request->qty_product) {
                $item->quantity = $request->qty_product;
            }
            array_push($cart, $item->toArray());
        }
        // 2 - da co trong gio hang => xac dinh index
        // cart[index][quantity]++
        else {
            if ($request->qty_product) {
                $cart[$flag]['quantity'] = $request->qty_product; 
            } else {
                $cart[$flag]['quantity']++;
            }
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
        $totalPrice = 0;
        $totalItem = 0;
        //kiem tra ton tai cua gio hang
        if(session()->has('cart') == true) {
            //kiem tra xem product co trong gio hang hay ko neu co thi delete
            foreach (session('cart') as $key => $value) {
                $totalPrice += $value['price']*$value['quantity'];
                $totalItem += $value['quantity'];
                if($value['id'] === $product->id)
                {
                    $totalPrice -=$value['price']*$value['quantity'];
                    $totalItem = $totalItem - $value['quantity'];
                    unset($value[$key]);
                }
                else
                {
                    array_push($cart, $value);
                }
            }
            session(['cart' => $cart]);
        }

        return response()->json(['totalItem' => $totalItem, 'totalPrice' => $totalPrice, 'data' => $cart]);
    }

    public function getIntroduce()
    {
        return view('frontend.introduce');
    }

    public function product(Request $request)
    {
        $products = $this->productRepository->model()->orderBy('id', 'desc')->paginate(config('customer.paginate.product-front'));
        $keyword = $request->search;
        if($keyword) {
            $products = $this->productRepository->model()->where('name', 'like', "%$keyword%")->paginate(config('customer.paginate.product-front'));
            $products->setPath(route('product.page'));
            $products->withPath('?keyword=' . $keyword);

            return view('frontend.product', compact('products'));
        }

        return view('frontend.product', compact('products'));
    }

    public function viewInformation()
    {
        if(Auth::check()) {
            $user = Auth()->user();

            return view('frontend.information', compact('user'));
        }
    }

     public  function UpdateInfor(Request $request, $id)
    {
        $data = $request->all();
        $image_old = $this->userRepository->find($id)->avatar;
        //bo chuoi images/users/ khoi ten image de co the unlink
        $image_old = str_replace("images/avatar/", '', $image_old);

        if($request->hasFile('avatar')) {
            $this->validate($request,
                [
                    'avatar' => 'image'
                ],
                [
                    'avatar.image' => 'Not file image'
                ]);
        if (!empty($image_old)) {
                //kiem tra file anh va xoa anh trong folder
                if(file_exists(public_path('images/avatar/'.$image_old)))
                {
                    unlink(public_path('images/avatar/'.$image_old));
                }
        }

            $file = $request->avatar;

            $name_image = uniqid()."_".$file->getClientOriginalName();

            $path = $file->storeAs('images/avatar', $name_image);

            $data['avatar'] = $path;
            
        }

        if ($request->changePass == "on") {
            $data['password'] = bcrypt($request->password);
            $this->validate($request,
            [
                'password'=>'required|min:6|max:32',
                'passwordAgain'=>'required|same:password'
            ],
            [
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'Password phải có ít nhất 3 ký tự',
                'password.max'=>'Password có nhiều nhất 32 ký tự',
                'passwordAgain.required'=>'Bạn chưa nhập lại password',
                'passwordAgain.same'=>'Nhập lại password không chính xác'
            ]);
        }
        $this->validate($request,
                [
                    'name' => 'required|min:3|max:32',
                    'address' => 'required'
                ],
                [
                    'name.required' => 'Tên không được bỏ trống',
                    'name.min' => 'Tên chỉ ít nhất có 3 ký tự',
                    'name.max' => 'Tên nhiều nhất có 32 ký tự',
                    'address.required' => 'Địa chỉ không được để trống'
                ]);
        $this->userRepository->update($id, $data);

        return redirect(route('information'))->with('alert', 'Bạn đã sửa thành công');
    }

    public function listOrder()
    {
        if(Auth::check()) {
            $user = User::find(Auth()->user()->id);
            $invoice = $user->invoice;
           // foreach ($invoice as $key => $value) {
            
           //     foreach ($invoice->product as $key => $v->pivot) {
           //         echo $v['id'];
           //     }
           // }
            
        }   

        return view('frontend.list-order', compact(['invoice']));
    }
}
