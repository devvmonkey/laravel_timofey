<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;

class RegController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {
	if(Auth::id()==1){ 
	return view('reg');
	}
	else{

	return redirect('home');
}
    }

}


