<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ApiFunctionController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    //show view
    public function home()
    {
        return view('welcome');
    }

}//end class
