<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CreatekeyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {

	return view('create_key');
    }

}


