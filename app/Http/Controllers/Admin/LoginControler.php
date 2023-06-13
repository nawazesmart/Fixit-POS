<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginControler extends Controller
{
    public  function loginView()
    {
        return view('Admin.auth.login');
//        return view('Admin.Div.class');
    }
}
