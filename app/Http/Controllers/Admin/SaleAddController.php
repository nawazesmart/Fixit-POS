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

//        return request()->all();

        $xordernumrequest = Quantity::selectRaw('MAX(CAST(REGEXP_REPLACE(ximtrnnum, \'[^\d]*\', \'\', \'g\') AS INTEGER)) as max_number')
            ->first()
            ->max_number;

        $xorderNumber = ++$xordernumrequest;
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
        $xmemberArray = $request->input('xmember');
        $xteamArray = $request->input('xteam');
        $qtyArray = $request->input('qty');
//        $xrowarry = value('' . rand(4, 9999));
//        $xrowarry = $request->input('xrow');
//dd($zidArray);
//dd($zidArray,$xordernumArray,$xdateArray,$xwhArray,$xdtwotaxArray,$xsltypeArray,$xsalescatArray,$xdtcommArray,$xdocnumArray);

        $saleOrder = SaleOrder::create([
            'zid' => $zidArray[0],
            'xemp' => auth()->user()->email,
            'zemail' => auth()->user()->email,
            'xemail' => auth()->user()->email,
            'xsp' => auth()->user()->name,
            'xordernum' => $xordernumArray,
//                'xrow' => '' . rand(4, 9999),
            'xdate' => $xdateArray,
            'xdatecuspo' => $xdateArray,
            'xwh' => $xwhArray,
            'xdttax' => $xdtwotaxArray,
            'xsltype' => $xsltypeArray,
            'xsalescat' => $xsalescatArray,
            'xdtcomm' => $xdtcommArray,
            'xtotamt' => $xtotamtArray,
            'xdocnum' => $xdocnumArray,
            'xteam' => $xteamArray,
            'xmember' => $xmemberArray,
            'xcur' => value('BDT'),
            'xtrnord' => value('CO--'),
            'xquoteby' => value('1-Selling Unit'),
            'xyear' => date('y'),
            'xper' => date('m'),
        ]);
//            dd($saleOrder);
        $previewData = [];
        foreach ($xitemArray as $index => $xitem) {
            // table = opodt
            $productDetails = ProductDetails::create([
                'xordernum' => $request->input('xordernum') ?? '',
                'zid' => $zidArray[$index] ?? '',
                'xrate' => $xrateArray[$index] ?? '',
                'xrow' => '' . rand(4, 9999) ?? '',
                'xdesc' => $xdescArray[$index] ?? '',
                'xcost' => $xcostArray[$index] ?? '',
                'xitem' => $xitem ?? '',
                'xunitsel' => $xunitselArray[$index] ?? '',
                'xlineamt' => $xlineamtArray[$index] ?? '',
                'xqtyord' => $xqtyordArray[$index] ?? '',
                'xwh' => $xwhArray[$index] ?? '',
                'xcur' => value('BDT'),
                'xdttax' => $request->input('xdttax'),
                'zemail' => auth()->user()->email,
                'xemail' => auth()->user()->email,
            ]);
            Quantity::create([
                'zid' => $zidArray[$index] ?? '',
                'ximtrnnum' => 'SI--' . rand(4, 9999) ?? '',
//                'ximtrnnum' => 'SI--'. ($xorderNumber+1)  ?? '',
                'xitem' => $xitem,
                'xitemrow' => $request->input('xsltype'),
                'xwh' => $xwhArray[$index] ?? '',
                'xdate' => date('Y-m-d', strtotime($xdateArray[$index])),
                'xyear' => date('y'),
                'xper' => date('m'),
                'xqty' => $xqtyordArray[$index] ?? '',
                'xdocrow' => '' . rand(4, 9999) ?? '',
                'xval' => 1,
                'xvalpost' => 1,
                'xdoctyp' => value('IS--'),
                'xdocnum' => $request->input('xordernum') ?? '',
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

