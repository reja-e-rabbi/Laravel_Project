<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    function Notfound() {
        return view('Backend.error404');
        //return "hallow world";
    }
}
