<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\zbusiness;
use Illuminate\Http\Request;

class ProductCOntroller extends Controller
{

    public function index(Request $request)
    {
        $zid = $request->input('zid');
        $products = Product::select('xgitem')
            ->groupBy('xgitem')
            ->where($zid)
            ->get();

        return  view('Admin.Product.product',compact('products'));
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

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
