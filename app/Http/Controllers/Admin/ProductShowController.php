<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Smart;
use Illuminate\Http\Request;

class ProductShowController extends Controller
{

    public function index(Request $request)
    {

//        $selectedCategory = $request->input('xgitem');

        // Fetch products based on the selected category
//        $products = Smart::where('xgitem')->paginate(10);

        // Return the updated product listing view
//        return view('Admin.Sales.home')->with('products', $products);

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
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
}
