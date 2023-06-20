<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\StoreSaleRequest;
use App\Models\ProductDetails;
use App\Models\SaleOrder;
use Illuminate\Http\Request;

class SaleAddController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }



    public function store(StoreSaleRequest $request)
    {
        return $request->all();


            $xwhArray = $request->input('xwh');
            $xdateArray = $request->input('xdate');
            $zidArray = $request->input('zid');
            $xcostArray = $request->input('xcost');
            $xdescArray = $request->input('xdesc');
            $xitemArray = $request->input('xitem');
            $xunitselArray = $request->input('xunitsel');
            $xrateArray = $request->input('xrate');

//            $quantityArray = $request->input('quantity');
//            $totalArray = $request->input('total');


        $previewData = [];
            foreach ($zidArray as $index => $zid) {

                $saleOrder = SaleOrder::create([
                    'zid' => $zid,
                    'xemp' => auth()->user()->mail,
                    'xsp' => auth()->user()->name,
                    'xordernum' => 'CO--13' . rand(5, 99999),
                    'xrow' => '' . rand(4, 9999),
                    'xdate' => $xdateArray,
                    'xwh' => $request->input('xwh'),
                ]);


                // table = opodt
                $productDetails = ProductDetails::create([
                    'xordernum' => $saleOrder->xordernum,
                    'zid' => $zid,
                    'xrate' => $xrateArray[$index],
                    'xrow' => '' . rand(5, 99999),
                    'xdesc' => $xdescArray[$index],
                    'xcost' => $xcostArray[$index],
                    'xitem' => $xitemArray[$index],
                    'xunitsel' => $xunitselArray[$index],
                ]);

                $previewData[] = [
                    'saleOrder' => $saleOrder,
                    'productDetails' => $productDetails,
//                    'qty' => $quantityArray[$index],
//                    'total' => $totalArray[$index],
                ];

            }

            return view('Admin.Invoice.posinvoice', compact('previewData'));





    }

//    public function store(StoreSaleRequest $request)
//    {
//
//        $xwh = $request->input('xwh');
//        $xdate = $request->input('xdate');
//        $zid = $request->input('zid');
//        $xcost = $request->input('xcost');
//        $xdesc = $request->input('xdesc');
//        $xitem = $request->input('xitem');
//        $xunitsel = $request->input('xunitsel');
//        $xrate = $request->input('xrate');
////        dd($request->toArray());
//
//        SaleOrder::create([
//
//
//
//            'xemp' => auth()->user()->mail,
//            'xsp' => auth()->user()->name,
//            'xdate' => $xdate,
//            'xwh' => $xwh,
//            'zid' => $zid,
////            'xmobile' => $request->member->xmobile,
////            'xsalescat' => $request->input(''),
////            'xtrnord' => $request->input(''),
////            'xdocnum' => $request->input(''),
////            'xdtcomm' => $request->input(''),
//
//
////            xemp =>Salesmen email
////            xsp =>Salesmen name
////            xsltype => Cash or card type
////            xdate=> date
////            xmobile=> member table-> customer phone number
////            xsalescat=> online  payment method
////            xtrnord=>card issue system
////            xdocnum => Card number or something like
////            xdtcomm => card cost something like
//
//        ]);
//
//        ProductDetails::create([
//            'zid' => $zid,
//            'xrate' => $xrate,
//            'xdesc' => $xdesc,
//            'xcost' => $xcost,
//            'xitem' => $xitem,
//            'xunitsel' => $xunitsel,
//        ]);
//        return redirect()->back();
//
//    }

    //    48        $saleOrder = new SaleOrder();           // table = opord
//            $saleOrder->zid   = $zid;
////            $saleOrder->xemp  = auth()->user()->mail;
//            $saleOrder->xsp   = auth()->user()->name;
//            $saleOrder->xdate = $xdateArray;
//            $saleOrder->xwh   = $xwhArray;
//            $saleOrder->xordernum   = 'CO--13'.rand(4,9999);
//            $saleOrder->xrow  = 12345678;
//            $saleOrder->save();

//            SaleOrder::create([
//                'zid' => $zid,
//                'xemp' => auth()->user()->mail,
//                'xsp' => auth()->user()->name,
//                'xdate' => $xdateArray,
//                'xordernum' =>  'CO--13'.rand(4,9999),
//                'xrow' =>'CO--13'.rand(4,9999) ,
//                'xwh' => $xwhArray,
//
//            ]);

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


//public function store(StoreSaleRequest $request)
//{
////        return $request->all();
//    $xwhArray = $request->input('xwh');
//    $xdateArray = $request->input('xdate');
//    $zidArray = $request->input('zid');
//    $xcostArray = $request->input('xcost');
//    $xdescArray = $request->input('xdesc');
//    $xitemArray = $request->input('xitem');
//    $xunitselArray = $request->input('xunitsel');
//    $xrateArray = $request->input('xrate');
//
//    foreach ($zidArray as $index => $zid) {
//
//
//
//        ProductDetails::create([
//            'zid' => $zid,
//            'xemp' => auth()->user()->mail,
//            'xsp' => auth()->user()->name,
//            'xdate' => $xdateArray,
//            'xordernum' =>  'CO--13'.rand(4,9999),
//            'xrow' =>'CO--13'.rand(4,9999) ,
//            'xwh' => $xwhArray,
//
//        ]);
//
//
//        $saleOrder = SaleOrder::create([
//            'zid'   => $zid,
//            'xemp'  => auth()->user()->mail,
//            'xsp'   => auth()->user()->name,
//            'xordernum' => 'CO--13'.rand(4,9999),
//            'xrow' =>'CO--13'.rand(4,9999) ,
//            'xdate' => $xdateArray,
//            'xwh'   => $request->input('xwh'),
//        ]);
//
//
//
//        return redirect()->back();
//    }
//
//
//}

