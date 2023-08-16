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
        $zid = '100001';
//        $zid = $request->input('zid');
        $products = Product::select('xitem', 'xdesc')->groupBy('xdesc', 'xitem')->where('zid',$zid )->take(500);

//        $products = Product::select('xdesc')
//            ->where('zid', $zid)
//            ->groupBy('xdesc')
//            ->take(500);
//        $zid = $request->input('zid');
//        $products = Product::select('xdesc')
//            ->groupBy('xdesc')
//            ->where('zid', $zid)
//            ->get();
        if ($request->scan) {
            $products->where(function ($scan) use ($request) {
                $scan->where('xdesc', 'LIKE', $request->scan . '%');
                $scan->orWhere('xitem', 'LIKE', $request->scan . '%');
                $scan->orWhere('xcitem', 'LIKE', $request->scan . '%');
                $scan->orWhere('xstdprice', 'LIKE', $request->scan . '%');
            });
        }



        $products = $products->get();
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


        $xglrefrequest = ProductReturn::where('zid', '100001')
            ->whereRaw("xglref ~ '^SRET\d+$'")
            ->selectRaw("MAX(CAST(SUBSTRING(xglref FROM 5) AS INTEGER)) as max_number")
            ->first()
            ->max_number;
        $productXglref = $xglrefrequest +1 ;
        $xglrefNumber = str_pad($productXglref, 6, '0', STR_PAD_LEFT);

//        $xordernumrDetailsequest = ProductReturnDetails::where('zid', '100001')
//        ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtrnnum, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
//            ->first()
//            ->max_number;
//        $formattedxordernumrNumber = str_pad($xordernumrDetailsequest, 6, '0', STR_PAD_LEFT);
//        $srexordernumrDetailProductReturn= ++$formattedxordernumrNumber ;


//        $xordernumrDetailsequest = ProductReturnDetails::where('zid', '100001')
//            ->whereRaw("ximtrnnum ~ '^\d+$' AND ximtrnnum != ''") // Exclude non-numeric and empty values
//            ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtrnnum, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
//            ->first()
//            ->max_number;



//        $xordernumrDetailsequest = ProductReturnDetails::where('zid', '100001')
//            ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtrnnum, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
//            ->first()
//            ->max_number;

//
//        $xordernumrDetailsequest = ProductReturnDetails::where('zid', '100001')
//            ->whereRaw("ximtrnnum ~ '[0-9]'")
//            ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtrnnum, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
//            ->first()
//            ->max_number;
//        $formattedxordernumrNumber = str_pad($xordernumrDetailsequest, 6, '0', STR_PAD_LEFT);
//        $srexordernumrDetailProductReturn = ++$formattedxordernumrNumber;

        $xordernumrDetailsequest = ProductReturnDetails::where('zid', '100001')
            ->whereRaw("ximtrnnum ~ '[0-9]'")
            ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtrnnum, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
            ->first()
            ->max_number;


//        echo "Original value: $xordernumrDetailsequest<br>";

        $formattedxordernumrNumber = str_pad($xordernumrDetailsequest, 6, '0', STR_PAD_LEFT);

//        echo "Formatted value: $formattedxordernumrNumber<br>";

        $srexordernumrDetailProductReturn = ++$formattedxordernumrNumber;




//        $productReturn = $formattedNumber +1 ;
//        $productXglref = $xglrefNumber +1 ;

//        return  $formattedxordernumrNumber;

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
        $product_idsArray = $request->input('product_ids');
        $currentRow = 0;


//        return  $zidArray;
//        imtemptrn
        $saleReturn = ProductReturn::create([
            'zid' => $zidArray[0],
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
            'xmember'=>auth()->user()->name,
            'xstatustrn'=> value('5-Confirmed')

        ]);
        $previewData = [];
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
                    'zid' => $saleReturn->zid ?? '',
                    'ximtmptrn'=> $saleReturn->ximtmptrn ?? '',
                    'xtorlno' => ++$currentRow ?? '',
                    'xitem'=> $xitemArray[$index] ?? '',
                    'xqtyord' => $xqtyordArray[$index] ?? '',
                    'ximtrnnum' =>'SRE-'.$srexordernumrDetailProductReturn++ ?? '',
                    'xrate'=> $xrateArray[$index] ?? '',
                    'xbin'=> $product_idsArray[$index] ?? '',
                    'xval'=>$xqtyordArray[$index] * $xrateArray[$index] ?? '',
                    'zemail'=>auth()->user()->email ,
                    'xemail'=>auth()->user()->email ,
                    'xqtyreq' => $xqtyordArray[$index] ?? '',
                    'xdatesch'=> value('2999-12-31'),
                    'xfrslnum'=> value('0'),
                    'xtoslnum' => value('0'),
                    'xlineamt'=>$xlineamtArray[$index] ?? '',

                ]);
                $ReturnQuantity=Quantity::create([
                   'zid'=>$saleReturnDetails->zid ?? '',
                   'ximtrnnum'=>$saleReturnDetails->ximtrnnum ?? '',
                    'xitem' => $saleReturnDetails->xitem ?? '',
                    'xwh'=> $xwhArray ?? '' ,
                    'xdate'=>date('Y,m,d'),
                    'xyear' => date('Y'),
                    'xper' => date('m'),
                    'xqty' => $saleReturnDetails->xqtyord ?? '',
                    'xval'=>$saleReturnDetails->xval ?? '',
                    'xvalpost'=>$saleReturnDetails->xval ?? '',
                    'xdoctype' => value('SRE-') ?? '',
                    'xdocnum'=> $saleReturnDetails->ximtmptrn ?? '',
                    'xdocrow' =>+$currentRow ?? '',
                    'xaltqty'=>value('0.00') ?? '',
                    'xproj' => $xprojArray ?? '',
                    'xdateexp' => date('Y,m,d') ,
                    'xdaterec' => date('Y,m,d'),
                    'xaction'=> value('Return') ,
                    'xsign' => value('1'),
                    'xmember'=> auth()->user()->email ,
                ]);
            $previewData[] = [
                'saleReturn' => $saleReturn,
                'saleReturnDetails' => $saleReturnDetails,
            ];

        }
//        return redirect()->back();
        return view('Admin.Invoice.returnInvoice', compact('previewData', 'saleReturn', 'saleReturnDetails'));

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
