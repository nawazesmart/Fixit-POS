<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return  view('Admin.Custommer.custommer',[
            'customers'=>Member::all()
        ]);
    }


    public function create()
    {
        return view('Admin.Custommer.add-customer');
    }


    public function store(Request $request)
    {

        return $request;



        Member::CustomerCreateorUpdate($request);
        return redirect()->route('customers.index');
//        Member::create([
//            'xshort'=>$request->input('xshort'),
//            'xorg'=>$request->input('xorg'),
//            'xgcus'=>$request->input('xgcus'),
//            'xmobile'=>$request->input('xmobile'),
//            'xadd1' => $request->input('xadd1'),
//            'xadd2'=>$request->input('xadd2'),
//            'xzip'=>$request->input('xzip'),
//            'xcountry'=>$request->input('xcountry'),
//        ]);
//
//        return redirect()->back();
    }


    public function show($id)
    {
        return  view('Admin.Custommer.customer-details',[
            'customs'=>Member::find($id)
        ]);
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
