<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Zuser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;

use Illuminate\Support\Facades\Hash;
//users
class CreateUserController extends Controller
{

    public function index()
    {
        $users=User::all();
        return view('Admin.user.index' , compact('users'));
    }


    public function create()
    {
       return view('Admin.user.create');
    }


    public function store(Request $request)
    {
        try {




            $password             = $request->input('password');
            $rePassword           = $request->input('request_password');


            if ($password !== $rePassword) {
                return redirect()->back()->with('errorMessage', 'Passwords do not match');
            }
            User::create([
                'name'            => $request->input('name'),

                'email'           => $request->input('email'),
//                'password'        => Has::make($password),
                'password'        => Hash::make($password)



            ]);
            Zuser::create([
                'xname'            => $request->input('name'),
                'zemail'           => $request->input('email'),
                'xpassword'        => Hash::make($password),
                'zid'              => value('100001'),
                'xaccess'          => value('z-100001'),
                'xdformat'         => value('Y-M-D'),
                'zchanged'         => value('0'),
                'xlanguage'        => value('English'),
                'xscprefix'        => value('Alt'),
                'xscexclude'       => value('fevhta'),
                'xautoshow'        => value('0'),
                'xtooltips'        => value('1'),
                'zactive'          => value('1'),
                'xsingleses'       => value('0'),
                'xaccessloc'       => value('0'),


            ]);





            return redirect()->route('users.index')->with('message', 'User Create successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('errorMessage', 'User Created dosNot successfully: ' . $e->getMessage());
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.user.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {

        $user                 = User::findOrFail($id);
        $oldPassword          = $request->input('oldpassword');
        $password             = $request->input('password');
        $rePassword           = $request->input('request_password');

        if (!Hash::check($oldPassword, $user->password)) {
            return redirect()->back()->withErrors(['error' => 'Old password is incorrect']);
        }



        if ($password !== $rePassword) {
            return redirect()->back()->withErrors(['error' => 'Passwords do not match']);
        }



        $user->update([
            'name'            => $request->input('name'),
//            'phone'           => $request->input('phone'),
            'email'           => $request->input('email'),
        ]);

        if ($password)
            $user->update([
                'password'    => Hash::make($password),
            ]);
        return redirect()->route('users.index')->with('message', 'User Information Update successfully ');
    }


    public function destroy($id)
    {
        $createUser= User::find($id);
        if ($createUser) {
            $createUser->delete();
            return redirect()->back()->with('message', 'User  deleted successfully.');
        } else {
            return redirect()->back()->with('errorMessage', 'User not found.');
        }
    }
}
