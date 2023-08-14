<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductReturn;
use App\Models\ProductReturnDetails;
use App\Models\Quantity;
use Illuminate\Http\Request;

class SaleReturnController extends Controller
{

    public function index()
    {
        //
    }


    public function create(Request $request)
    {
//        return $request->all();
        $zid = $request->input('zid');
        $products = Product::select('xitem', 'xdesc')
        ->groupBy('xdesc', 'xitem')
        ->where($zid)
//            ->get();
            ->take(50);

        if ($request->scan) {
            $products->where(function ($scan) use ($request) {
                $scan->where('xdesc', 'LIKE', $request->scan . '%');
                $scan->orWhere('xitem', 'LIKE', $request->scan . '%');
                $scan->orWhere('xcitem', 'LIKE', $request->scan . '%');
                $scan->orWhere('xstdprice', 'LIKE', $request->scan . '%');
            });
        }

        $products = $products->get(); // Execute the query
        return view('Admin.Return.create', compact('products'));

//        return  view('Admin.Return.create', compact('products'));
    }


    public function store(Request $request)
    {
//        return request()->all();

        $xordernumrequest = ProductReturn::where('zid', '100001')
        ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtmptrn, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
            ->first()
            ->max_number;
        $productReturn = $xordernumrequest +1 ;
        $formattedNumber = str_pad($productReturn, 6, '0', STR_PAD_LEFT);
        $sreProductReturn= $formattedNumber ;

//        $xordernumrDetailsequest = ProductReturnDetails::where('zid', '100001')
//        ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtrnnum, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
//            ->first()
//            ->max_number;
//        $formattedxordernumrNumber = str_pad($xordernumrDetailsequest, 6, '0', STR_PAD_LEFT);
//        $srexordernumrDetailProductReturn= ++$formattedxordernumrNumber ;
        $xordernumrDetailsequest = ProductReturnDetails::where('zid', '100001')
            ->whereRaw("ximtrnnum ~ '^\d+$' AND ximtrnnum != ''") // Exclude non-numeric and empty values
            ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtrnnum, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
            ->first()
            ->max_number;

        $formattedxordernumrNumber = str_pad($xordernumrDetailsequest, 6, '0', STR_PAD_LEFT);
        $srexordernumrDetailProductReturn = ++$formattedxordernumrNumber;

        $xglrefrequest = ProductReturn::where('zid', '100001')
            ->whereRaw("xglref ~ '^SRET\d+$'")
            ->selectRaw("MAX(CAST(SUBSTRING(xglref FROM 5) AS INTEGER)) as max_number")
            ->first()
            ->max_number;
        $productXglref = $xglrefrequest +1 ;
        $xglrefNumber = str_pad($productXglref, 6, '0', STR_PAD_LEFT);

//        $productReturn = $formattedNumber +1 ;
//        $productXglref = $xglrefNumber +1 ;

//        return  $sreProductReturn;

        $xdatecomArray = $request->input('xdatecom');
        $xwhArray = $request->input('xwh');
        $xprojArray = $request->input('xproj');
        $zidArray = $request->input('zid');
        $xremArray = $request->input('xrem');
        $xtrnimfArray = $request->input('xtrnimf');
        $xstatustrnArray = $request->input('xstatustrn');


        $xitemArray = $request->input('xitem');
        $xqtyordArray = $request->input('xqtyord');
        $xrateArray = $request->input('xrate');
        $xlineamtArray = $request->input('xlineamt');
        $currentRow = 0;



//        imtemptrn
        $saleReturn = ProductReturn::create([
            'zid' => $zidArray,
            'ximtmptrn'=> 'SRE-'.$sreProductReturn,
            'xdate'=> $xdatecomArray,
            'xyear' => date('Y'),
            'xper' => date('m'),
            'xdatecom' => date('Y-m-d'),
            'xrem' => $xremArray,
            'xproj'=> $xprojArray,
            'xwh' => $xwhArray,
            'xsign'=> value(-1),
            'xaction' => value('issue'),
            'zemail' => auth()->user()->email,
            'xemail'=>auth()->user()->email,
            'xtrnimf'=> $xtrnimfArray,
            'xglref' =>'SRET'. $xglrefNumber,
            'xmember'=>auth()->user()->email,
            'xstatustrn'=> value('5-Confirmed')

        ]);

        foreach ($xitemArray as $index => $xitem)
        {
//            $zid = $zidArray[$index] ?? '';
//            $sreValue = $sreProductReturn[$index] ?? '';
//
//            $ximtmptrn = 'SRE-' . $sreValue;


//            $relatedRecordExists = ProductReturn::where('zid', $zid)
//                ->where('ximtmptrn', $ximtmptrn)
//                ->exists();


                $saleReturnDetails = ProductReturnDetails::create([
                    'zid' => $zidArray[$index] ?? '',
                    'ximtmptrn'=> 'SRE-' .$sreProductReturn[$index] ?? '',
                    'xtorlno' => ++$currentRow ?? '',
                    'xitem'=> $xitemArray[$index] ?? '',
                    'xqtyord' => $xqtyordArray[$index] ?? '',
                    'ximtrnnum' =>'SRE-'.$srexordernumrDetailProductReturn++ ?? '',
                    'xrate'=> $xrateArray[$index] ?? '',
                    'xval'=>$xqtyordArray[$index] * $xrateArray[$index] ?? '',
                    'zemail'=>auth()->user()->email ,
                    'xemail'=>auth()->user()->email ,
                    'xqtyreq' => $xqtyordArray[$index] ?? '',
                    'xdatesch'=> value('2999-12-31'),
                    'xfrslnum'=> value('0'),
                    'xtoslnum' => value('0'),
                    'xlineamt'=>$xlineamtArray[$index] ?? '',
                ]);
//            $zid = $zidArray[$index] ?? '';
//            $sreValue = $sreProductReturn[$index] ?? '';
//
//            $ximtmptrn = 'SRE-' . $sreValue;
//
//            $saleReturnDetails = ProductReturnDetails::create([
//                'zid' => $zid ?? '',
//                'ximtmptrn'=> $ximtmptrn  ?? '' ,
//                'xtorlno' => ++$currentRow ?? '',
//                'xitem'=> $xitemArray[$index] ?? '',
//                'xqtyord' => $xqtyordArray[$index] ?? '',
//                'ximtrnnum' =>'SRE-'.$srexordernumrDetailProductReturn++ ?? '',
//                'xrate'=> $xrateArray[$index] ?? '',
//                'xval'=>$xqtyordArray[$index] * $xrateArray[$index] ?? '',
//                'zemail'=>auth()->user()->email ,
//                'xemail'=>auth()->user()->email ,
//                'xqtyreq' => $xqtyordArray[$index] ?? '',
//                'xdatesch'=> value('2999-12-31'),
//                'xfrslnum'=> value('0'),
//                'xtoslnum' => value('0'),
//                'xlineamt'=>$xlineamtArray[$index] ?? '',
//
//
//            ]);

        }
        return redirect()->back();


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
