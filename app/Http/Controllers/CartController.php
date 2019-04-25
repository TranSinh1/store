<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paymethod;
use App\Repositories\Invoice\InvoiceRepositoryInterface;
use App\Repositories\InvoiceDetail\InvoiceDetailRepositoryInterface;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PayRequest;
use App\Product;

class CartController extends Controller
{
    protected $paymethodRepository;
    protected $invoiceDetailRepository;
    protected $productRepository;

    public function __construct(InvoiceRepositoryInterface $invoiceRepository, InvoiceDetailRepositoryInterface $invoiceDetailRepository, ProductRepositoryInterface $productRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
        $this->invoiceDetailRepository = $invoiceDetailRepository;
        $this->productRepository = $productRepository;
    }

    public function cart()
    {
    	$cart = session()->has('cart') == true ? session('cart') : [];
    	$totalPrice = 0;
    	    	
    	return view('frontend.cart', compact('cart', 'totalPrice'));
    }

    public function removeCart()
    {
    	session()->forget('cart');
    }

    public function updateCart(Request $request)
    {
    	$data =$request->all();
    	
    	$cart = session()->has('cart') == true ? session('cart') : [];

    	foreach ($cart as $key => $value) {
    		$request->validate(
    			[
    				"quantity_".$value['id'] => "numeric|min:1|max:9",
    			],
                [
                    "quantity_".$value['id']."."."max" => "Nhập nhiều nhất 9 sản phẩm xin mời nhập lại",
                    "quantity_".$value['id']."."."min" => "Nhập ít nhất 1 sản phẩm",
                ]);
    		//kiem tra id san pham có trong gio hang thi bat dau gan quantity cua product do cho product do
    		if($data['product_'.$value['id']] == $value['id']) {
    			$value['quantity'] = $data['quantity_'.$value['id']];
    			$cart[$key]['quantity'] = $data['quantity_'.$value['id']];
    		}
    	}
	    session(['cart' => $cart]);

	    return redirect(route('view.cart'));
    }

    public function getPay()
    {
        $paymethod = Paymethod::all();
        $cart = session()->has('cart') == true ? session('cart') : [];
        foreach ($cart as $value) {
            $product = Product::where('id', $value['id'])->first();
            if($value['quantity'] > $product->quantity) {
                return redirect(route('view.cart'))->with('alert', $value['name'].' hiện giờ hết hàng vui lòng chọn sản phẩm khác');
            }
        }

        return view('frontend.pay', compact('paymethod'));
    }

    public function postPay(PayRequest $request)
    {
        $data_invoice = $request->all();
        $email = $request->email;
        $data_cart = [];
        $cart = session()->has('cart') == true ? session('cart') : [];
        $total_price = 0;
        if(empty($cart) == false) {
            $this->invoiceRepository->create($data_invoice);
            $invoice_id = $this->invoiceRepository->model()
                                                ->where('email', $email)
                                                ->orderBy('id', 'desc')
                                                ->first();
            $invoice_id = $invoice_id->id;
            foreach ($cart as $key => $value) {
                //update quantity product
                $product = Product::find($value['id']);
                $quantity = $product->quantity - $value['quantity'];
                $product->quantity = $quantity;
                $product->save();
                //end update product
                $unit_price = $value['price']*$value['quantity'];
                $total_price += $unit_price;
                //lấy dữ liệu sản phẩm
                $data_cart[] = $cart[$key];
                //kết thúc lấy dữ liệu sản phẩm
                //thêm dữ liệu sản phẩm để thêm vào invoice_detail
                $data_cart[$key]['product_id'] = $value['id'];
                $data_cart[$key]['unit_price'] = $unit_price;
                $data_cart[$key]['invoice_id'] = $invoice_id;
                $this->invoiceDetailRepository->create($data_cart[$key]);
            }
            $data_invoice['total_price'] = $total_price;
            if(Auth()->check()) {
                $data_invoice['user_id'] = Auth()->user()->id;
            }
            $this->invoiceRepository->update($invoice_id, $data_invoice);
            session()->forget('cart');

            return redirect(route('pay.success'));
            
        } else {
            return redirect(route('pay'))->with('alert', 'Trong giỏ hàng chưa có sản phẩm mờ bạn chọn sản phẩm');
        }
    }
}
