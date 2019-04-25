<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Invoice\InvoiceRepositoryInterface;
use App\StatusInvoice;
use App\Paymethod;

class InvoiceController extends Controller
{
    protected $invoiceRepository;

	public function __construct(InvoiceRepositoryInterface $invoiceRepository)
	{
		$this->invoiceRepository = $invoiceRepository;
	}
    public function list(Request $request)
    {
    	$invoice = $this->invoiceRepository->model()->orderBy('id', 'desc')->paginate(config('customer.paginate.invoice'));
    	$keyword = $request->keyword;
    	if($keyword) {
    		$invoice = $this->invoiceRepository->model()->where('name', 'like', "%$keyword%")->paginate(config('customer.paginate.invoice'));
    		$invoice->setPath(route('list.cate'));
            $invoice->withPath('?keyword=' . $keyword);
    	}

    	return view('admin.invoice.list', compact('invoice'));
    }

    public function getUpdate($id)
    {
    	$invoice = $this->invoiceRepository->find($id);
    	if(!$invoice) {
    		return "404 notfound";
    	}
    	$status = StatusInvoice::all();
    	$paymethod = Paymethod::all();

    	return view('admin.invoice.update', compact('invoice', 'status', 'paymethod'));
    }

    public  function postUpdate(Request $request, $id)
    {
    	$data = $request->all();
    	$this->invoiceRepository->update($id, $data);

    	return redirect(route('update.invoice', ['id' => $id]))->with('alert', 'Bạn đã sửa thành công');
    }

    public function delete($id)
    {
    	$invoice = $this->invoiceRepository->find($id);
    	//dd($invoice->product);
    	if ($invoice) {
    		$invoice->product()->detach();
    	}
    	$this->invoiceRepository->delete($id);

    	return redirect(route('list.invoice'))->with('alert', 'Bạn đã xóa thành công hóa đơn');
    }
}
