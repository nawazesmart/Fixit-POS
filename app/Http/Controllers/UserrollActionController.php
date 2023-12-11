<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserrollActionController extends Controller
{
//user-rolls
    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.user.rolls.index', compact('user'));
    }


    public function update(Request $request, $id)
    {
//        DB::table('users')->update([            //using Query Builder//
//
//            'user_roll' => $request->user_roll,
//            'sale_roll' => $request->sale_roll,
//            'sale_option' => $request->sale_option,
//            'sale_details' => $request->sale_details,
//            'barcode_option' => $request->barcode_option,
//            'return_roll' => $request->return_roll,
//            'return_option' => $request->return_option,
//            'return_details' => $request->return_details,
//        ]);
//        return redirect()->route('users.index');

        $rolls = User::findOrFail($id);
        $rolls->update([

            'user_roll'                   => $request->input('user_roll'),
            'sale_roll'                   => $request->input('sale_roll'),
            'sale_option'                 => $request->input('sale_option'),
            'sale_details'                => $request->input('sale_details'),
            'barcode_option'              => $request->input('barcode_option'),
            'return_roll'                 => $request->input('return_roll'),
            'return_option'               => $request->input('return_option'),
            'return_details'              => $request->input('return_details'),
            'user_v'                      => $request->input('user_v'),
            'user_delete'                 => $request->input('user_delete'),
            'user_edit'                   => $request->input('user_edit'),

        ]);

        return redirect()->route('users.index')->with('message', 'User Permission Update successfully ');
    }


    public function destroy($id)
    {
        //
    }
}
