<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Invoice;
use App\Product;
use Carbon\Carbon;

class HomeAdminController extends Controller
{
    public function index(Request $request)
    {	
    	$year = \DB::table('invoice')->select(\DB::raw('YEAR(created_at) as year'))->orderBy('created_at', 'desc')->distinct()->get();
        $quantity_invoice = Invoice::count();
        $product = Product::count();
        //$product_no_longer = Product::where('quantity', 0)->count();
        $sum_money = Invoice::where('status_id', 3)->sum('total_price');
        $money_day = Invoice::whereYear('created_at', Carbon::now()->year)
                            ->whereMonth('created_at', Carbon::now()->month)
                            ->whereDay('created_at', Carbon::now()->day)
                            ->where('status_id', 3)->sum('total_price');

    	return view('admin.statistical', compact(['year', 'quantity_invoice', 'product','sum_money', 'money_day']));
    }

    public function getDataDoughnut($year)
    {

    	$delivered = Invoice::where('status_id', 3)->whereYear('created_at', $year)->count();
    	$processing = Invoice::where('status_id', 2)->whereYear('created_at', $year)->count();
    	$waiting = Invoice::where('status_id', 1)->whereYear('created_at', $year)->count();
    
    	return response()->json(['delivered' => $delivered, 'processing' => $processing, 'waiting' => $waiting]);
    }

    public function getDataLine($year)
    {
    	$money = \DB::table('invoice')->select(\DB::raw('sum(total_price) as money, MONTH(created_at) as month'))->whereYear('created_at', $year)->where('status_id', 3)->groupBy(\DB::raw('MONTH(created_at)'))->get();
    	$month = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0, 11 => 0, 12 => 0);
    	foreach ($money as $value) {
    		if($value->month) {
    			$month[$value->month] = $value->money;
    		}
    	}
    	
    	return $month;
    }
}
