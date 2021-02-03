<?php

namespace App\Http\Controllers;

use App\Http\Requests\PanelFormRequest;
use App\Keyss;
use App\User;
use App\Panel;
use Auth;
use Route;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

if(isset($_GET['panel_name'])){ 
    $panel_name = $_GET['panel_name'];
}
else{
$panel_name = ""; 
}

        $sortBy = 'id';
        $sortDirection = 'DESC';

        if (request('sortby') || request('sortdir')) {
            $sortBy = request('sortby');
            $sortDirection = request('sortdir');
        }

        $panels = Panel::orderBy($sortBy, $sortDirection)->where('pages.title','like', '%' . $panel_name . '%')->get();

        return view('panels', compact('panels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PanelFormRequest $request)
    {
        $panel = Panel::create($request->all());

        alert()->success('Панель добавленна!');
	
	return redirect('/panel');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Panel $panel)
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


$data = [
    'keyss'  => Keyss::join('users','keyss.user_id','=', 'users.id')
			->where('keyss.key_id','like', '%' . $key_name . '%')
			->limit(3)
			->get(),
    'keyss_not_active'  => Keyss::where('is_active', '=', '0')
			->where('keyss.key_id','like', '%' . $key_name . '%')
			->limit(3)
			->get(),
    'panell'  => Panel::where('id', '=', $panel->id)->get(),  


    ];

        return view('panel/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Panel $panel)
    {
        return view('panel/edit', compact('panel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PanelFormRequest $request, Panel $panel)
    {

	$name = $request->name;
        $panel->update(['title' => $name ]);

        alert()->success('Panel name has been updated.');

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Panel::destroy($id);

        alert()->success('Page has been deleted.');

        return redirect('/panel');
    }
}
 