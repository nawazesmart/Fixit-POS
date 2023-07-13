<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\StoreSaleRequest;

use App\Models\Product;
use App\Models\ProductDetails;
use App\Models\Quantity;
use App\Models\SaleOrder;
use Dotenv\Parser\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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


//        $this->validate($request, [
//            'xdttax' => 'required',
//        ]);
        $lastInput = Quantity::orderBy('ximtrnnum', 'desc')->first();
        $lastNumber = ($lastInput) ? intval(substr($lastInput->ximtrnnum, 4)) : 0;
        $nextNumber = $lastNumber  ;
        $paddedNumber = str_pad($nextNumber, 7, '0', STR_PAD_LEFT) + 1;
        $xordernumrequest = 'IS--' . $paddedNumber;

//        return $request->all();

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
        $xordernumArray = $request->input('xordernum');
        $qtyArray = $request->input('qty');

//dd($zidArray);

        $previewData = [];
        foreach ($zidArray as $index => $zid) {

            $saleOrder = SaleOrder::create([
                'zid' => $zid,
                'xemp' => auth()->user()->email,
                'zemail' => auth()->user()->email,
                'xemail' => auth()->user()->email,
                'xsp' => auth()->user()->name,
//                    'xordernum' =>$xordernum,
//                    'xordernum' =>'co--' . rand(7, 9999999),
                'xordernum' => $request->input('xordernum'),
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
                'xteam' => $request->input('xteam'),
                'xmember' => $request->input('xmember'),
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
//                'xqtyreq' => $xqtyordArray[$index] ?? '',
                'xwh' => $xwhArray,
                'xcur' => value('BDT'),
                'xdttax' => $request->input('xdttax'),
                'zemail' => auth()->user()->email,
                'xemail' => auth()->user()->email,
            ]);


            $pro=  Quantity::create([
                'zid' => $zid,
                'ximtrnnum' =>'SI--' . rand(7, 9999999),
//                'ximtrnnum' => $xordernumrequest,
                'xitem' => $xitemArray[$index] ?? '',
                'xitemrow' => $request->input('xsltype'),
                'xwh' => $xwhArray[$index] ?? '',
                'xdate' => date('Y-m-d', strtotime($xdateArray[$index])),
                'xyear' => date('y'),
                'xper' => date('m'),
                'xqty' => $xqtyordArray[$index] ?? '',
                'xval' => 1,
                'xvalpost' => 1,
                'xdoctyp' => value('IS--'),
                'xdocnum' => $saleOrder->xordernum,
                'xdateexp' => date('Y-m-d'),
                'xdaterec' => date('Y-m-d'),
                'xaction' => value('Issue'),
                'xsign' => value('-1'),
                'xtime' => \Carbon\Carbon::now()->timezone('Asia/Dhaka')->format('d M, Y, g:i A'),
                'zemail' => auth()->user()->email,
                'xstdprice' => $xrateArray[$index] ?? '',
            ]);

            $previewData[] = [
                'saleOrder' => $saleOrder,
                'productDetails' => $productDetails,

            ];
        }

//        dd($pro);
        return view('Admin.Invoice.posinvoice', compact('previewData', 'productDetails', 'saleOrder'));


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

        $zid = '100001';
        $xqtyordArray = $request->input('xqtyord');

        $products = Product::where($request, 'zid', $zid)
            ->with(['quantity' => function ($query) use ($zid) {
                $query->where('zid', $zid);
            }]);


        for ($index = 0; $index < count($products); $index++) {
            $item = $products[$index];
            $total = 0;
            foreach ($item->quantity as $quantity) {
                $total += $quantity->xqty * $quantity->xsign;
            }

            $soldQuantity = $xqtyordArray[$index] ?? 0;
            $total -= $soldQuantity;

            $item->quantity_total = $total;
            dd($total . $soldQuantity);
        }


    }


    public function destroy($id)
    {
        //
    }
}

