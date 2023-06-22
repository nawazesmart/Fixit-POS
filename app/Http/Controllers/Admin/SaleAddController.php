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
        $maxOrderNumberValue = SaleOrder::latest('xordernum')->value('xordernum');
        $newOrderNumber = (int)str_replace('CO--', '', $maxOrderNumberValue) + 1;
//        return $request->all();
//        $xordernum = SaleOrder::orderBy('xordernum' , 'DESC');
////        $newOrderNumber = 'CO--' . ($lastOrder->xordernum + 1);
//        $xordernum = SaleOrder::max('xordernum');
//        $newOrderNumber =  ($xordernum + 1);


        $xwhArray = $request->input('xwh');
        $xdateArray = $request->input('xdate');
        $zidArray = $request->input('zid');
        $xcostArray = $request->input('xcost');
        $xdescArray = $request->input('xdesc');
        $xitemArray = $request->input('xitem');
        $xunitselArray = $request->input('xunitsel');
        $xrateArray = $request->input('xrate');
        $xdtwotaxArray = $request->input('xdttax');
        $xsltypeArray = $request->input('xsltype');
        $xsalescatArray = $request->input('xsalescat');
        $xdtcommArray = $request->input('xdtcomm');
        $xdocnumArray = $request->input('xdocnum');
        $xdtdiscArray = $request->input('xdtdisc');
        $xlineamtArray = $request->input('xlineamt');
        $xqtyordArray = $request->input('xqtyord');
        $xtotamtArray = $request->input('xtotamt');

//            $quantityArray = $request->input('quantity');
//            $totalArray = $request->input('total');


        $previewData = [];
        foreach ($zidArray as $index => $zid) {

            $saleOrder = SaleOrder::create([
                'zid' => $zid,
                'xemp' => auth()->user()->email,
                'zemail' => auth()->user()->email,
                'xemail' => auth()->user()->email,
                'xsp' => auth()->user()->name,
//                    'xordernum' =>$newOrderNumber,
                'xordernum' => 'CO--' . rand(4, 9999),
                'xrow' => '' . rand(4, 9999),
                'xdate' => $xdateArray,
                'xdatecuspo' => $xdateArray,
                'xwh' => $xwhArray,
                'xdttax' => $request->input('xdttax'),
                'xsltype' => $request->input('xsltype'),
                'xsalescat' => $request->input('xsalescat'),
                'xdtcomm' => $request->input('xdtcomm'),
                'xdocnum' => $request->input('xdocnum'),
                'xdtdisc' => $request->input('xdtdisc'),
                'xtotamt' => $request->input('xtotamt'),
                'xcur' => value('BDT'),
                'xtrnord' => value('CO--'),
                'xquoteby' => value('1-Selling Unit'),
                'xyear' => date('y'),
                'xper' => date('m'),


            ]);


            // table = opodt
            $productDetails = ProductDetails::create([
                'xordernum' => $saleOrder->xordernum,
                'zid' => $zid ?? '',
                'xrate' => $xrateArray[$index] ?? '',
                'xrow' => '' . rand(5, 99999) ?? '',
                'xdesc' => $xdescArray[$index] ?? '',
                'xcost' => $xcostArray[$index] ?? '',
                'xitem' => $xitemArray[$index] ?? '',
                'xunitsel' => $xunitselArray[$index] ?? '',
                'xlineamt' => $xlineamtArray[$index] ?? '',
                'xqtyord' => $xqtyordArray[$index] ?? '',
                'xqtyreq' => $xqtyordArray[$index] ?? '',
                'xwh' => $xwhArray,
                'xcur' => value('BDT'),
                'xdttax' => $request->input('xdttax'),
                'zemail' => auth()->user()->email,
                'xemail' => auth()->user()->email,
            ]);

            $previewData[] = [
                'saleOrder' => $saleOrder,
                'productDetails' => $productDetails,
//                    'qty' => $quantityArray[$index],
//                    'total' => $totalArray[$index],
            ];

        }

        return view('Admin.Invoice.posinvoice', compact('previewData', 'productDetails'));


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

