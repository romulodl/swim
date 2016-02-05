<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\SwimmerRequest;
use App\Http\Controllers\Controller;

class SwimmerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $swimmers = \Auth::user()
            ->swimmers()
            ->orderBy('name')
            ->simplePaginate(10);

        return view('swimmers.index', compact('swimmers'));
    }

    public function create()
    {
        return view('swimmers.create');
    }

    public function store(SwimmerRequest $request)
    {
        $swimmer = new \App\Swimmer($request->all());
        \Auth::user()->swimmers()->save($swimmer);
        \Session::flash('flash_message', 'Swimmer has been created.');

        return redirect('swimmers');
    }

    public function edit($id)
    {
        $swimmer = \App\Swimmer::findOrFail($id);

        return view('swimmers.edit', compact('swimmer'));
    }

    public function update(SwimmerRequest $request, $id)
    {
        $swimmer = \App\Swimmer::findOrFail($id);
        $swimmer->update($request->all());
        \Session::flash('flash_message', 'Swimmer has been updated.');

        return redirect('swimmers');
    }

    public function destroy($id)
    {
        $swimmer = \App\Swimmer::FindOrFail($id);
        $swimmer->delete();
        \Session::flash('flash_message', 'Swimmer has been deleted.');

        return redirect('swimmers');
    }
}
