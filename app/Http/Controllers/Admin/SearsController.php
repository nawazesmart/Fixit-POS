<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Quantity;
use Illuminate\Http\Request;

class SearsController extends Controller
{
    public function search(Request $request)

    {




        $zid = '100001';
        $products = Product::where(function ($scan) use ($request, $zid) {
            $scan->where('zid', $zid);
            $scan->where('xitem', 'LIKE', '%' . $request->search . '%');
        })->with(['quantity' => function ($query) use ($request, $zid) {
            $query->where('xitem', 'LIKE', '%' . $request->search . '%')
                ->where('zid', $zid);
        }])
            ->take(15)
            ->get();

        foreach ($products as $item) {
            $total = 0;
            foreach ($item->quantity as $quantity) {
                $total += $quantity->xqty * $quantity->xsign;
            }
            $item->quantity_total = $total;
        }

        return response()->json($products);

    }





    public function barcode()
    {

        $products = Product::select('xdesc' ,'xitem','zutime')
            ->groupBy('xdesc','xitem','zutime')
            ->where('zid','100001' )
            ->get();
        return view('Admin.BarCode.barCode' , compact('products'));
    }

    public function code($xitem)
    {
        $barCods = Product::where('xitem', $xitem)->first();
        return view('Admin.BarCode.codePage', compact('barCods'));
    }

}
