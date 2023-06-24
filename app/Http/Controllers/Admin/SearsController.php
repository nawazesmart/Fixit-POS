<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearsController extends Controller
{
    public function search(Request $request)

    {
        $zid ='100001';
        $products = Product::where(function ($scan) use ($request, $zid) {
            $scan->where('zid', $zid);
            $scan->where('xitem', 'LIKE', '%' . $request->search . '%');
        })  ->take(10)
            ->get();

        return response()->json($products);

    }

}
