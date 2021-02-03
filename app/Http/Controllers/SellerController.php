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

if(isset($_GET['key_name'])){ 
    $key_name = $_GET['key_name'];
}
else{
$key_name = ""; 
}

$c_user = User::where('id', '=', Auth::id())->first();
$param  = $c_user->rights;
$params = explode(", ", $param);
$data = [
    'keyss'  => Keyss::join('users','keyss.user_id','=', 'users.id')
			->where('keyss.key_id','like', '%' . $key_name . '%')
			->limit(3)
			->get(),
    'keyss_not_active'  => Keyss::where('is_active', '=', '0')
			->where('keyss.key_id','like', '%' . $key_name . '%')
			->limit(3)
			->get(),
    'panels'  => Panel::whereIn('pages.title', $params)
			->where('pages.title','like', '%' . $panel_name . '%')
			->get(),

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
