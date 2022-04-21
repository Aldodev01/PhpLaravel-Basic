<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function formSubmit(Request $req)
    {
        print_r($req->input());
    }
}
