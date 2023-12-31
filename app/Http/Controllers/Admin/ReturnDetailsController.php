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
        'return'=>ProductReturn::latest()->paginate(350),
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
        $return = ProductReturn::where('zid', 100001)->where('ximtmptrn', $ximtmptrn)->first();
        $returnDetails = ProductReturnDetails::where('zid', 100001)->where('ximtmptrn', $ximtmptrn)->get();
        return view('Admin.Invoice.return-store-invoice',compact('return', 'returnDetails'));
    }


    public  function searchSystem(Request $request )
    {
        $zid = '100001';
        $products = ProductReturn::where(function ($scan) use ($request, $zid) {
            $scan->where('zid', $zid);
            $scan->where('ximtmptrn', 'LIKE', '%' . $request->search . '%');
        })
            ->take(9)
            ->get();
        return response()->json($products);
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
//    public function search(Request $request)
//    {
//        $searchValue = $request->input('SearchValue');
//        $zid = '100001';
//
//        $query = Product::select('xitem', 'xdesc', 'xstdcost', 'xunitiss')
//            ->where('zid', $zid);
//
//        if (strlen($searchValue) === 1) {
//            $query->where(function ($singleDigit) use ($searchValue) {
//                $singleDigit->where('xitem', 'LIKE', $searchValue . '%')
//                    ->orWhere('xdesc', 'LIKE', $searchValue . '%');
//            });
//        } else {
//            $query->where('xitem', $searchValue);
//        }
//
//        if ($request->scan) {
//            $query->where(function ($scan) use ($request) {
//                $scan->where('xdesc', 'LIKE', $request->scan . '%');
//                $scan->orWhere('xitem', 'LIKE', $request->scan . '%');
//                $scan->orWhere('xcitem', 'LIKE', $request->scan . '%');
//                $scan->orWhere('xstdcost', 'LIKE', $request->scan . '%');
//                $scan->orWhere('xunitiss', 'LIKE', $request->scan . '%');
//            })
//                ->take(5)
//                ->get();
//        }
//
//        $products = $query->groupBy('xdesc', 'xitem', 'xstdcost', 'xunitiss')->get();
//
//        return response()->json($products);
//    }


    public function search(Request $request){
        $searchVale = $request->input('SearchValue');
        $zid = '100001';
        $products = Product::select('xitem', 'xdesc','xstdcost','xunitiss')
            ->groupBy('xdesc', 'xitem','xstdcost','xunitiss')
            ->where('zid',$zid )
//            ->where('xitem', $searchVale)
            ->when(isset($searchVale), function ($q) use ($searchVale) {
                return $q->where('xitem', 'like', '%' . $searchVale . '%');
            })
            ->get();


        if ($request->scan) {
            $products->where(function ($scan) use ($request) {
                $scan->where('xdesc', 'LIKE', $request->scan . '%');
                $scan->orWhere('xitem', 'LIKE', $request->scan . '%');
                $scan->orWhere('xcitem', 'LIKE', $request->scan . '%');
                $scan->orWhere('xstdcost', 'LIKE', $request->scan . '%');
                $scan->orWhere('xunitiss', 'LIKE', $request->scan . '%');
            });
        }

        return response()->json($products);
    }
}
