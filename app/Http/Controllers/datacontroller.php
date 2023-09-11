<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class datacontroller extends Controller
{
    function add_data(Request $request) {
        Session::put('email',"$request->email");
        echo Session::get('email');

    }
}
