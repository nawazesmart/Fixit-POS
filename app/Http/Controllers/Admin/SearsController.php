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
            $scan->where('xdesc','LIKE','%'.$request.'%');
            $scan->orwhere('xitem','LIKE', '%'.$request.'%');
            $scan->orwhere('xcitem','LIKE', '%'.$request.'%');
            $scan->orwhere('xstdprice','LIKE', '%'.$request.'%');
        })
            ->get();

        return response()->json($products);
    }
}
