<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DivController extends Controller
{
    public  function div()
    {
        return view('Admin.Div.class');
    }
}
