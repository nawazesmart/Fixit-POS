<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearsController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $products = Product::where(function ($scan) use ($request){
            $scan->where('xdesc','LIKE','%'.$request->search.'%');
            $scan->orWhere('xitem','LIKE', '%'.$request->search.'%');
            $scan->orWhere('xcitem','LIKE', '%'.$request->search.'%');
            $scan->orWhere('xstdprice','LIKE', '%'.$request->search.'%');
        })
            ->take(10)
            ->get();

        return response()->json($products);
    }
}
