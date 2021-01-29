<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Keyss;
use App\User;
use App\Panel;
use Auth;


class SellerController extends Controller
{
    public function index()
    {
if(isset($_GET['panel_name'])){ 
    $panel_name = $_GET['panel_name'];
}
else{
$panel_name = "";
}

$data = [
    'keyss'  => Keyss::join('users','keyss.user_id','=', 'users.id')->limit(3)->get(),
    'keyss_not_active'  => Keyss::where('is_active', '=', '0')->limit(3)->get(),
    'panels'  => Panel::where([['p_u_id', '=', Auth::user()->id],['pages.title','like', '%' . $panel_name . '%']])->get(),

    ];
        return view('home', compact('data'));
    }

    public function destroy($id)
    {
        Keyss::destroy($id);

        alert()->success('Key has been deleted.');

        return back();
    }


}
