<?php

namespace App\Http\Controllers;

use App\Http\Requests\PanelFormRequest;
use App\Panel;
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
        $sortBy = 'id';
        $sortDirection = 'ASC';

        if (request('sortby') || request('sortdir')) {
            $sortBy = request('sortby');
            $sortDirection = request('sortdir');
        }

        $panels = Panel::orderBy($sortBy, $sortDirection)->paginate(6);

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
	
	return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Panel $panel)
    {
        return view('panel/show', compact('panel'));
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
        $panel->update($request->all());

        alert()->success('Panel has been updated.');

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
 