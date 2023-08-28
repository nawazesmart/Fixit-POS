<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\AccountDetails;
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

        $xordernumrequest = ProductReturn::where('zid', '100001')
            ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtmptrn, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
            ->first()
            ->max_number;
//        $productReturn = $xordernumrequest +1 ;
//        $formattedNumber = str_pad($productReturn, 6, '0', STR_PAD_LEFT);

//        return $request->all();
        $zid = '100001';
        $products = Product::select('xitem', 'xdesc')->groupBy('xdesc', 'xitem')->where('zid',$zid )->take(0);
        if ($request->scan) {
            $products->where(function ($scan) use ($request) {
                $scan->where('xdesc', 'LIKE', $request->scan . '%');
                $scan->orWhere('xitem', 'LIKE', $request->scan . '%');
                $scan->orWhere('xcitem', 'LIKE', $request->scan . '%');
                $scan->orWhere('xstdcost', 'LIKE', $request->scan . '%');
            })
            ->take(9)
                ->get();
        }
        $products = $products->get();
        return view('Admin.Return.create', compact('products','xordernumrequest'));
//main search use ajax so it is mane query use ReturnDetailsController in last search function
//        return  view('Admin.Return.create', compact('products'));
    }


    public function store(Request $request)
    {

//        return request()->all();

        try {

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
//            ->whereRaw("ximtrnnum ~ '[0-9]'")
//            ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtrnnum, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
//            ->first()
//            ->max_number;
//        $formattedxordernumrNumber = str_pad($xordernumrDetailsequest, 6, '0', STR_PAD_LEFT);
//        $srexordernumrDetailProductReturn = ++$formattedxordernumrNumber;

//            $xordernumrDetailsequest = ProductReturnDetails::where('zid', '100001')
//                ->whereRaw("ximtrnnum ~ '[0-9]'")
//                ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtrnnum, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
//                ->first()
//                ->max_number;
//
//            $formattedxordernumrNumber = str_pad($xordernumrDetailsequest + 1, 6, '0', STR_PAD_LEFT);
//            $srexordernumrDetailProductReturn = $formattedxordernumrNumber;



//        $productReturn = $formattedNumber +1 ;
//        $productXglref = $xglrefNumber +1 ;

//        return  $srexordernumrDetailProductReturn;

        $xdatecomArray = $request->input('xdatecom');
        $xwhArray = $request->input('xwh');
        $xprojArray = $request->input('xproj');
        $zidArray = $request->input('zid');
        $xremArray = $request->input('xrem');
        $xtrnimfArray = $request->input('xtrnimf');
        $xstatustrnArray = $request->input('xstatustrn');



        $totalvalArray = $request->input('totaalime');
        $totalalimevalArray = $request->input('totalval');


        $xitemArray = $request->input('xitem');
        $xqtyordArray = $request->input('xqtyord');
        $xrateArray = $request->input('xrate');
        $xstdcostArray = $request->input('xstdcost');
        $xunitArray = $request->input('xunit');
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
            $xordernumrDetailsequest = ProductReturnDetails::where('zid', '100001')
                ->whereRaw("ximtrnnum ~ '[0-9]'")
                ->selectRaw('MAX(CAST(REGEXP_REPLACE(ximtrnnum, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
                ->first()
                ->max_number;

            $incrementedNumber = $xordernumrDetailsequest + 1;
            $formattedxordernumrNumber = str_pad($incrementedNumber, 6, '0', STR_PAD_LEFT);


            $saleReturnDetails = ProductReturnDetails::create([
                    'zid' => $saleReturn->zid ?? '',
                    'ximtmptrn'=> $saleReturn->ximtmptrn ?? '',
                    'xtorlno' => ++$currentRow ?? '',
                    'xitem'=> $xitemArray[$index] ?? '',
                    'xqtyord' => $xqtyordArray[$index] ?? '',
                    'ximtrnnum' =>'SRE-'.$formattedxordernumrNumber++ ?? '',
                    'xrate'=> $xstdcostArray[$index] ?? '',
                    'xstdprice'=> $xrateArray[$index] ?? '',
                    'xunit'=> $xunitArray[$index] ?? '',
                    'xbin'=> $product_idsArray[$index] ?? '',
                    'xval'=>$xqtyordArray[$index] * $xstdcostArray[$index] ?? '',
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
        $Acconts = Account::create([
            'zid' => $zidArray[0] ?? '',
            'xvoucher'=>'SRET'. $xglrefNumber ??'',
            'xref' =>'SRE-'.$sreProductReturn ?? '',
            'xdate'=> date('Y,m,d') ??'',
            'xyear' => date('Y') ??'',
            'xper'=> date('m')  ??'',
            'xstatusjv'=> value('Balanced') ??'',
            'xdatedue'=>date('Y,m,d') ??'',
            'dumzid'=>value('0') ??'',
            'zemail'=> auth()->user()->email ?? '',
            'xnumofper'=>value('0') ??'',
            'xnote'=> value('***System Generated voucher from IM***') ??'',
            'xmember'=>auth()->user()->email ??'',
            'xaction'=>value('Journal') ??'',

        ]);
        $accountDetails = AccountDetails::create([
            'zid'=>$zidArray[0] ?? '' ,
            'xvoucher'=>'SRET'. $xglrefNumber ??'',
            'xrow'=> value('1'),
            'xacc' => value('08010001'),
            'xaccusage'=>value('Ledger'),
            'xaccsource'=> value('None'),
            'xproj'=> $xprojArray ,
            'xcur' => value('BDT'),
            'xexch'=>value('1.0000000000'),
            'xprime'=>$totalvalArray  ?? '',
            'xbase'=>$totalvalArray  ?? '',
            'xacctype' => value('Income'),
            'zemail' => auth()->user()->email  ?? '',
            'xamount' => $totalvalArray  ?? '',
            'xallocation'=> value('0.00'),
        ]);
        $accountDetailsTwo = AccountDetails::create([
            'zid'=>$zidArray[0] ?? '' ,
            'xvoucher'=>'SRET'. $xglrefNumber ??'',
            'xrow'=> value('2'),
            'xacc' => value('01010001'),
            'xaccusage'=>value('Cash'),
            'xaccsource'=> value('None'),
            'xproj'=> $xprojArray ,
            'xcur' => value('BDT'),
            'xexch'=>value('1.0000000000'),
            'xprime'=> -$totalvalArray  ?? '',
            'xbase'=> -$totalvalArray  ?? '',
            'xacctype' => value('Asset'),
            'zemail' => auth()->user()->email  ?? '',
            'xamount' => $totalvalArray  ?? '',
            'xallocation'=> value('0.00'),
        ]);
        $accountDetailsThree = AccountDetails::create([
            'zid'=>$zidArray[0] ?? '' ,
            'xvoucher'=>'SRET'. $xglrefNumber ??'',
            'xrow'=> value('3'),
            'xacc' => value('01060003'),
            'xaccusage'=>value('Ledger'),
            'xaccsource'=> value('None'),
            'xproj'=> $xprojArray ,
            'xcur' => value('BDT'),
            'xexch'=>value('1.0000000000'),
            'xprime'=> $totalalimevalArray  ?? '',
            'xbase'=> $totalalimevalArray  ?? '',
            'xacctype' => value('Asset'),
            'zemail' => auth()->user()->email  ?? '',
            'xamount' => $totalalimevalArray  ?? '',
            'xallocation'=> value('0.00'),
        ]);
        $accountDetailsFore = AccountDetails::create([
            'zid'=>$zidArray[0] ?? '' ,
            'xvoucher'=>'SRET'. $xglrefNumber ??'',
            'xrow'=> value('4'),
            'xacc' => value('04010020'),
            'xaccusage'=>value('Ledger'),
            'xaccsource'=> value('None'),
            'xproj'=> $xprojArray ,
            'xcur' => value('BDT'),
            'xexch'=>value('1.0000000000'),
            'xprime'=> -$totalalimevalArray  ?? '',
            'xbase'=> -$totalalimevalArray  ?? '',
            'xacctype' => value('Expenditure'),
            'zemail' => auth()->user()->email  ?? '',
            'xamount' => $totalalimevalArray  ?? '',
            'xallocation'=> value('0.00'),
        ]);
//        return redirect()->back();
        return view('Admin.Invoice.returnInvoice', compact('previewData', 'saleReturn', 'saleReturnDetails'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
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
