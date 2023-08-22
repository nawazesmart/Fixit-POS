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
            'products' => SaleOrder::latest()->paginate(250),

        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

    }

    public function show($xordernum)
    {
        $sale = SaleOrder::where('xordernum', $xordernum)->first();
        $details = ProductDetails::where('xordernum', $xordernum)->get();
//        dd($sale,$details);
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
