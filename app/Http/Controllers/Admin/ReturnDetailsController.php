<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductReturn;
use App\Models\ProductReturnDetails;
use Illuminate\Http\Request;

class ReturnDetailsController extends Controller
{

    public function index()
    {

    return view('Admin.Return.Return-details',[
        'return'=>ProductReturn::latest()->take(150)->get(),
    ]);


    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($ximtmptrn)
    {
        $return = ProductReturn::where('ximtmptrn', $ximtmptrn)->first();
        $returnDetails = ProductReturnDetails::where('ximtmptrn', $ximtmptrn)->get();
        return view('Admin.Invoice.return-store-invoice',compact('return', 'returnDetails'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function search(Request $request){
        $searchVale = $request->input('SearchValue');
        $zid = '100001';
        $products = Product::select('xitem', 'xdesc')->groupBy('xdesc', 'xitem')->where('zid',$zid )->where('xitem', $searchVale)->get();
        if ($request->scan) {
            $products->where(function ($scan) use ($request) {
                $scan->where('xdesc', 'LIKE', $request->scan . '%');
                $scan->orWhere('xitem', 'LIKE', $request->scan . '%');
                $scan->orWhere('xcitem', 'LIKE', $request->scan . '%');
                $scan->orWhere('xstdprice', 'LIKE', $request->scan . '%');
            });
        }
        //$products = $products->get();
        return response()->json($products);
    }
}
