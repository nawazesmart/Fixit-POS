<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\StoreSaleRequest;
use App\Models\Member;
use App\Models\Product;
use App\Models\Smart;
use App\Models\zbusiness;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;
use Illuminate\Support\Facades\DB;


class SalesController extends Controller
{
    protected $key;

    public function index(Request $request)
    {
        $zid = $request->input('zid');
        $products = Product::select('xdesc')
            ->groupBy('xdesc')
            ->where($zid)
            ->get();
        if ($request->scan){
            $products->where(function ($scan) use ($request){
                $scan->where('xdesc','LIKE', $request->scan.'%');
                $scan->orwhere('xitem','LIKE', $request->scan.'%');
                $scan->orwhere('xcitem','LIKE', $request->scan.'%');
                $scan->orwhere('xstdprice','LIKE', $request->scan.'%');
            });
        }





//        $products = $sql->paginate(10);








        $selectedCategory = $request->input('xgitem');
//        $products = Product::paginate(10);
//      $products = Smart::where('xgitem', $selectedCategory)->get();
        $zid = $request->input('zid');
        $zidCode = Product::select('xwh')
            ->groupBy('xwh')
            ->where($zid)
            ->get();


        $zid = $request->input('zid');
        $category = Product::select('xgitem')
            ->groupBy('xgitem')
            ->where($zid)
            ->get();

//        return  $products;
        return view('Admin.Sales.home', compact('products', 'category', 'zidCode',), [

            'customer' => Member::all(),

        ]);
    }

    public function store(StoreSaleRequest $request)
    {
        dd($request->toArray());

    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function fetchCategory($data)
    {

        $results = Product::select('xgitem AS Category_name')
            ->selectRaw("string_agg(DISTINCT xwh, ',') AS branch_name")
            ->groupBy('xgitem')
            ->get();

        $categoryBranches = [];

        foreach ($results as $result) {
            $categoryName = $result->Category_name;
            $branchNames = explode(',', $result->branch_name);

            foreach ($branchNames as $branchName) {
                $categoryBranches[$categoryName][] = trim($branchName);
            }
        }

        $categoryNames = Product::select('xgitem AS Category_name')
            ->whereRaw("',' || xwh || ',' LIKE '%,{$data},%'")
            ->groupBy('xgitem')
            ->pluck('Category_name')
            ->toArray();

        $categoryNamesWithData = [];

        foreach ($categoryNames as $index => $categoryName) {
            $categoryNamesWithData[$categoryName] = $index;
        }

        return $categoryNamesWithData;

    }


    public function fetchProductsDetails($category_id, $branch_id)
    {
        $product = Product::where('xwh', $branch_id)->where('xgitem', $category_id)->get();

        //dd($product->count());

        return response()->json([
            '$product' => $product,
            '$category_id' => $category_id,
            '$branch_id' => $branch_id,
        ]);


//        $selectedCategory = $request->category;
//
//        // Fetch products based on the selected category
//        $products = Product::where('xgitem', $selectedCategory)->paginate(100);
//
//        // Return the updated product listing view
//        return response()->json($products);
    }

}
