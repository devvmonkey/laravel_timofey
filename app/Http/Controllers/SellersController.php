<?php

namespace App\Http\Controllers;


use App\User;
use App\Keyss;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;


class SellersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
if(isset($_GET['name'])){ 
    $name = $_GET['name'];
}
else{
$name = "";
}
$data = [
    'users'  => User::where('users.name','like', '%' . $name . '%')->limit(3)->get(),
    ];
        return view('sellers', compact('data'));
    }

}




