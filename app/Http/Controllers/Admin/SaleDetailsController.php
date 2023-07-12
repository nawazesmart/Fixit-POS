<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductDetails;
use App\Models\SaleOrder;
use Illuminate\Http\Request;

class SaleDetailsController extends Controller
{

    public function index()
    {
        return view('Admin.Sales.sale-details',[
            'products' => SaleOrder::latest()->take(50)->get(),

        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

    }

    public function show($id)
    {
        $sale = SaleOrder::findOrFail($id);
        $details = ProductDetails::findOrFail($id);
        return view('Admin.Invoice.store-invoice' , compact('sale','details'));


    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

 protected $del;
    public function destroy($id)
    {
        $this->del= SaleOrder::fine($id);
        $this->del->delet();
        return redirect()->back();
    }
}
