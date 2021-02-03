<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Panel;
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
    $panels  = Panel::get();

	return view('reg', compact('panels'));
	}
	else{

	return redirect('home');
}
    }

}


