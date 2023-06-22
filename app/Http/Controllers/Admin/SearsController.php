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


//        $zid = $request->input('10001');
//        $products = Product::table('caitem')
//            ->select('xitem', Product::raw('COUNT(zid) AS count'))
//            ->groupBy('xitem')
//            ->havingRaw("COUNT(DISTINCT CASE WHEN zid = '$zid' THEN zid END) = 1")
//            ->get();
//
//
//
//
////        $zid = $request->input('100001');
////        $products = Product::select('xdesc')
////            ->groupBy('xdesc')
////            ->where('zid', '100001')
////            ->get();
//        if ($request->scan) {
//            $products->where(function ($scan) use ($request) {
//                $scan->where('xdesc', 'LIKE', $request->scan . '%');
//                $scan->orwhere('xitem', 'LIKE', $request->scan . '%');
//                $scan->orwhere('xcitem', 'LIKE', $request->scan . '%');
//                $scan->orwhere('xstdprice', 'LIKE', $request->scan . '%');
//            });
//        }
//
//        return response()->json($products);
    }

}
